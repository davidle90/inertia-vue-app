<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminController extends Controller
{
    public function index()
    {
        return Inertia::render('Admin/Index');
    }

    public function edit_profile()
    {
        return Inertia::render('Profile/Edit', [
            'admin_panel' => true
        ]);
    }
}
