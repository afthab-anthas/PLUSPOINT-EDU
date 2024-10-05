<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\AddressCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch categories with related addresses and group by address_name
        $addresses = Address::all();
        $categories = AddressCategory::with('addresses')->get()->mapWithKeys(function ($category) {
            return [
                $category->address_name => $category->addresses->map(function ($address) {
                    return $address->address;
                }),
            ];
        });

        return view('front.home', compact('categories', 'addresses'));
    }
}
