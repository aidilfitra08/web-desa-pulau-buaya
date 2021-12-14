<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function post()
    {
        return view('post');
    }
    
    public function sejarah()
    {
        return view('about_sejarah');
    }
    
    public function pemimpinDesa()
    {
        return view('about_kepala_desa');
    }

    public function credit()
    {
        return view('credit');
    }

    public function kainTenun()
    {
        return view('kain_tenun');
    }
}

