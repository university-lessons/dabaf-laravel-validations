<?php

namespace App\Http\Controllers;

use App\Models\Insurance;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class InsuranceController extends Controller
{
    public function index(){
        return view('welcome', ['data' => Insurance::all()]);
    }

    public function new(){
        return view('insurance.new');
    }

    public function store(Request $request){
        Insurance::create($request->except('_token'));
        return redirect('/');
    }

    public function storeApi(Request $request){
        $obj = Insurance::create($request->except('_token'));

        return response()
            ->json($obj, Response::HTTP_CREATED);
    }
}
