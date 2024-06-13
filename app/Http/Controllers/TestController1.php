<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogmasters;

class TestController1 extends Controller
{
    //


    function ViewContactPage()
    {
        return ("<h1>Controller Function Called......</h1>");
    }

    function addBlogForm()
    {
        return view('addBlogForm');
    }

    function showAllBlogs()
    {
        $bmdata = Blogmasters::all();
        return view('showBlogs', ['abc' => $bmdata]);
    }

    function saveBlogFunc(Request $req)
    {
        // return $req;

        $bm = new Blogmasters();
        $bm->blogtitle = $req->txtblogtitle;
        $bm->blogauthor = $req->txtblogauthor;
        $bm->blogcontent = $req->txtblogcontent;
        $bm->save();

        return view('showBlogs');
        // return "<h1>NEW BLOG SAVED...</h1>";
    }
}
