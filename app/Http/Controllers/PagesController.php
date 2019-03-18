<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'welcome to Laravel';
        // return view('pages.index',compact('title'));
        return view('pages.index')->with('title',$title);
       }

       public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title',$title);
       }

       public function products(){
           $data = [
                'title' => 'Products',
                'products' => ['cloths','shoes','jacket']
           ];
        return view('pages.products')->with($data);
       }
}
