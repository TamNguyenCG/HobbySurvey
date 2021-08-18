<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Pet;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PetController extends Controller
{
    public function getAllPets(): Factory|View|Application
    {
        $pets = Pet::all();
        return view('pet', compact('pets'));
    }

    public function selectPet($id): RedirectResponse
    {
        Session::put('pet_id', $id);

        $food_id = Session::get('food_id');
        $pet_id = Session::get('pet_id');
        $user_id = Session::get('user_id');
        $edit = Answer::where('user_id', $user_id)->first();
//        dd($edit);
        if (empty($edit)) {
            $answer = new Answer();
            $answer->pet_id = $pet_id;
            $answer->food_id = $food_id;
            $answer->user_id = $user_id;
            $answer->save();
        } else {
            
            Answer::where('user_id', $user_id)->update([
                'pet_id' => $pet_id,
                'food_id' => $food_id,
            ]);
        }
        return redirect()->route('result');
    }
}
