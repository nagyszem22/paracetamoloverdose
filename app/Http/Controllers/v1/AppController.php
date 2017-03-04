<?php

namespace App\Http\Controllers\v1;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;

class AppController extends Controller
{
   	public function maindetails($date = 0, $suNumber = 0, $birthday = 0, $nhsNumber = 0, $ingestionTime = 0) 
   	{
   		// @todo: validate
        // documentation: https://laravel.com/docs/5.2/validation#other-validation-approaches
        // documentation: https://laravel.com/docs/5.2/validation#available-validation-rules

        $validator = Validator::make(['title' => 'sad'], [
            'title' => 'required|max:4',
        ]);

        if ($validator->fails()) {
            return 'hello world';
        }

        return 'hi';

   		// @todo: connect to openEhr and upload the patient data
  		// @todo: send back a response
   	}
}
