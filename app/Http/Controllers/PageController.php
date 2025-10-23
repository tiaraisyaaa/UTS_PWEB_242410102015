<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login(){
        return view ('login');
    }

    public function dashboard (Request $request){
        $username = $request -> query('username');
        return view('dashboard', compact('username'));
    }

    public function profile (Request $request){
        $username = $request -> query('username');
        return view('profile', compact('username'));
    }

    public function pengelolaan(){
        $menu = [
            ['product' => 'Pudding Jagung Vla Vanilla',
             'Harga'=>7000,
             'Stock'=> 25
            ],

            ['product' => 'Pudding Jagung Vla Coklat',
             'Harga'=>7000,
             'Stock'=> 25
            ],

            ['product' => 'Pudding Nangka Vla Vanilla',
             'Harga'=>8000,
             'Stock'=> 25
            ],

            ['product' => 'Pudding Nangka Vla Coklat',
             'Harga'=>8000,
             'Stock'=> 25
            ]
        ];

    return view('pengelolaan', compact('menu'));
    }
}

