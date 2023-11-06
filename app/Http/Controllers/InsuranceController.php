<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInsuranceRequest;
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

    public function store(StoreInsuranceRequest $request){
        
        $validated = $request->validated();

        Insurance::create($validated);

        return redirect('/');
    }

    public function storeApi(StoreInsuranceRequest $request){
        $validated = $request->validated();

        $obj = Insurance::create($validated);

        return response()
            ->json($obj, Response::HTTP_CREATED);
    }
}
