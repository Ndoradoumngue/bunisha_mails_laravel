<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tenders;
use App\User;

class PagesController extends Controller
{
    public function welcomeemail()
    {
    	return view('pages.welcomeemail');
    }

    public function bidbondemail($userID)
    {
    	$user_tedner = Tenders::where('owner_id', $userID)->take(1)->get();
    	// $user_tedner = Tenders::all();
    	return view('pages.bidbondemail') -> with('returnedTender', $user_tedner);
    }

    public function suggestionemail()
    {
    	return view('pages.suggestionemail');
    }

    public function notificationemail()
    {
    	$tenders_list = tenders::all();

    	$data = array(
    		'todays_date' => date('d-m-Y'), // date('d-m-Y H:i:s')
    		'allTenders' => $tenders_list
    	);

    	return view('pages.notificationemail') -> with($data);
    }

}
