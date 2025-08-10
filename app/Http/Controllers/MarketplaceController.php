<?php

namespace App\Http\Controllers;

use App\Models\marketplace;
use Illuminate\Http\Request;

class MarketplaceController extends Controller
{
    public function index() {
        return view('marketplaces', [
            'title' => 'All Product',
            'active' => 'marketplaces',
            'marketplaces' => marketplace::latest()->paginate(9)
        ]);
    }
}
