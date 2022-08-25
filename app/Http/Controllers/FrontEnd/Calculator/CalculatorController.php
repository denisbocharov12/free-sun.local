<?php

namespace App\Http\Controllers\FrontEnd\Calculator;

use App\Http\Controllers\Controller;
use App\Http\Requests\CalculatorChangeRequest;
use App\Http\Requests\CalculatorRequest;
use App\Http\Services\CalculatorOfferService;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    protected $calculatorOfferService;

    public function __construct(CalculatorOfferService $calculatorOfferService)
    {
        $this->calculatorOfferService = $calculatorOfferService;
    }

    public function index(){
        return view('FrontEnd.pages.calculator.index');
    }

    public function calculatorChange(CalculatorChangeRequest $request){

        $request->validated();

        $monthly_electricity = $request->input('monthly_electricity');
        $heated_area = $request->input('heated_area');

        $result = $this->calculateResult($monthly_electricity, $heated_area);

        if ($result){
            return response()->json(['status'=>true, 'result' => $result]);
        } else {
            return response()->json(['status'=>false, 'msg' => 'Ошибка вычислений...']);
        }
    }

    public function calculatorCreateOffer(CalculatorRequest $request){

        $request->validated();

        $status = $this->calculatorOfferService->createCalculatorModel($request);

        if ($status){
            return response()->json(['status'=>true, 'msg' => 'Мы успешно получили вашу заявку']);
        } else {
            return response()->json(['status'=>false, 'msg' => 'Ошибка, попробуйте ещё раз']);
        }
    }

    public function calculateResult($monthly_electricity, $heated_area){

        (float)$required_power = ($monthly_electricity/350) + ($heated_area/15);
        (float)$required_qty = $required_power/0.415;
        (float)$required_area_roof = $required_power*6;
        (float)$required_area_earth = $required_power*10;

        return [
            'required_power' => round($required_power, 2),
            'required_qty' => round($required_qty, 2),
            'required_area_roof' => round($required_area_roof, 2),
            'required_area_earth' => round($required_area_earth, 2)
        ];
    }
}
