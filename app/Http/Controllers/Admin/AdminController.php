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

  public function getLogin() {
    return view('auth.login');
  }

  public function getLogout(Request $request) {
    $request->session()->flush();
    Auth::logout();
    return redirect("/login");
  }

  public function getIndex(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "Not allow.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      if (!Auth::check()) {
        Auth::logout();
        return view('auth.login');
        exit();
      }

      return view('page.admin._table',[
        // 'topics' => $topics
      ]);
    };
  }

  public function getEmployeeAll(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "Not allow.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      if (!Auth::check()) {
        Auth::logout();
        return view('auth.login');
        exit();
      }
  
      $query=User::join("role", "users.id_role", "=", "role.id")
                    ->select("users.id", "role.name as id_role", "users.id_status", "users.name", "users.email");

      return Datatables::of($query)
      ->make(true);
    };
  }

  public function getEmployeeAdmin(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      if (!Auth::check()) {
        Auth::logout();
        return view('auth.login');
        exit();
      }
  
      $query=User::where('id_role', 0);
      return Datatables::of($query)
      ->setRowAttr(['align'=>'center'])
      // ->make(true);
      ->toJson();
    };
  }
  
  public function getEmployeeStaff(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      if (!Auth::check()) {
        Auth::logout();
        return view('auth.login');
        exit();
      }
  
      $query=User::where('id_role', 1);
      return Datatables::of($query)
      ->setRowAttr(['align'=>'center'])
      // ->make(true);
      ->toJson();
    };
  }

  public function getEmployeeCreator(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      if (!Auth::check()) {
        Auth::logout();
        return view('auth.login');
        exit();
      }
  
      $query=User::where('id_role', 2);
      return Datatables::of($query)->make(true);
    };
  }

  public function getEmployeeGuest(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      if (!Auth::check()) {
        Auth::logout();
        return view('auth.login');
        exit();
      }
  
      $query=User::where('id_role', 3);
      return Datatables::of($query)->make(true);
    };
  }

  public function getNewsAll(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      if (!Auth::check()) {
        Auth::logout();
        return view('auth.login');
        exit();
      }
      
      // $query=News::all();
      $query=News::join("users", "news.id_creator", "=", "users.id")
                    ->join("topic", "news.id_topic", "=", "topic.id")
                    ->select("news.id", "topic.name as id_topic", "users.name as id_creator", "news.hot_news", "news.id_status", "news.image", "news.tag", "news.caption", "news.subtitle");
  
      return Datatables::of($query)
      ->make(true);
    };
  }

  public function getNewsStyle(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      if (!Auth::check()) {
        Auth::logout();
        return view('auth.login');
        exit();
      }
  
      $query=News::where('id_topic', 1)
                    ->join("users", "news.id_creator", "=", "users.id")
                    ->join("topic", "news.id_topic", "=", "topic.id")
                    ->select("news.id", "users.name as id_creator", "news.hot_news", "news.id_status", "news.image", "news.tag", "news.caption", "news.subtitle");
      return Datatables::of($query)->make(true);
    };
  } 

  public function getNewsFashion(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      if (!Auth::check()) {
        Auth::logout();
        return view('auth.login');
        exit();
      }
  
      $query=News::where('id_topic', 2)
                    ->join("users", "news.id_creator", "=", "users.id")
                    ->join("topic", "news.id_topic", "=", "topic.id")
                    ->select("news.id", "users.name as id_creator", "news.hot_news", "news.id_status", "news.image", "news.tag", "news.caption", "news.subtitle");
      return Datatables::of($query)->make(true);
    };
  }

  public function getNewsTravel(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      if (!Auth::check()) {
        Auth::logout();
        return view('auth.login');
        exit();
      }
  
      $query=News::where('id_topic', 3)
                    ->join("users", "news.id_creator", "=", "users.id")
                    ->join("topic", "news.id_topic", "=", "topic.id")
                    ->select("news.id", "users.name as id_creator", "news.hot_news", "news.id_status", "news.image", "news.tag", "news.caption", "news.subtitle");
      return Datatables::of($query)->make(true);
    };
  }

  public function getNewsSports(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      if (!Auth::check()) {
        Auth::logout();
        return view('auth.login');
        exit();
      }
  
      $query=News::where('id_topic', 4)
                    ->join("users", "news.id_creator", "=", "users.id")
                    ->join("topic", "news.id_topic", "=", "topic.id")
                    ->select("news.id", "users.name as id_creator", "news.hot_news", "news.id_status", "news.image", "news.tag", "news.caption", "news.subtitle");
      return Datatables::of($query)->make(true);
    };
  }


  public function getVideoAll(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      if (!Auth::check()) {
        Auth::logout();
        return view('auth.login');
        exit();
      }
  
      $query=Video::join("users", "video.id_creator", "=", "users.id")
                    ->join("topic", "video.id_topic", "=", "topic.id")
                    ->select("video.id", "topic.name as id_topic", "users.name as id_creator", "video.hot_news", "video.id_status", "video.image", "video.tag", "video.caption", "video.subtitle");
      return Datatables::of($query)->make(true);

    };
  }

  public function getVideoStyle(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      if (!Auth::check()) {
        Auth::logout();
        return view('auth.login');
        exit();
      }
  
      $query=Video::where("id_topic", 1)
                    ->join("users", "video.id_creator", "=", "users.id")
                    ->select("video.id", "users.name as id_creator", "video.hot_news", "video.id_status", "video.image", "video.tag", "video.caption", "video.subtitle");
      return Datatables::of($query)->make(true);

    };
  }

  public function getVideoFashion(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      if (!Auth::check()) {
        Auth::logout();
        return view('auth.login');
        exit();
      }
  
      $query=Video::where("id_topic", 2)
                    ->join("users", "video.id_creator", "=", "users.id")
                    ->select("video.id", "users.name as id_creator", "video.hot_news", "video.id_status", "video.image", "video.tag", "video.caption", "video.subtitle");
      return Datatables::of($query)->make(true);

    };
  }

  public function getVideoTravel(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      if (!Auth::check()) {
        Auth::logout();
        return view('auth.login');
        exit();
      }
  
      $query=Video::where("id_topic", 3)
                    ->join("users", "video.id_creator", "=", "users.id")
                    ->select("video.id", "users.name as id_creator", "video.hot_news", "video.id_status", "video.image", "video.tag", "video.caption", "video.subtitle");
      return Datatables::of($query)->make(true);

    };
  }

  public function getVideoSports(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      if (!Auth::check()) {
        Auth::logout();
        return view('auth.login');
        exit();
      }
  
      $query=Video::where("id_topic", 4)
                    ->join("users", "video.id_creator", "=", "users.id")
                    ->select("video.id", "users.name as id_creator", "video.hot_news", "video.id_status", "video.image", "video.tag", "video.caption", "video.subtitle");
      return Datatables::of($query)->make(true);

    };
  }
  
  public function getTopic(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      if (!Auth::check()) {
        Auth::logout();
        return view('auth.login');
        exit();
      }
  
      return Datatables::of(News::query())->make(true);
    };
  }

  public function getSlideAll(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {

      if (!Auth::check()) {
        Auth::logout();
        return view('auth.login');
        exit();
      }
  
      // $query=Slide::all();
      $query=Slide::join("users", "slide.id_creator", "=", "users.id")
                    ->join("topic", "slide.id_topic", "=", "topic.id")
                    ->select("slide.id", "topic.name as id_topic", "users.name as id_creator", "slide.image", "slide.heading_primary", "slide.heading_secondary");

      return Datatables::of($query)->make(true);
    };
  }

  public function newsUpdate(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
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

    };

  }  

  public function newsUpdateImageNews(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {

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
    };

  }

  public function newsUpdateImageVideo(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      $input = $request->all();
      $tmp = Video::find($input['id_video_hide']);    
      
      $image_path = "images/".$tmp->image;  // Value is not URL but directory file path
      if(File::exists($image_path)) {
        File::delete($image_path);
      }
  
      $file = $request->file('image_video');
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

    };

  }

  public function newsInsert_all(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      $this->validate($request, [
        'id_topic' => 'required',
        'hot_news' => 'required',
        'image' => 'required',
        'tag' => 'required',
        'caption' => 'required',
        'subtitle' => 'required'
      ]);
      
      $input = $request->all();
      // dd($input);

      $tmp = new News;
  
      if ($request->hasFile('image')) {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '_'. uniqid() . '.' . $extension;
        $file->move("images", $filename);
        $tmp->image = $filename;
      }
  
      
      $tmp->id_topic = $input['id_topic'];
      $tmp->id_creator = session('id');
      $tmp->hot_news = $input['hot_news'];
      $tmp->tag = $input['tag'];
      $tmp->caption = $input['caption'];
      $tmp->subtitle = $input['subtitle'];
      $tmp->save();
  
      return response()->json([
        'error' => false,
        'input'  => $input
      ], 200);

    };

  }

  public function newsInsert(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
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
      $tmp->id_creator = session('id');
      $tmp->hot_news = $input['news_hot_news'];
      $tmp->tag = $input['news_tag'];
      $tmp->caption = $input['news_caption'];
      $tmp->subtitle = $input['news_subtitle'];
      $tmp->save();
  
      return response()->json([
        'error' => false,
        'input'  => $input
      ], 200);

    };

  }

  public function newsRemove(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      $input = $request->all();
      News::where('id', $input['id'])->delete();
      return response()->json([
        'error' => false,
        'id'  => $input["id"]
      ], 200);

    };
  }

  public function employeeUpdate(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      $this->validate($request, [
        'employee_id' => 'required',
        'employee_id_role' => 'required',
        'employee_name' => 'required',
        'employee_email' => 'required'
      ]);
  
      $input = $request->all();
      $tmp = User::find($input['employee_id']);
      if ($tmp->id_role == 0) {
        $tmp->id_role = 0;
      } else {
        $tmp->id_role = $input['employee_id_role'];
      }
      $tmp->name = $input['employee_name'];
      $tmp->email = $input['employee_email'];
      $tmp->save();
  
      return response()->json([
          'error' => false,
          'employee_id' => $input['employee_id'],
          'employee_id_role' => $input['employee_id_role'],
          'employee_name' => $input['employee_name'],
          'employee_email' => $input['employee_email']
      ], 200);

    };
  }

  
  public function employeeRemove(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      $input = $request->all();
      User::where('id', $input['id'])->delete();
      return response()->json([
        'error' => false,
      ], 200);
    };
  }

  public function employeeUpdateStatusYes(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      $this->validate($request, [
        'id' => 'required'
      ]);
  
      $input = $request->all();
      $tmp = User::find($input['id']);
      $tmp->id_status = 1;
      if ($tmp->id_role == 0) {
        return response()->json([
          'error' => true,
          'admin' => true
      ], 400);
        exit();
      }
      $tmp->save();
  
      return response()->json([
          'error' => false,
      ], 200);
    };
  }

  public function employeeUpdateStatusNo(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      $this->validate($request, [
        'id' => 'required'
      ]);
  
      $input = $request->all();
      $tmp = User::find($input['id']);
      $tmp->id_status = 0;
      if ($tmp->id_role == 0) {
        return response()->json([
          'error' => true,
          'admin' => true
      ], 400);
        exit();
      }
      $tmp->save();
  
      return response()->json([
          'error' => false,
      ], 200);
    };
  }


  public function getTopicStyle(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      $datas = News::select('id', 'id_creator', 'hot_news', 'image', 'tag', 'caption', 'subtitle', 'created_at', 'updated_at')->where("id_topic", 1)->get();
      return view('page.admin._news',[
        'topic'  => 'Style',
        'datas' => $datas
      ]);
    };
    
  }

  public function getTopicFashion(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      $datas = News::where("id_topic", 2)->get();
      return view('page.admin._news',[
        'topic'  => 'Fashion',
        'datas' => $datas
      ]);

    };
    

  }

  public function getTopicTravel(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      $datas = News::where("id_topic", 3)->get();
      return view('page.admin._news',[
        'topic'  => 'Travel',
        'datas' => $datas
      ]);

    };
  }

  public function getTopicSports(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      $datas = News::where("id_topic", 4)->get();
      return view('page.admin._news',[
        'topic'  => 'Sports',
        'datas' => $datas
      ]);

    };
    

  }

  public function getTopicVideo(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      $datas = News::where("id_topic", 5)->get();
      return view('page.admin._news',[
        'topic'  => 'Video',
        'datas' => $datas
      ]);

    };
  }

  public function getTopicArchives(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      $datas = News::where("id_topic", 6)->get();
      return view('page.admin._news',[
        'topic'  => 'Archives',
        'datas' => $datas
      ]);
    };
  }

  public function getEmpoyeeStaff(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      $datas = User::where("id_role", 1)->get();
      return view('page.admin._employee',[
        'text'  => 'Staff',
        'datas' => $datas
      ]);

    };
    

  }

  public function getNormalUser(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      $datas = User::where("id_role", 2)->get();
      return view('page.admin._employee',[
        'text'  => 'Normal Users',
        'datas' => $datas
      ]);
    };
    
  }

  public function updateTopic(Request $request, $id) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
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
    };
  }

  public function newsUpdateHotNewsYes(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
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
    };

  }

  public function newsUpdateHotNewsNo(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
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

    };

  }

  public function videoUpdate(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      $this->validate($request, [
        'video_id_topic' => 'required',
        'video_tag' => 'required',
        'video_caption' => 'required',
        'video_subtitle' => 'required'
      ]);
  
      $input = $request->all();
      // dd($input);
      $tmp = Video::find($input['id']);
      $tmp->id_topic = $input['video_id_topic'];
      $tmp->tag = $input['video_tag'];
      $tmp->caption = $input['video_caption'];
      $tmp->subtitle = $input['video_subtitle'];
      $tmp->save();
  
      return response()->json([
          'error' => false,
          'id' => $tmp->id
      ], 200);

    };

  }

  public function videoInsert(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      $this->validate($request, [
        '_video_id_topic' => 'required_without:video_id_topic',
        'video_id_topic' => 'required_without:_video_id_topic',
        'video_hot_news' => 'required',
        'video_image' => 'required',
        'video_tag' => 'required',
        'video_caption' => 'required',
        'video_subtitle' => 'required'
      ]);
      
      $input = $request->all();
      
      $tmp = new Video;
  
      if ($request->hasFile('video_image')) {
        $file = $request->file('video_image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '_'. uniqid() . '.' . $extension;
        $file->move("images", $filename);
        $tmp->image = $filename;
      }

      if ($input['_video_id_topic'] != "") {
        $tmp->id_topic = $input['_video_id_topic'];
      } else {
        $tmp->id_topic = $input['video_id_topic'];
      }
      $tmp->id_creator = session('id');
      $tmp->hot_news = $input['video_hot_news'];
      $tmp->tag = $input['video_tag'];
      $tmp->caption = $input['video_caption'];
      $tmp->subtitle = $input['video_subtitle'];
      $tmp->save();
  
      return response()->json([
        'error' => false,
        'input'  => $input
      ], 200);

    };

  }

  public function videoRemove(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      $input = $request->all();
      Video::where('id', $input['id'])->delete();
      return response()->json([
        'error' => false,
        'id'  => $input["id"]
      ], 200);

    };
  }

  public function newsUpdateHotVideoYes(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      $this->validate($request, [
        'id' => 'required'
      ]);
  
      $input = $request->all();
      $tmp = Video::find($input['id']);
      $tmp->hot_news = 1;
      $tmp->save();
  
      return response()->json([
          'error' => false,
          // 'task'  => $tmp,
      ], 200);

    };

  }

  public function newsUpdateHotVideoNo(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      $this->validate($request, [
        'id' => 'required'
      ]);
  
      $input = $request->all();
      $tmp = Video::find($input['id']);
      $tmp->hot_news = 0;
      $tmp->save();
  
      return response()->json([
          'error' => false,
          // 'task'  => $tmp,
      ], 200);

    };

  }
  
  public function newsUpdateStatusNewsYes(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      $this->validate($request, [
        'id' => 'required'
      ]);
  
      $input = $request->all();
      $tmp = News::find($input['id']);
      $tmp->id_status = 1;
      $tmp->save();
  
      return response()->json([
          'error' => false,
          // 'task'  => $tmp,
      ], 200);

    };

  }

  public function newsUpdateStatusNewsNo(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      $this->validate($request, [
        'id' => 'required'
      ]);
  
      $input = $request->all();
      $tmp = News::find($input['id']);
      $tmp->id_status = 0;
      $tmp->save();
  
      return response()->json([
          'error' => false,
          // 'task'  => $tmp,
      ], 200);

    };

  }

  public function newsUpdateStatusVideoYes(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      $this->validate($request, [
        'id' => 'required'
      ]);
  
      $input = $request->all();
      $tmp = Video::find($input['id']);
      $tmp->id_status = 1;
      $tmp->save();
  
      return response()->json([
          'error' => false,
          // 'task'  => $tmp,
      ], 200);

    };

  }

  public function newsUpdateStatusVideoNo(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      $this->validate($request, [
        'id' => 'required'
      ]);
  
      $input = $request->all();
      $tmp = Video::find($input['id']);
      $tmp->id_status = 0;
      $tmp->save();
  
      return response()->json([
          'error' => false,
          // 'task'  => $tmp,
      ], 200);

    };

  }

  public function deleteTopic(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    
  }

  public function slideUpdate(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      $this->validate($request, [
        'heading_primary' => 'required',
        'heading_secondary' => 'required'
      ]);
  
      $input = $request->all();
      $tmp = Slide::find($input['id']);
      $tmp->heading_primary = $input['heading_primary'];
      $tmp->heading_secondary = $input['heading_secondary'];
      $tmp->save();
  
      return response()->json([
          'error' => false,
          'id' => $input['id'],
          'heading_primary' => $tmp->heading_primary,
          'heading_secondary' => $tmp->heading_secondary
      ], 200);

    };

  }

  public function slideRemove(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      // $this->validate($request, [
      //   'heading_primary' => 'required',
      //   'heading_secondary' => 'required'
      // ]);
  
      $input = $request->all();
      Slide::where('id', $input['id'])->delete();
      return response()->json([
          'error' => false,
          'id' => $input['id']
      ], 200);
    };
  }

  
  public function slideUpdateImage(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
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
        'id' => $input['id_slide_hide'],
        'image' => $tmp->image
      ], 200);
    };
  }

  public function slideInsert(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      // $this->validate($request, [
      //   'id_topic' => 'required',
      //   'hot_news' => 'required',
      //   'image' => 'required',
      //   'tag' => 'required',
      //   'caption' => 'required',
      //   'subtitle' => 'required'
      // ]);
      
      $input = $request->all();
      dd($input);

      $tmp = new Slide;
  
      // if ($request->hasFile('image')) {
      //   $file = $request->file('image');
      //   $extension = $file->getClientOriginalExtension();
      //   $filename = time() . '_'. uniqid() . '.' . $extension;
      //   $file->move("images", $filename);
      //   $tmp->image = $filename;
      // }
  
      
      // $tmp->id_topic = $input['id_topic'];
      // $tmp->id_creator = session('id');
      // $tmp->hot_news = $input['hot_news'];
      // $tmp->tag = $input['tag'];
      // $tmp->caption = $input['caption'];
      // $tmp->subtitle = $input['subtitle'];
      // $tmp->save();
  
      return response()->json([
        // 'error' => false,
        // 'input'  => $input
      ], 200);

    };

  }
}
