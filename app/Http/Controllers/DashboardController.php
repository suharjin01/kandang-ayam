<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard() {
        $devices = Device::all();

        return view('dashboard', ['title' => 'Dashboard'], compact('devices'));
    }
}
