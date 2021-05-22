<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function Home()
    {
        return view("0054.home");
    }
    public function Artikel()
    {
        return view("0054.artikel");
    }
    public function Contact()
    {
        return view("0054.contact");
    }
}