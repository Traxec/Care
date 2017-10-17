<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use auth;

class StaticPagesController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth:admin');
  }

  public function index(Request $request)
  {
    return view('admin.statics_pages.index');
  }
}
