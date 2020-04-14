<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Topic;
use App\News;
use App\User;

class AdminController extends Controller
{
  public function getIndex(Request $request) {
    $topics = Topic::all();
    return view('page.admin.home',[
      'topics' => $topics
    ]);
  }  

  public function getTopicStyle() {
    $datas = News::where("id_topic", 1)->get();
    return view('page.admin._topic',[
      'topic'  => 'Style',
      'datas' => $datas
    ]);
  }

  public function getTopicFashion() {
    $datas = News::where("id_topic", 2)->get();
    return view('page.admin._topic',[
      'topic'  => 'Fashion',
      'datas' => $datas
    ]);
  }

  public function getTopicTravel() {
    $datas = News::where("id_topic", 3)->get();
    return view('page.admin._topic',[
      'topic'  => 'Travel',
      'datas' => $datas
    ]);
  }

  public function getTopicSports() {
    $datas = News::where("id_topic", 4)->get();
    return view('page.admin._topic',[
      'topic'  => 'Sports',
      'datas' => $datas
    ]);
  }

  public function getTopicVideo() {
    $datas = News::where("id_topic", 5)->get();
    return view('page.admin._topic',[
      'topic'  => 'Video',
      'datas' => $datas
    ]);
  }

  public function getTopicArchives() {
    $datas = News::where("id_topic", 6)->get();
    return view('page.admin._topic',[
      'topic'  => 'Archives',
      'datas' => $datas
    ]);
  }

  public function getEmpoyeeStaff() {
    $datas = User::where("id_role", 1)->get();
    return view('page.admin._employee',[
      'text'  => 'Staff',
      'datas' => $datas
    ]);
  }

  public function getNormalUser() {
    $datas = User::where("id_role", 2)->get();
    return view('page.admin._employee',[
      'text'  => 'Normal Users',
      'datas' => $datas
    ]);
  }

  
}
