<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "About";
        $aboutData = [
            'nama' => 'M. N. Tawfiq',
            'hobi' => 'Basket',
            'github' => 'naswatawfiq-dotcom'
        ];

        // Diperbaiki dari 'aboutData0' menjadi 'aboutData'
        return view('admin.about', compact('title', 'aboutData'));
    }
}
