<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

// use Illuminate\Support\Str;

use App\Topic;
use App\News;
use App\User;
use App\Slide;

use Yajra\Datatables\Datatables;

class AdminController extends Controller
{
  use AuthenticatesUsers;

  public function getLogout() {
    Auth::logout();
    return redirect("/home");
  }

  public function getIndex(Request $request) {
    // $topics = Topic::all();
    return view('page.admin._table',[
      // 'topics' => $topics
    ]);    
  }

  public function getEmployeeStaff(Request $request) {
    $query=User::where('id_role', 1);
    return Datatables::of($query)
    ->setRowAttr(['align'=>'center'])
    // ->make(true);
    ->toJson();
  }

  public function getEmployeeNormalUser(Request $request) {
    $query=User::where('id_role', 2);
    return Datatables::of($query)->make(true);
  }

  public function getNewsAll(Request $request) {
    $query=News::all();
    return Datatables::of($query)
    // ->editColumn('hot_news', function(News $news) {
      // return $news->hot_news == 1 ? '<i class="fa fa-check-circle"></i>' : '<i class="fa fa-times-circle"></i>' ;
    // })
    // ->setRowClass('{{ $hot_news == 1 ? "fa fa-check-circle" : "fa fa-times-circle" }}')
    ->make(true);
  }

  public function getNewsStyle(Request $request) {
    $query=News::where('id_topic', 1);
    return Datatables::of($query)
    // ->editColumn('hot_news', function(News $news) {
      // return $news->hot_news == 1 ? '<i class="fa fa-check-circle"></i>' : '<i class="fa fa-times-circle"></i>' ;
    // })
    // ->setRowClass('{{ $hot_news == 1 ? "fa fa-check-circle" : "fa fa-times-circle" }}')
    ->make(true);
  } 

  public function getNewsFashion(Request $request) {
    $query=News::where('id_topic', 2);
    return Datatables::of($query)->make(true);
  }

  public function getNewsTravel(Request $request) {
    $query=News::where('id_topic', 3);
    return Datatables::of($query)->make(true);
  }

  public function getNewsSports(Request $request) {
    $query=News::where('id_topic', 4);
    return Datatables::of($query)->make(true);
  }

  public function getNewsVideo(Request $request) {
    $query=News::where('id_topic', 5);
    return Datatables::of($query)->make(true);
  }

  public function getNewsArchives(Request $request) {
    $query=News::where('id_topic', 6);
    return Datatables::of($query)->make(true);
  }

  public function getTopic(Request $request) {
    return Datatables::of(News::query())->make(true);
  }

  public function getSlideAll(Request $request) {
    $query=Slide::all();
    return Datatables::of($query)->make(true);
  }

  public function newsUpdate(Request $request) {
    $this->validate($request, [
      'tag' => 'required',
      'caption' => 'required',
      'subtitle' => 'required'
    ]);

    $input = $request->all();
    $tmp = News::find($input['id']);
    $tmp->tag = $input['tag'];
    $tmp->caption = $input['caption'];
    $tmp->subtitle = $input['subtitle'];
    $tmp->save();

    return response()->json([
        'error' => false,
        // 'task'  => $tmp,
    ], 200);
  }

  public function newsUpdateImage(Request $request) {
    $input = $request->all();
    $tmp = News::find($input['id_news_hide']);
    $file = $request->file('image_news');
    $extension = $file->getClientOriginalExtension();
    $filename = time() . '_'. uniqid() . '.' . $extension;
    $file->move("images", $filename);
    $tmp->image = $filename;
    $tmp->save();

    return response()->json([
      'error' => false,
    ], 200);
  }


  public function newsInsert_all(Request $request) {
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

    if ($request->hasFile('image')) {
      $file = $request->file('image');
      $extension = $file->getClientOriginalExtension();
      $filename = time() . '_'. uniqid() . '.' . $extension;
      $file->move("images", $filename);
      $tmp->image = $filename;
    }

    $tmp->id_topic = $input['id_topic'];
    $tmp->id_creator = $input['id_creator'];
    $tmp->hot_news = $input['hot_news'];
    $tmp->tag = $input['tag'];
    $tmp->caption = $input['caption'];
    $tmp->subtitle = $input['subtitle'];
    $tmp->save();

    return response()->json([
      'error' => false,
      'input'  => $input
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

    if ($request->hasFile('image')) {
      $file = $request->file('image');
      $extension = $file->getClientOriginalExtension();
      $filename = time() . '_'. uniqid() . '.' . $extension;
      $file->move("images", $filename);
      $tmp->image = $filename;
    }

    $tmp->id_topic = $input['id_topic'];
    $tmp->id_creator = $input['id_creator'];
    $tmp->hot_news = $input['hot_news'];
    $tmp->tag = $input['tag'];
    $tmp->caption = $input['caption'];
    $tmp->subtitle = $input['subtitle'];
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
        // 'imput'  => $input,
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

  public function newsUpdateHotNewsYes(Request $request) {
    $this->validate($request, [
      'id' => 'required'
    ]);

    $input = $request->all();
    $tmp = News::find($input['id']);
    $tmp->hot_news = 1;
    $tmp->save();

    return response()->json([
        'error' => false,
        // 'task'  => $tmp,
    ], 200);
  }

  public function newsUpdateHotNewsNo(Request $request) {
    $this->validate($request, [
      'id' => 'required'
    ]);

    $input = $request->all();
    $tmp = News::find($input['id']);
    $tmp->hot_news = 0;
    $tmp->save();

    return response()->json([
        'error' => false,
        // 'task'  => $tmp,
    ], 200);
  }

  public function deleteTopic(Request $request) {

  }

  public function slideUpdate(Request $request) {
    $this->validate($request, [
      'heading_primary' => 'required',
      'heading_secondary' => 'required'
    ]);

    $input = $request->all();
    $tmp = Slide::find($input['id']);
    $tmp->heading_primary = $input['heading_primary'];
    $tmp->subtitle = $input['heading_secondary'];
    $tmp->save();

    return response()->json([
        'error' => false,
        // 'task'  => $tmp,
    ], 200);
  }

  public function slideUpdateImage(Request $request) {
    $input = $request->all();
    $tmp = Slide::find($input['id_slide_hide']);
    $file = $request->file('image_slide');
    $extension = $file->getClientOriginalExtension();
    $filename = time() . '_'. uniqid() . '.' . $extension;
    $file->move("images", $filename);
    $tmp->image = $filename;
    $tmp->save();

    return response()->json([
      'error' => false,
    ], 200);
  }


}
