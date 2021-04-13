<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Profile;
use App\Models\TimeLine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function welcome(Request $request)
    {
        if (Auth::check()) {
            return redirect('home');
        }
        return view('welcome');
    }

    public function index(Request $request)
    {
        $search = request()->query('search');
        $from = $request->get('from');
        $to = $request->get('to');
        $lastId = null;
        $search_date = $request->get('search_date');
        $dashData = (object)[];
        $dashData->profile = $this->getProfileChartCount($from, $to, $search_date);
        $dashData->users = $this->getUserChartCount($from, $to, $search_date);
        $dashData->analytics = $this->getAnalyticsCount($from, $to, $search_date);
        $dashData->profileList = Profile::with('trackings')->orderBy('id', 'desc')->where(function (Builder $query) use ($from, $to, $search_date) {
            if ($from  && $to) {
                $query->where('created_at', '>=', $from)
                    ->where('created_at', '<=', $to);
            }
            if ($search_date) {
                $query->whereDate('created_at', '=', $search_date);
            }
            if (Auth::user()->role == "admin") {
                $query->where('is_completed', 1);
                return $query;
            } else if (Auth::user()->role == "employ") {
                $query->where('is_completed', 1);
                return $query->whereIn('section_id', session('section'));
            } else {
                return $query->whereIn('dep_id', session('department'));
            }
        })->take(5)->get();
        $dashData->usersCount = User::where(function (Builder $query) use ($from, $to, $search_date) {
            if ($from  && $to) {
                $query->where('created_at', '>=', $from)
                    ->where('created_at', '<=', $to);
            }
            if ($search_date) {
                $query->whereDate('created_at', '=', $search_date);
            }
            return $query;
        })->count();
        $dashData->profileEntered = Profile::where('employ_id', Auth::user()->id)->count();
        $dashData->profilePending = Profile::where('is_completed', 0)->where(function (Builder $query) use ($from, $to, $search_date) {
            if ($from  && $to) {
                $query->where('created_at', '>=', $from)
                    ->where('created_at', '<=', $to);
            }
            if ($search_date) {
                $query->whereDate('created_at', '=', $search_date);
            }
            if (Auth::user()->role == "admin") {
                return $query;
            } else if (Auth::user()->role == "employ") {
                return $query->whereIn('section_id', session('section'));;
            } else {
                return $query->whereIn('dep_id', session('department'));;
            }
        })->count();
        $dashData->profileApproved = Profile::where('is_completed', 1)->where(function (Builder $query) use ($from, $to, $search_date) {
            if ($from  && $to) {
                $query->where('created_at', '>=', $from)
                    ->where('created_at', '<=', $to);
            }
            if ($search_date) {
                $query->whereDate('created_at', '=', $search_date);
            }
            if (Auth::user()->role == "admin") {
                return $query;
            } else if (Auth::user()->role == "employ") {
                return $query->whereIn('section_id', session('section'));
            } else {
                return $query->whereIn('dep_id', session('department'));
            }
        })->count();
        if (Auth::user()->role == 'employ') {
            if (Profile::orderBy('id', 'desc')->where('is_drafted', 0)->where('employ_id', Auth::user()->id)->count() > 0) {
                $lastId = Profile::orderBy('id', 'desc')->where('is_drafted', 0)->where('employ_id', Auth::user()->id)->take(1)->first()->id;
            }
        } else {
            if (Profile::orderBy('id', 'desc')->where('is_drafted', 0)->whereIn('dep_id', session('department'))->count() > 0) {
                $lastId = Profile::orderBy('id', 'desc')->whereIn('dep_id', session('department'))->take(1)->first()->id;
            }
        }
        $dashData->activity = TimeLine::where('profile_id', $lastId)->take(10)->where(function (Builder $query) use ($from, $to, $search_date) {
            if ($from  && $to) {
                $query->where('created_at', '>=', $from)
                    ->where('created_at', '<=', $to);
            }
            if ($search_date) {
                $query->whereDate('created_at', '=', $search_date);
            }
            return $query;
        })->latest()->get();
        //    dd(session('section'));
        // return response()->json($dashData, 200);
        return view('home', compact('dashData'));
    }

    public function getAnalyticsCount($from, $to, $search_date)
    {
        if (Auth::user()->role == 'employ') {
            return $this->getProfileEnteredCount($from, $to, $search_date);
        } else {
            return $this->getUserCount($from, $to, $search_date);
        }
    }

    public function getUserCount($from, $to, $search_date)
    {
        $users = User::select('id', 'created_at')->where(function (Builder $query) use ($from, $to, $search_date) {
            if ($from  && $to) {
                $query->where('created_at', '>=', $from)
                    ->where('created_at', '<=', $to);
            }
            if ($search_date) {
                $query->whereDate('created_at', '=', $search_date);
            }
            return $query;
        })
            ->get()
            ->groupBy(function ($date) {
                //return Carbon::parse($date->created_at)->format('Y'); // grouping by years
                return Carbon::parse($date->created_at)->format('m'); // grouping by months
            });
        $usermcount = [];
        $userArr = [];

        foreach ($users as $key => $value) {
            $usermcount[(int)$key] = count($value);
        }

        for ($i = 1; $i <= 12; $i++) {
            if (!empty($usermcount[$i])) {
                $userArr[$i] = $usermcount[$i];
            } else {
                $userArr[$i] = 0;
            }
        }
        return $userArr;
    }

    public function getProfileEnteredCount($from, $to, $search_date)
    {
        $users = Profile::select('id', 'created_at')->where(function (Builder $query) use ($from, $to, $search_date) {
            if ($from  && $to) {
                $query->where('created_at', '>=', $from)
                    ->where('created_at', '<=', $to);
            }
            if ($search_date) {
                $query->whereDate('created_at', '=', $search_date);
            }
            return $query->where('employ_id', Auth::user()->id);
        })
            ->get()
            ->groupBy(function ($date) {
                //return Carbon::parse($date->created_at)->format('Y'); // grouping by years
                return Carbon::parse($date->created_at)->format('m'); // grouping by months
            });
        $usermcount = [];
        $userArr = [];

        foreach ($users as $key => $value) {
            $usermcount[(int)$key] = count($value);
        }

        for ($i = 1; $i <= 12; $i++) {
            if (!empty($usermcount[$i])) {
                $userArr[$i] = $usermcount[$i];
            } else {
                $userArr[$i] = 0;
            }
        }
        return $userArr;
    }

    public function getUserChartCount($from, $to, $search_date)
    {
        $users = User::select('id', 'created_at')->where(function (Builder $query) use ($from, $to, $search_date) {
            if ($from  && $to) {
                $query->where('created_at', '>=', $from)
                    ->where('created_at', '<=', $to);
            }
            if ($search_date) {
                $query->whereDate('created_at', '=', $search_date);
            }
            return $query;
        })
            ->get()
            ->groupBy(function ($date) {
                //return Carbon::parse($date->created_at)->format('Y'); // grouping by years
                return Carbon::parse($date->created_at)->format('m'); // grouping by months
            });

        $usermcount = [];
        $userArr = [];

        foreach ($users as $key => $value) {
            $usermcount[(int)$key] = count($value);
        }

        for ($i = 1; $i <= 12; $i++) {
            if (!empty($usermcount[$i])) {
                $userArr[$i] = $usermcount[$i];
            } else {
                $userArr[$i] = 0;
            }
        }
        return $userArr;
    }

    public function getProfileChartCount($from, $to, $search_date)
    {
        $profiles = Profile::select('id', 'created_at')->where(function (Builder $query) use ($from, $to, $search_date) {
            if ($from  && $to) {
                $query->where('created_at', '>=', $from)
                    ->where('created_at', '<=', $to);
            }
            if ($search_date) {
                $query->whereDate('created_at', '=', $search_date);
            }

            if (Auth::user()->role == 'employ') {
                $query->where('employ_id', '=', Auth::user()->id);
            } else {
                $query->whereIn('dep_id', session('department'));
            }

            if ($search_date) {
                $query->whereDate('created_at', '=', $search_date);
            }
            return $query;
        })
            ->get()
            ->groupBy(function ($date) {
                //return Carbon::parse($date->created_at)->format('Y'); // grouping by years
                return Carbon::parse($date->created_at)->format('m'); // grouping by months
            });

        $profilemcount = [];
        $profileArr = [];

        foreach ($profiles as $key => $value) {
            $profilemcount[(int)$key] = count($value);
        }

        for ($i = 1; $i <= 12; $i++) {
            if (!empty($profilemcount[$i])) {
                $profileArr[$i] = $profilemcount[$i];
            } else {
                $profileArr[$i] = 0;
            }
        }
        return $profileArr;
    }

    public function getNotifications()
    {
        $notification = (object)[];
        $notification->approved = Profile::where('is_notify', 1)->take(5)->get();
        return response()->json($notification, 200);
    }
}
