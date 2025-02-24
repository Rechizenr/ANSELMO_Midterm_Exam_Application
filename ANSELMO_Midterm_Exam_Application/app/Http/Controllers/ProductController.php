<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['name' => 'Naruto Poster', 'price' => 300, 'category' => 'Merchandise'],
            ['name' => 'One Piece T-Shirt', 'price' => 800, 'category' => 'Clothing'],
            ['name' => 'Attack on Titan Figure', 'price' => 1500, 'category' => 'Action Figure'],
            ['name' => 'Demon Slayer Sword', 'price' => 2500, 'category' => 'Collectibles'],
            ['name' => 'Jujutsu Kaisen Keychain', 'price' => 300, 'category' => 'Accessories'],
        ];

        return view('products', compact('products'));
    }
}