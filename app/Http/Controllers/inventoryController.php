<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inventoryController extends Controller
{
    public function index()
    {
    	$inventory = DB::table('')
    }
    public function delete(inventory $inventory)
    {
    	$inventory->delete();
    	return "Task was deleted successfully";
    }
}
