<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $blogs = [
            [
                'Title' => 'Title One',
                "Body" => 'This Section Body One',
                'Status' => '0'
            ],
            [
                'Title' => 'Title Two',
                "Body" => 'This Section Body Two',
                'Status' => '1'
            ],
            [
                "Title" => "Title Three",
                "Body" => "This Section Body Three",
                'Status' => '0'
            ],
            [
                "Title" => "Title For",
                "Body" => "This Section Body For",
                'Status' => '0'
            ]
        ];
        return view('home', compact('blogs'));

    }
}
