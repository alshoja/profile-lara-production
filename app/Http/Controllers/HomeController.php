<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Profile;
use App\Models\TimeLine;
use Illuminate\Http\Request;

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
    public function index()
    {
        $search = request()->query('search');
        $dashData = (object)[];
        $dashData->profile = $this->getProfileChartCount();
        $dashData->users = $this->getUserChartCount();
        $dashData->analytics = $this->getAnalyticsCount();
        $dashData->profileList = Profile::orderBy('id', 'desc')->take(5)->get();
        $dashData->usersCount = User::count();
        $dashData->profileEntered = Profile::count();
        $dashData->profilePending = Profile::count();
        $dashData->profileApproved = Profile::count();
        $dashData->activity = TimeLine::where('profile_id', 8)->get();
        // dd($dashData);
        return view('home', compact('dashData'));
    }

    public function getAnalyticsCount()
    {
        $users = User::select('id', 'created_at')
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

    public function getUserChartCount()
    {
        $users = User::select('id', 'created_at')
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

    public function getProfileChartCount()
    {
        $profiles = Profile::select('id', 'created_at')
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
        $notification->approved = Profile::where('is_notify',1)->take(5)->get();
        // $notification->rejected = Profile::all();
        return response()->json($notification, 200);
    }

    // public function getActivityProcessod($timeline)
    // {
    //     $data = (object)[];
    //     foreach ($timeline as $key) {
    //         $key->name;
    //         $data = [$key->name];
    //     }
    //     return $data;
    // }
}
