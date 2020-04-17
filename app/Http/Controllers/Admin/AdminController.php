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

  public function getTopic(Request $request) {
    return Datatables::of(News::query())->make(true);
  }

  public function newsUpdate(Request $request) {
    // return Datatables::of(News::query())->make(true);
    $this->validate($request, [
      'hot_news' => 'required',
      'image' => 'required',
      'tag' => 'required',
      'caption' => 'required',
      'subtitle' => 'required'
    ]);

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


  public function newsInsert(Request $request) {
    $this->validate($request, [
      'id_topic' => 'required',
      'id_creator' => 'required',
      'hot_news' => 'required',
      'image' => 'required',
      'tag' => 'required',
      'caption' => 'required',
      'subtitle' => 'required'
    ]);
    
    $input = $request->all();
    
    $tmp = new News;
    $tmp->id_topic = $input['id_topic'];
    $tmp->id_topic = $input['id_topic'];
    $tmp->id_creator = $input['id_creator'];
    $tmp->hot_news = $input['hot_news'];
    $tmp->image = $input['image'];
    $tmp->tag = $input['tag'];
    $tmp->caption = $input['caption'];
    $tmp->subtitle = $input['subtitle'];
    $tmp->save();

    return response()->json([
      'error' => false,
      // 'new'  => $tmp
    ], 200);
  }

  public function newsRemove(Request $request) {
    $input = $request->all();
    News::where('id', $input['id'])->delete();
    return response()->json([
      'error' => false,
      // 'id'  => id,
    ], 200);
  }

  public function employeeUpdate(Request $request) {
    $this->validate($request, [
      'name' => 'required',
      'email' => 'required'
    ]);

    $input = $request->all();
    $tmp = User::find($input['id']);
    $tmp->name = $input['name'];
    $tmp->email = $input['email'];
    $tmp->save();

    return response()->json([
        'error' => false,
        // 'task'  => $tmp,
    ], 200);
  }

  public function employeeUpdateRole(Request $request) {

  }

  public function employeeUpdateStatus(Request $request) {

  }

  public function employeeRemove(Request $request) {
    $input = $request->all();
    User::where('id', $input['id'])->delete();
    return response()->json([
      'error' => false,
      // 'id'  => id,
    ], 200);
  }


  public function getTopicStyle(Request $request) {
    $datas = News::select('id', 'id_creator', 'hot_news', 'image', 'tag', 'caption', 'subtitle', 'created_at', 'updated_at')->where("id_topic", 1)->get();
    return view('page.admin._news',[
      'topic'  => 'Style',
      'datas' => $datas
    ]);
  }

  public function getTopicFashion(Request $request) {
    $datas = News::where("id_topic", 2)->get();
    return view('page.admin._news',[
      'topic'  => 'Fashion',
      'datas' => $datas
    ]);
  }

  public function getTopicTravel(Request $request) {
    $datas = News::where("id_topic", 3)->get();
    return view('page.admin._news',[
      'topic'  => 'Travel',
      'datas' => $datas
    ]);
  }

  public function getTopicSports(Request $request) {
    $datas = News::where("id_topic", 4)->get();
    return view('page.admin._news',[
      'topic'  => 'Sports',
      'datas' => $datas
    ]);
  }

  public function getTopicVideo(Request $request) {
    $datas = News::where("id_topic", 5)->get();
    return view('page.admin._news',[
      'topic'  => 'Video',
      'datas' => $datas
    ]);
  }

  public function getTopicArchives(Request $request) {
    $datas = News::where("id_topic", 6)->get();
    return view('page.admin._news',[
      'topic'  => 'Archives',
      'datas' => $datas
    ]);
  }

  public function getEmpoyeeStaff(Request $request) {
    $datas = User::where("id_role", 1)->get();
    return view('page.admin._employee',[
      'text'  => 'Staff',
      'datas' => $datas
    ]);
  }

  public function getNormalUser(Request $request) {
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

  public function updateHotNews(Request $request) {

  }

  public function deleteTopic(Request $request) {

  }


}
