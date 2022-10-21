<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    // Get all products
    public function index()
    {
        $productos = Producto::all();
        return view('productos', compact('productos'));
    }
}
