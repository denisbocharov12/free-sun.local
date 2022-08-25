<?php

namespace App\Http\Repositories;

use App\Http\Requests\OfferRequest;
use App\Models\Offers;

class OfferRepository
{
    public function createOffer(OfferRequest $request){
        $offer = Offers::create([
            'name_surname' => $request->input('name_surname'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'comment' => $request->input('comment'),
        ]);
        if ($offer->exists){
            return true;
        } else return false;
    }
}
