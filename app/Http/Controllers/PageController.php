<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homePage()
    {
        $title = 'Home Page';
        return view('home', compact('title'));
    }

    public function createPage()
    {
        $title = 'Create Page';
        return view('create', compact('title'));
    }

    public function viewPage()
    {
        $title = 'Read Page';
        return view('read', compact('title'));
    }

    public function editPage()
    {
        $title = 'Edit Page';
        return view('edit', compact('title'));
    }
}
