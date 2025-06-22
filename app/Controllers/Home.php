<?php

namespace App\Controllers;
use App\Models\ProductModel;
class Home extends BaseController
{
    protected $product;

    function __construct()
    {
        helper('form');
        helper('number');
        $this->product = new ProductModel(); 
       }

    public function index(): string // Method default yang dipanggil ketika mengakses route terkait
    {
        $product = $this->product->findAll();
        $data['product'] = $product;
        return view('v_home', $data);
        }

    public function produk()
    {
    
        return view('v_produk');
    }
    public function kategori()
    {
        $data['kat'] =[
            'snack',
            'makanan',
            'minuman',
            'bumbu dapur',
            'Alat tulis',
        ];
        return view('v_kategori', $data);
    }
}
