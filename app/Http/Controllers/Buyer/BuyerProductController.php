<?php

namespace App\Http\Controllers\Buyer;

use App\Buyer;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;

class BuyerProductController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Buyer $buyer)
    {
        //getting product from transactions collection through eager loading bcz buyer and transactions have 1:M relationship
        $products = $buyer->transactions()->with('product')->get()->pluck('product');

        return $this->showAll($products);
    }

  
}
