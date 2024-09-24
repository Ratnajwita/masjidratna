<?php

namespace App\view\components;

use Illuminate\view\component;
use Illuminate\view\view;

class Dashboardlayout extends component
{
    /**
     * get the view / contents that represents the component.
     */
    public function render(): view
    {
        return view('layouts.dashboard');
    }
}