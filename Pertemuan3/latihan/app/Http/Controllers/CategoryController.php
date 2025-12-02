<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        // Mengambil semua data category dari database
        $categories = Category::all();

        // Mengirim data ke view 'categories'
        return view('categories', compact('categories'));
    }
}