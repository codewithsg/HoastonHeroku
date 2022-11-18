<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller{
    
    public function index(){
        return Data::all();
    }

    // public function store (Request $request){
    //     $request->validate([
    //         'title'=>'required',
    //         'company'=>'required',
    //         'description'=>'required',
    //         'logo'=>'required'
    //     ]);

    //     $createdData=Data::create($request->all());
    //     return $createdData;
    // }

    // public function store(Request $request){
    // $data = new Data;

    // $data->title = 'Ionic VueJS Junior Developer';
    // $data->description = 'Must have understanding of VueJS';
    // $data->company = 'Mero Network';
    // $data->company = 'https://uxwing.com/wp-content/themes/uxwing/download/brands-and-social-media/ionic-icon.png';

    // $data->save();
    // return $data;

    // }

    public function store(Request $request){
        // $formFields = $request->validate([
        //     'title'=>'required',
        //     'company'=>'required',
        //     'description'=>'required',
        //     'logo'=>"required"
        // ]);

        // Data::create($formFields);
        print_r($request);
        // return 'success';
        $data = new Data;

        $data->title=$request->title;
        $data->description=$request->description;
        $data->company=$request->company;
        $data->logo=$request->logo;

        $data->save();
        return 'saved success';
    }

    public function show($id){
        $data = Data::find($id);
        return $data;
    }
}