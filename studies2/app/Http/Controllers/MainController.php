<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    public function showView(): View{
        $data = [
            'value' => 100,
            'cities' => ['New York', 'Los Angeles', 'Chicago'],
            'names' => [],
            'indice' => 1
        ];

        return view('home', $data);
    }

    public function submitForm(){
        echo "form submitted!";
    }
}
