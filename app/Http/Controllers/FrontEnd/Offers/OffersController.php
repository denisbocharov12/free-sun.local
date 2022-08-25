<?php

namespace App\Http\Controllers\FrontEnd\Offers;

use App\Http\Controllers\Controller;
use App\Http\Repositories\OfferRepository;
use App\Http\Requests\OfferRequest;
use App\Http\Services\OfferService;
use Illuminate\Http\Request;

class OffersController extends Controller
{
    protected $offerRepository;
    protected $offerService;

    public function __construct(OfferRepository $offerRepository, OfferService $offerService)
    {
        $this->offerRepository = $offerRepository;
        $this->offerService = $offerService;
    }

    public function store(OfferRequest $request){

        $request->validated();

        $status = $this->offerRepository->createOffer($request);

        if ($status){
            return response()->json(['status'=>true, 'msg' => 'Мы успешно получили вашу заявку']);
        } else {
            return response()->json(['status'=>false, 'msg' => 'Ошибка, попробуйте ещё раз']);
        }
    }
}
