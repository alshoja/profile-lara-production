<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Profile;
use App\Models\TimeLine;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class HomeController extends BaseController
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
    public function index(Request $request)
    {
        $search = request()->query('search');
        $from = $request->get('from');
        $to = $request->get('to');
        $search_date = $request->get('search_date');
        $dashData = (object)[];
        $dashData->profile = $this->getProfileChartCount($from, $to, $search_date);
        $dashData->users = $this->getUserChartCount($from, $to, $search_date);
        $dashData->analytics = $this->getAnalyticsCount($from, $to, $search_date);
        $dashData->profileList = Profile::orderBy('id', 'desc')->where(function (Builder $query) use ($from, $to, $search_date) {
            if ($from  && $to) {
                $query->where('created_at', '>=', $from)
                    ->where('created_at', '<=', $to);
            }
            if ($search_date) {
                $query->whereDate('created_at', '=', $search_date);
            }
            return $query;
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
        $dashData->profileEntered = count($dashData->profileList);
        $dashData->profilePending = Profile::where('is_completed', 0)->where(function (Builder $query) use ($from, $to, $search_date) {
            if ($from  && $to) {
                $query->where('created_at', '>=', $from)
                    ->where('created_at', '<=', $to);
            }
            if ($search_date) {
                $query->whereDate('created_at', '=', $search_date);
            }
            return $query;
        })->count();
        $dashData->profileApproved = Profile::where('is_completed', 1)->where(function (Builder $query) use ($from, $to, $search_date) {
            if ($from  && $to) {
                $query->where('created_at', '>=', $from)
                    ->where('created_at', '<=', $to);
            }
            if ($search_date) {
                $query->whereDate('created_at', '=', $search_date);
            }
            return $query;
        })->count();
        $dashData->activity = TimeLine::where('profile_id', 8)->where(function (Builder $query) use ($from, $to, $search_date) {
            if ($from  && $to) {
                $query->where('created_at', '>=', $from)
                    ->where('created_at', '<=', $to);
            }
            if ($search_date) {
                $query->whereDate('created_at', '=', $search_date);
            }
            return $query;
        })->latest()->get();
        // dd($dashData);
        return view('home', compact('dashData'));
    }

    public function getAnalyticsCount($from, $to, $search_date)
    {
        $users = User::select('id', 'created_at')->where(function (Builder $query) use ($from, $to, $search_date) {
            if ($from  && $to) {
                // dd($from);
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
        // dd($users);
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
        // $notification->rejected = Profile::all();
        return response()->json($notification, 200);
    }
}
