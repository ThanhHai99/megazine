<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Validator;
use Session;
// use Illuminate\Support\Str;

use App\Topic;
use App\News;
use App\User;
use App\Slide;
use App\Video;
use App\Role;

use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
  use AuthenticatesUsers;

  public function __construct() {
    $this->middleware('auth');
  }
}
