<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonPageController extends Controller
{
    public function detailPage(string $personName)
    {

        $results = DB::table('Persons')->where('city','=', 'Almaty')->get();
        //dd($results);
        $personName=$personName. ' !!!';
        return view('profile.detailPage',
            compact(['personName','results'])
        );


    }
}
