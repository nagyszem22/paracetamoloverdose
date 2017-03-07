<?php

namespace App\Http\Controllers\v1;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;

class AppController extends Controller
{
   	public function maindetails(Request $request) 
   	{
   		// @todo: validate
        // documentation: https://laravel.com/docs/5.2/validation#other-validation-approaches
        // documentation: https://laravel.com/docs/5.2/validation#available-validation-rules

      // dd($request->input());

        /*$validator = Validator::make(['title' => 'sad'], [
            'title' => 'required|max:4',
        ]);

        if ($validator->fails()) {
            return 'hello world';
        }*/

        return response()->json(['name' => 'Abigail', 'state' => 'CA']);

   		// @todo: connect to openEhr and upload the patient data
  		// @todo: send back a response
   	}
}
