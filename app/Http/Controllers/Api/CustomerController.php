<?php

namespace App\Http\Controllers\Api;

//import model Post
use App\Models\Customer;

use App\Http\Controllers\Controller;

//import resource PostResource
use App\Http\Resources\CustomerResource;

class CustomerController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get all posts
        $customerss = Customer::latest()->paginate(5);

        //return collection of posts as a resource
        return new CustomerController(true, 'List Data Posts', $customers);
    }
}