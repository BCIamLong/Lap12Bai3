<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index() {
        return view ('pages.home');
    }
    public function index1() {
        $tongcong=1000;
        return view ('pages.news')->with('tong',$tongcong);
    }
    public function index2() {
        $title = "Đây là tiêu đề";
        $description = "Đây là dòng mô tả";
        $copyright = "học web SDC";
        return view('pages.product')->with(['title'=>$title, 'description'=>$description, 'copyright'=>$copyright]);
    }
}
