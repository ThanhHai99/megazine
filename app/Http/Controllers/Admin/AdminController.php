<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Topic;
use App\News;
use App\User;

use Yajra\Datatables\Datatables;

class AdminController extends Controller
{
  public function getIndex(Request $request) {
    $topics = Topic::all();
    return view('page.admin.home',[
      'topics' => $topics
    ]);
  }

  public function getTable() {
    return view('page.admin._topic');
  }

  public function getTopic(Request $request) {
    return Datatables::of(News::query())->make(true);
  }

  public function topicUpdate(Request $request) {
    // return Datatables::of(News::query())->make(true);
    $input = $request->all();
    $tmp = News::find($input['id']);
    $tmp->hot_news = $input['hot_news'];
    $tmp->image = $input['image'];
    $tmp->tag = $input['tag'];
    $tmp->caption = $input['caption'];
    $tmp->subtitle = $input['subtitle'];
    $tmp->save();

    return response()->json([
        'error' => false,
        // 'task'  => $tmp,
    ], 200);
  }

  public function getTopicStyle() {
    $datas = News::select('id', 'id_creator', 'hot_news', 'image', 'tag', 'caption', 'subtitle', 'created_at', 'updated_at')->where("id_topic", 1)->get();
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

  public function updateTopic(Request $request, $id) {
    // $this->validate($request, [
    //   'hot_news' => 'required',
    //   'image' => 'required',
    //   'tag' => 'required',
    //   'caption' => 'required',
    //   'subtitle' => 'required'
    // ]);
    $tmp = News::find($id);
    $tmp->hot_news = $request->input('hot_news');
    $tmp->image = $request->input('image');
    $tmp->tag = $request->input('tag');
    $tmp->caption = $request->input('caption');
    $tmp->subtitle = $request->input('subtitle');
    $tmp->save();
    // return redirect('dashboard/topic/style')->with('success', 'Data updated');
  }

  public function updateHotNews() {

  }

  public function deleteTopic() {

  }


}
