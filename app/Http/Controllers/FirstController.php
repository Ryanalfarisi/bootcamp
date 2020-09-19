<?php

namespace App\Http\Controllers;
use App\Film;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FirstController extends Controller
{
    public function index(Request $request) {
       // $newArray = [];
        // Film::chunk(2, function ($flights) {
        //     foreach ($flights as $flight) {
        //         $newArray = (array)$flight;
        //     }
        // });
        //$user = DB::table('films')->leftJoin('actress', 'films.id', '=', 'actress.film_id')->get();
        $users = Film::find(1)->actress;
        var_dump($users);exit;
        //return response()->json(['status' => 500, 'data' => [], 'message' => $e->getMessage()], 500);
    }
}
