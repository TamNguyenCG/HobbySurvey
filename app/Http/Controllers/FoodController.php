<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Food;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FoodController extends Controller
{
    public function getAllFoods(): Factory|View|Application
    {
        $foods = Food::all();
        return view('food',compact('foods'));
    }

    public function selectFood($id): RedirectResponse
    {
        Session::put('food_id',$id);
        return redirect()->route('showPets');
    }
}
