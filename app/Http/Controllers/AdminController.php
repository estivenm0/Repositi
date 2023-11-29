<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function index() : View {
        return view('admin.home-admin');
    }

    public function webs() : View {
        return view('admin.webs-admin');
    }

    public function tags() : View {
        return view('admin.tags-admin');
    }

    public function feedbacks() : View {
        return view('admin.feedbacks-admin');
    }
}
