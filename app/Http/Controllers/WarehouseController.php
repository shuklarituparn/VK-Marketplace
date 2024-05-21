<?php

namespace App\Http\Controllers;

use App\Http\Requests\WarehouseRequest;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    public function show_warehouse($request)
    {
        //to get warehouse
    }

    public function create_warehouse(WarehouseRequest $warehouseRequest)
    {
        //to create a warehouse
    }

    public function edit_warehouse($warehouseID)
    {
        //to edit a given warehouse
    }

    public function delete_warehouse($warehouseID)
    {
        //to delete a given warehouse
    }



}
