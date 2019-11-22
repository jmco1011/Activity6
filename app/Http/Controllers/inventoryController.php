<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\inventory;
use App\category;
class inventoryController extends Controller
{
    public function index()
    {
    	$inventory = inventory::all();
    	return $inventory;
    }

    public function create(inventory $itnventory)
    {
    	$inventory=inventory::first();
    	return view('inventory.create');
    }
    public function store(inventory $inventory)
    {
    	$inventory = new inventory();
    	$inventory->name = $inventory->name;
    	$inventory->qty = $inventory->qty;
    	$inventory->catergory = $inventory->catergory;
    	$inventory->save();
    	return inventory();

    }
    public function delete(inventory $inventory)
    {
    	$inventory->delete();
    	return "Item Deleted";
    }
}