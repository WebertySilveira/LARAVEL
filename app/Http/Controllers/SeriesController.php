<?php

namespace App\Http\Controllers;

class SeriesController extends Controller
{

    public function index(){
        $series = [
            "The Crown",
            "Stranger Things",
            "The Witcher"
        ];
        
        $html = "<ul>";
        foreach($series as $value)
        {
            $html .= ("<li>{$value}</li>");
        }
        $html .= "</ul>";

        return $html;
    }
}