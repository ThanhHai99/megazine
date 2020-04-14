<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Topic;
use App\News;

class AdminController extends Controller
{
  public function getIndex(Request $request) {
    $topics = Topic::all();
    return view('page.admin.home',[
      'topics' => $topics
    ]);
  }
  
  public function getTable(Request $request) {
    return view('page.admin.__table',[

    ]);
  }

  public function getTopicStyle() {
    $data = News::where("id_topic", 1)->get();
    return response()->json([
      'data'  => $data,
    ], 200);
  }

  public function getTopicFashion() {
    $data = News::where("id_topic", 1)->get();
    return response()->json([
      'data'  => $data,
    ], 200);
  }

  public function getTopicTravel() {
    $data = News::where("id_topic", 1)->get();
    return response()->json([
      'data'  => $data,
    ], 200);
  }

  public function getTopicSports() {
    $data = News::where("id_topic", 1)->get();
    return response()->json([
      'data'  => $data,
    ], 200);
  }

  public function getTopicVideo() {
    $data = News::where("id_topic", 1)->get();
    return response()->json([
      'data'  => $data,
    ], 200);
  }

  public function getTopicArchives() {
    $data = News::where("id_topic", 1)->get();
    return response()->json([
      'data'  => $data,
    ], 200);
  }

  
}
