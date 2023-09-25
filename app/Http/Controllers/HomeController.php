<?php

namespace App\Http\Controllers;

use App\Models\Comment1;
use App\Models\Comment2;
use App\Models\Comment3;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $comment1 = Comment1::all();
        $comment2 = Comment2::all();
        $comment3 = Comment3::all();
        return view('welcome', compact('comment1', 'comment2', 'comment3'));
    }

    public function dashboard()
    {
        $comment1 = Comment1::all();
        $comment2 = Comment2::all();
        $comment3 = Comment3::all();
        return view('dashboard', compact('comment1', 'comment2', 'comment3'));
    }
}
