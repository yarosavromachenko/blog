<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class MainController extends Controller
{
    public function index()
    {
        //TODO: add unique to slug fields
        return view('admin.index');
    }
}
