<?php

namespace App\Http\Controllers\Api;

//import model Post
use App\Models\DataBarang;

use App\Http\Controllers\Controller;

//import resource PostResource
use App\Http\Resources\DataBarangResource;

class DataBarangController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get all posts
        $databarangs = DataBarang::latest()->paginate(5);

        //return collection of posts as a resource
        return new DataBarangResource(true, 'List Data Posts', $databarangs);
    }
}