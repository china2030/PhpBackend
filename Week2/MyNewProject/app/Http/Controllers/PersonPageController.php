<?php

namespace App\Http\Controllers;

use App\Models\employees;
use App\Models\News;
use App\Models\Persons;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonPageController extends Controller
{
    public function detailPage(string $personName)
    {
        $person = new employees();
        $person->name ='Askar';
        $person->age =18;
        $person->city='Aktau';
        $person->created_at='2024-12-12 06:40:32';
        $person->updated_at='2024-12-12 06:40:32';

        $person->save();
        dd($person);
        //dd($news);
        //$results = DB::table('Persons')->where('city','=', 'Almaty')->get();
        //dd($results);
        $personName=$personName. ' !!!';
        return view('profile.detailPage',
            compact(['personName','results'])
        );


    }
}
