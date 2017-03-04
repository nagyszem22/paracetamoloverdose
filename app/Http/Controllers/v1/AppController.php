<?php

namespace App\Http\Controllers\v1;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\v1\FormValidator;

class AppController extends Controller
{
	protected $validator;

	public function __construct() 
	{
		$this->validator = new FormValidator(); // http://stackoverflow.com/questions/737385/easiest-form-validation-library-for-php
	}


   	public function maindetails($date = 0, $suNumber = 0, $birthday = 0, $nhsNumber = 0, $ingestionTime = 0) 
   	{
   		// @todo: validate
   		return $this->validator('blah@bla.', 'email');



   		// @todo: connect to openEhr and upload the patient data
  		// @send back a response
   	}
}
