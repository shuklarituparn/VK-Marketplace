<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function search_products($request)
    {
        //to search for a given product
    }
    public function get_product ($request)
    {
        //to retrieve a given product using ID
    }
    public function create_product (ProductRequest $request)
    {
      //to create a product, only admin allowed
    }
    public function edit_product($productID)
    {
        //to edit a product, only admin allowed

    }
    public function delete_product($productID)
    {
        //to delete a product, only admin allowed

    }
}
