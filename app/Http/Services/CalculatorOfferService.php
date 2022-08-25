<?php

namespace App\Http\Services;

use App\Http\Requests\CalculatorRequest;
use App\Models\Calculator;

class CalculatorOfferService
{
    public function createCalculatorModel(CalculatorRequest $request){

        $calculator = Calculator::create($request->all());

        if ($calculator->exists){
            return true;
        } else return false;
    }
}
