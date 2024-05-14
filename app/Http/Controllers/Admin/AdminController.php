<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\Contact;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $total_product = Products::count();
        return view('admin/index', compact('total_product'));
    }

    public function add_product() {
        return view('admin/addproduct');
    }
    public function list_product() {
        $products = Products::latest()->paginate();
        return view('admin/listproduct', compact('products'));
    }
    
    public function edit_product($id) {
        $product = Products::findOrFail($id);
        return view('admin/editproduct', compact('product'));
    }
    public function list_contact() {
        $contact = Contact::latest()->paginate();
        return view('admin/listcontact', compact('contact'));
    }

}