<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MyController extends Controller
{
	public function index(){
		echo 'index';
	}    

	public function create(){
		echo 'create';
	}

	public function store(Request $request){
		echo 'store';
	}

	public function show($id){
		echo 'show';
	}

	public function update(Request $request, $id){
		echo 'update';

	}

	public function destroy($id){
		echo 'destroy';
	}
}
