<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    //
    public function allPublishers(){
        $publishers = Publisher::get();
        return $publishers;
    }
    public function getPublisher($id){
        $publisher = Publisher::findOrFail($id);
        return $publisher;
    }
}
