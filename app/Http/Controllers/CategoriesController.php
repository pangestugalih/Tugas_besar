<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $kategori = Categories::all();
        return view('view_categories', compact('user', 'kategori'));
    }
}
