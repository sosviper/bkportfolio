<?php

namespace App\Http\Controllers\apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccessRoles extends Controller
{
  public function index()
  {
    return view('content.apps.app-access-roles');
  }
}
