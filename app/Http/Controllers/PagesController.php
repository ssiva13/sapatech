<?php

namespace App\Http\Controllers;

use Mail;
use Session;
use App\Post;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PagesController extends Controller
{

	public function index()
	{
		return \view('index');
	}
}
