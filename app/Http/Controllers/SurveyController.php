<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmailRequest;
use App\Models\Answer;
use App\Models\Food;
use App\Models\Pet;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SurveyController extends Controller
{

    public function welcome(): Factory|View|Application
    {
        Session::forget('user_id');
        Session::forget('food_id');
        Session::forget('pet_id');
        return view('welcome');
    }

    public function createEmail(EmailRequest $request): RedirectResponse
    {
        $email = $request->input('email');
        $user = User::where('email', $email)->first();
        if (empty($user)) {
            $user = new User();
            $user->email = $email;
            $user->save();
        }
        Session::put('user_id', $user->id);

        $foods = Food::all();
        toastr()->success('Welcome to Hobby Survey');
        return redirect()->route('showFoods', compact('foods'));
    }

    public function surveyResult(): Factory|View|Application
    {
        $array = [];
        $pet = Pet::all('name');
        $food = Food::all('name');
        $selectedResult = Session::get('food_id').Session::get('pet_id');
        for ($i = 0; $i <= count($pet); $i++) {
            for ($j = 0; $j <= count($food); $j++) {
                if ($i == 0 && $j == 0) {
                    $array[$i][$j] = '';
                }
                if ($i == 0 && $j != 0) {
                    $array[$i][$j] = $pet[$j - 1]->name;
                }
                if ($i != 0 && $j == 0) {
                    $array[$i][$j] = $food[$i - 1]->name;
                }
                if ($i != 0 && $j != 0) {
                    $survey = Answer::where('pet_id', $j)
                        ->where('food_id', $i)
                        ->count();
                    $array[$i][$j] = $survey;
                }
            }
        }
        return view('survey', compact('array','selectedResult'));
    }
}
