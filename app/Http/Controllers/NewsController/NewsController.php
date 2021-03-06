<?php

namespace App\Http\Controllers\NewsController;

use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Session;
use App\Http\Controllers\CreatorController;

use App\Topic;
use App\News;
use App\User;
use App\Slide;
use App\Video;
use App\Role;

use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class NewsController extends CreatorController
{
  use AuthenticatesUsers;

  public function __construct() {
    $this->middleware('auth');
    $this->middleware('isAdmin');
    $this->middleware('isCreator');
  }
 
//   start get =======================================================================================================================
  

  public function getNewsAll(Request $request) {      
      $query=News::join("users", "news.id_creator", "=", "users.id")
                    ->join("topic", "news.id_topic", "=", "topic.id")
                    ->select("news.id", "topic.name as id_topic", "users.name as id_creator", "news.hot_news", "news.id_status", "news.image", "news.tag", "news.caption", "news.subtitle");
  
      return Datatables::of($query)
      ->make(true);
  }

  public function getNewsStyle(Request $request) {  
      $query=News::where('id_topic', 1)
                    ->join("users", "news.id_creator", "=", "users.id")
                    ->join("topic", "news.id_topic", "=", "topic.id")
                    ->select("news.id", "users.name as id_creator", "news.hot_news", "news.id_status", "news.image", "news.tag", "news.caption", "news.subtitle");
      return Datatables::of($query)->make(true);
  } 

  public function getNewsFashion(Request $request) {  
      $query=News::where('id_topic', 2)
                    ->join("users", "news.id_creator", "=", "users.id")
                    ->join("topic", "news.id_topic", "=", "topic.id")
                    ->select("news.id", "users.name as id_creator", "news.hot_news", "news.id_status", "news.image", "news.tag", "news.caption", "news.subtitle");
      return Datatables::of($query)->make(true);
  }

  public function getNewsTravel(Request $request) {  
      $query=News::where('id_topic', 3)
                    ->join("users", "news.id_creator", "=", "users.id")
                    ->join("topic", "news.id_topic", "=", "topic.id")
                    ->select("news.id", "users.name as id_creator", "news.hot_news", "news.id_status", "news.image", "news.tag", "news.caption", "news.subtitle");
      return Datatables::of($query)->make(true);
  }

  public function getNewsSports(Request $request) {  
      $query=News::where('id_topic', 4)
                    ->join("users", "news.id_creator", "=", "users.id")
                    ->join("topic", "news.id_topic", "=", "topic.id")
                    ->select("news.id", "users.name as id_creator", "news.hot_news", "news.id_status", "news.image", "news.tag", "news.caption", "news.subtitle");
      return Datatables::of($query)->make(true);
  }
//   end get =======================================================================================================================

// start CRUD===========================================================================================================
  public function newsUpdate(Request $request) {
    $this->validate($request, [
      'news_id_topic' => 'required',
      'news_tag' => 'required',
      'news_caption' => 'required',
      'news_subtitle' => 'required'
    ]);

    $input = $request->all();
    $tmp = News::find($input['id']);
    $tmp->id_topic = $input['news_id_topic'];
    $tmp->tag = $input['news_tag'];
    $tmp->caption = $input['news_caption'];
    $tmp->subtitle = $input['news_subtitle'];
    $tmp->save();

    return response()->json([
        'error' => false,
        'id' => $tmp->id,
        'id_topic' => $tmp->id_topic,
        'tag' => $tmp->tag,
        'caption' => $tmp->caption,
        'subtitle' => $tmp->subtitle
    ], 200);
  }

  public function newsUpdateHotNews(Request $request) {
    $this->validate($request, [
      'id' => 'required'
    ]);

    $input = $request->all();
    $tmp = News::find($input['id']);
    if ($input['hot_news'] == 0) {
      $tmp->hot_news = 1;
    } 
    
    if ($input['hot_news'] == 1) {
      $tmp->hot_news = 0;
    }

    $tmp->save();

    return response()->json([
        'error' => false,
        'hot_news' => $tmp->hot_news
    ], 200);
  }

  public function newsUpdateStatusNews(Request $request) {
      $this->validate($request, [
        'id' => 'required'
      ]);

      $input = $request->all();
      $tmp = News::find($input['id']);
      if ($input['id_status'] == 0) {
        $tmp->id_status = 1;
      } else if ($input['id_status'] == 1) {
        $tmp->id_status = 0;
      }
      $tmp->save();

      return response()->json([
          'error' => false,
          'id_status' => $tmp->id_status
      ], 200);


  }

  public function newsUpdateImageNews(Request $request) {

      $input = $request->all();
      $tmp = News::find($input['id_news_hide']);    
      // $img_old = $tmp->image;
      // Storage::delete($tmp->image); //delete image

      // $image_path = '/images/1588666558_5eb120bed8acc.jpg';  // Value is not URL but directory file path
      $image_path = "images/".$tmp->image;  // Value is not URL but directory file path
      if(File::exists($image_path)) {
        File::delete($image_path);
      }

      $file = $request->file('image_news');
      $extension = $file->getClientOriginalExtension();
      $filename = time() . '_'. uniqid() . '.' . $extension;
      $file->move("images", $filename);
      $tmp->image = $filename;
      $tmp->save();

      return response()->json([
        'error' => false,
        'id' => $tmp->id,
        'image' => $tmp->image
      ], 200);

  }

  public function newsInsert(Request $request) {
      $this->validate($request, [
        '_news_id_topic' => 'required_without:news_id_topic',
        'news_id_topic' => 'required_without:_news_id_topic',
        'news_hot_news' => 'required',
        'news_image' => 'required',
        'news_tag' => 'required',
        'news_caption' => 'required',
        'news_subtitle' => 'required'
      ]);
      
      $input = $request->all();
      
      $tmp = new News;

      if ($request->hasFile('news_image')) {
        $file = $request->file('news_image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '_'. uniqid() . '.' . $extension;
        $file->move("images", $filename);
        $tmp->image = $filename;
      }

      if ($input['_news_id_topic'] != "") {
        $tmp->id_topic = $input['_news_id_topic'];
      } else {
        $tmp->id_topic = $input['news_id_topic'];
      }
      $tmp->id_creator = session('user_id');
      $tmp->hot_news = $input['news_hot_news'];
      $tmp->tag = $input['news_tag'];
      $tmp->caption = $input['news_caption'];
      $tmp->subtitle = $input['news_subtitle'];
      $tmp->save();

      return response()->json([
        'error' => false,
        'input'  => $input
      ], 200);


  }

  public function newsRemove(Request $request) {
      $input = $request->all();
      News::where('id', $input['id'])->delete();
      return response()->json([
        'error' => false,
        'id'  => $input["id"]
      ], 200);

  }
// end CRUD============================================================================================================


}
