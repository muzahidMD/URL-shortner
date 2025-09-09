<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index(Request $request, Link $link)
    {

        $links = auth()->user()
            ->links()
            ->latest()
            ->withCount('redirects')
            ->paginate(5);

        return view('dashboard', compact('links'));
    }
}
