<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'welcome Deepa';
        // return view('pages.index',compact('title'));
        return view('pages.index')->with('title',$title);

    }
    public function about(){
        $title ="About us";
        return view('pages.about')->with('title',$title);
    }
    public function services(){
        // $title ="About services";
        $data = array(
            'title' => 'Services',
            'services' => ['one','two','three']
        );
        return view('pages.services')->with($data);
    }
}
