<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WellcomeController extends Controller
{
    public function index(){
        return view('fontEnd.home.homeContent');
    }
    public function category(){
        return view('fontEnd.category.categoryContent');
    }
    public function productDetails(){
        return view('fontEnd.product.productContent');
    }
}
