<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Inventory extends Controller
{
        public function main(Request $request){
            return view('inventory.main');
        }
}
