<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function aboutUs()
    {
        return view('home.about-us');
    }

    public function blog()
    {
        return view('home.blogs');
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function myAccount()
    {
        return view('home.my-account');
    }

    public function wishList()
    {
        return view('home.wishlist');
    }

    public function cart()
    {
        return view('home.cart');
    }

    public function checkout()
    {
        return view('home.checkout');
    }

    public function privacyPolicy()
    {
        return view('home.privacy-policy');
    }

    public function termsOfService()
    {
        return view('home.terms-of-service');
    }

    public function signUp()
    {
        return view('home.sign-up');
    }

    public function signIn()
    {
        return view('home.sign-in');
    }

    public function blogDetail()
    {
        return view('home.blog-detail');
    }
}
