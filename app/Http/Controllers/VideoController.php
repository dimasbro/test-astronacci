<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use Illuminate\Support\Facades\Auth;

class VideoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Video::select('video_name', 'video_description', 'video_url');
        if (Auth::user()->role_id == 1) {
            $data = $data->limit(3);
        } elseif (Auth::user()->role_id == 2) {
            $data = $data->limit(10);
        }
        $data = $data->get();

        return view('video', compact('data'));
    }
}
