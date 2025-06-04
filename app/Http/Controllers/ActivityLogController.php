<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ActivityLog;
use App\Models\BlogCategory;

class ActivityLogController extends Controller
{
    public function index(){
        $activities = ActivityLog::orderBy('id','desc')->get();
        return view('admin.activity_logs.list',compact('activities'));
    }
}