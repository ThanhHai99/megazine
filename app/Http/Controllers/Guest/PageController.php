<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Mail\SendNewsMail;
use Illuminate\Support\Facades\Mail;

use App\Slide;
use App\Topic;
use App\News;
use App\Video;
use App\ReceiveNews;
use App\Comment;


class PageController extends Controller
{
    public function getHome(Request $request) {
        $slides = Slide::select("slide.image", "slide.heading_primary", "slide.heading_secondary", "slide.tag")
                        ->limit(3)
                        ->orderBy("created_at", "desc")
                        ->get();

        $news = News::orderBy("created_at", "desc")
                    ->limit(14)
                    ->get();

        return view("page.guest.home",[
            "slides" => $slides,
            "news" => $news
        ]);
    }

    public function getStyle(Request $request) {
        $slides = Slide::where("id_topic", 1)
                        ->orderBy("created_at", "desc")
                        ->limit(3)
                        ->get();
        $newsNewests = News::where("id_topic", 1)
                        ->orderBy("created_at", "desc")
                        ->limit(2)
                        ->get();
        $newsStyles = News::where("id_topic", 1)
                        ->orderBy("created_at", "desc")
                        ->offset(2)
                        ->limit(11)
                        ->get();
        $video = Video::where("id_topic", 1)
                        ->orderBy("created_at", "desc")
                        ->limit(1)
                        ->get();

        return view("page.guest.style", [
            "slides" => $slides,
            "newsNewests" => $newsNewests,
            "newsStyles" => $newsStyles,
            "video" => $video
        ]);
    }

    public function getStyleMore(Request $request) {
        $newsStyleMores = null;
        $newsStyleMores = News::where("id_topic", 1)
                        ->orderBy("created_at", "desc")
                        ->offset($request->totalItem + 1)
                        ->limit(6)
                        ->get();

        $output = '';
        foreach ($newsStyleMores as $newsStyleMore) {
            $output .= '
                <div class="col-md-4 item-style">
                    <div class="blog-entry-style animate-box fadeInUp animated">
                    <div class="blog-img">
                        <a href="single/'.$newsStyleMore->id.'"><img src="images/'.$newsStyleMore->image.'" class="img-responsive" alt="html5 bootstrap template"></a>
                    </div>
                    <div class="desc">
                        <p class="meta">
                            <span class="cat"><a href="javascript:void(0)">'.$newsStyleMore->tag.'</a></span>
                            <span class="date">'. date("d F Y", strtotime($newsStyleMore->created_at)) .'</span>
                        </p>
                        <h2><a href="single/'.$newsStyleMore->id.'">'.$newsStyleMore->caption.'</a></h2>
                        <p>'.$newsStyleMore->subtitle.'</p>
                    </div>
                    </div>
                </div>';
        }
        echo $output;
    }

    public function getFashion(Request $request) {
        $newsNewests = News::where("id_topic", 2)
                            ->orderBy("created_at", "desc")
                            ->limit(6)
                            ->get();
        $newsFashions = News::where("id_topic", 2)
                            ->orderBy("created_at", "desc")
                            ->offset(6)
                            ->limit(6)
                            ->get();
        $newsFashionRecents = News::where("id_topic", 2)
                                    ->inRandomOrder()
                                    ->limit(3)
                                    ->get();
        $video = Video::where("id_topic", 2)
                    ->orderBy("created_at", "desc")
                    ->limit(1)
                    ->get();

        return view("page.guest.fashion",[
            "newsNewests" => $newsNewests,
            "newsFashions" => $newsFashions,
            "newsFashionRecents" => $newsFashionRecents,
            "video" => $video
        ]);
    }

    public function getFashionMore(Request $request) {
        $newsFashionMores = null;
        $newsFashionMores = News::where("id_topic", 2)
                        ->orderBy("created_at", "desc")
                        ->offset($request->totalItem)
                        ->limit(6)
                        ->get();

        $output = '';
        foreach ($newsFashionMores as $newsFashionMore) {
            $output .= '
                <article class="animate-box item-fashion fadeInUp animated">
                    <div class="blog-img" style="background-image: url(images/'. $newsFashionMore->image .');"></div>
                    <div class="desc">
                    <div class="meta">
                        <p>
                        <span>'. $newsFashionMore->tag.' </span>
                        <span>'. $newsFashionMore->created_at.' </span>
                        </p>
                    </div>
                    <h2><a href="single/'. $newsFashionMore->id.' ">'. $newsFashionMore->caption.' </a></h2>
                    <p>'. $newsFashionMore->subtitle.' </p>
                    <p><a href="single/'. $newsFashionMore->id.' " class="btn btn-primary with-arrow">Read More <i class="icon-arrow-right22"></i></a></p>
                    </div>
                </article>';
        }
        echo $output;
    }

    public function getTravel(Request $request) {
        $newsTravels = News::where("id_topic", 3)
                            ->orderBy("created_at", "desc")
                            ->limit(8)
                            ->get();
        $newsTravelRecents = News::where("id_topic", 3)
                                ->inRandomOrder()
                                ->limit(6)
                                ->get();

        return view("page.guest.travel",[
            "newsTravels" => $newsTravels,
            "newsTravelRecents" => $newsTravelRecents
        ]);
    }

    public function getTravelMore(Request $request) {
        $newsTravelMores = null;
        $newsTravelMores = News::where("id_topic", 3)
                        ->orderBy("created_at", "desc")
                        ->offset($request->totalItem)
                        ->limit(6)
                        ->get();

        $output = '';
        foreach ($newsTravelMores as $newsTravelMore) {
            $output .= '
                <article class="blog-entry-travel animate-box item-travel fadeInUp animated">
                    <div class="blog-img" style="background-image: url(images/'. $newsTravelMore->image .');"></div>
                    <div class="desc">
                    <p class="meta">
                        <span class="cat"><a href="javascript:void(0)">'. $newsTravelMore->tag .'</a></span>
                        <span class="date">'. date("d F Y", strtotime($newsTravelMore->created_at)) .'</span>
                    </p>
                    <h2><a href="single/'. $newsTravelMore->id .'">'. $newsTravelMore->caption .'</a></h2>
                    <p>'. $newsTravelMore->title .'</p>
                    <p><a href="single/'. $newsTravelMore->id .'" class="btn btn-primary with-arrow">Read More <i class="icon-arrow-right22"></i></a></p>
                    </div>
                </article>';
        }
        echo $output;
    }

    public function getSports(Request $request) {
        $hotNewsSports = News::where("id_topic", 4)
                            ->where("hot_news", 1)
                            ->orderBy("created_at", "desc")
                            ->limit(4)
                            ->get();
        $newsNewests = News::where("id_topic", 4)
                            ->where("hot_news", 0)
                            ->orderBy("created_at", "desc")
                            ->limit(12)
                            ->get();
        return view("page.guest.sports",[
            "hotNewsSports" => $hotNewsSports,
            "newsNewests" => $newsNewests
        ]);
    }

    public function getSportsMore(Request $request) {
        $newsSportsMores = null;
        $newsSportsMores = News::where("id_topic", 4)
                        ->orderBy("created_at", "desc")
                        ->offset($request->totalItem)
                        ->limit(6)
                        ->get();

        $output = '';
        foreach ($newsSportsMores as $newsSportsMore) {
            $output .= '
                    <div class="col-md-4 text-center item-sports">
                        <div class="blog-entry-sports animate-box fadeInUp animated">
                        <a href="single/'.$newsSportsMore->id.'" class="blog-img" style="background-image: url(images/'.$newsSportsMore->image.');">
                        </a>
                        <div class="desc">
                            <p class="tag"><span>'.$newsSportsMore->tag.'</span></p>
                            <h2 class="head-article"><a href="single/110">'.$newsSportsMore->caption.'</a></h2>
                            <p>'.$newsSportsMore->subtitle.'</p>
                        </div>
                        </div>
                    </div>';
        }
        echo $output;
    }

    public function getVideo(Request $request) {
        $videos = Video::orderBy("created_at", "desc")->limit(10)->get();
        return view("page.guest.video",[
            "videos" => $videos
        ]);
    }

    public function getVideoMore(Request $request) {
        $newsVideoMores = null;
        $newsVideoMores = Video::orderBy("created_at", "desc")
                        ->offset($request->totalItem)
                        ->limit(6)
                        ->get();

        $output = '';
        foreach ($newsVideoMores as $newsVideoMore) {
            $output .= '
                    <div class="col-md-12 item-video">
                        <div class="blog-entry-style animate-box fadeInUp animated">
                            <div class="blog-img">
                                <div class="video colorlib-video" style="background-image: url(images/'. $newsVideoMore->image .'); height: 600px;">
                                    <a href="videos/'. $newsVideoMore->video .'" class="popup-vimeo"><i class="icon-play4"></i></a>
                                    <div class="overlay"></div>
                                </div>
                            </div>
                            <div class="desc">
                                <p class="meta">
                                    <span class="cat"><a href="javascript:void(0)">'. $newsVideoMore->tag .'</a></span>
                                    <span class="date">'. date("d F Y", strtotime($newsVideoMore->created_at)) .'</span>
                                    <!-- <span class="pos">By <a href="javascript:void(0)">Walter</a></span> -->
                                </p>
                                <h2><a href="blog.html">'. $newsVideoMore->caption .'</a></h2>
                                <p>'. $newsVideoMore->subtitle .'</p>
                            </div>
                        </div>
                    </div>';
        }
        echo $output;
    }

    public function getSingle(Request $request, $id = null) {
        if (!(is_null($id))) {
            $newsDetails = News::join("users", "news.id_creator", "=", "users.id")
                                ->select("news.id", "news.id_topic", "users.name", "news.hot_news", "news.id_status", "news.image", "news.tag", "news.caption", "news.subtitle", "news.created_at")
                                ->where("news.id", "=", $id)
                                ->get();            
            $id_topic = News::find($id)->id_topic;
            $newsRecents = News::where("id_topic", "=", $id_topic)
                                ->where("id", "<>", $id)
                                ->inRandomOrder()
                                ->limit(6)->get();

            $comments = Comment::where("id_news", $id)
                                ->join("users", "comment.id_user", "=", "users.id")
                                ->select("comment.content", "comment.created_at", "users.name")
                                ->get();
            return view("page.guest.single", [                
                "newsDetails" => $newsDetails,
                "newsRecents" => $newsRecents,
                "comments" => $comments
            ]);
        };
    }

    public function subcribe(Request $request) {
        $this->validate($request, [
          'email' => 'required'
        ]);
        $input = $request->all();
    
        if (!(ReceiveNews::where('email', $input['email'])->exists())) {
            ReceiveNews::insert(['email' => $input['email']]);
        }
    
        return response()->json([
            'error' => false
        ], 200);
    }

    public function sendNews(Request $request) {
        $receiveNews = ReceiveNews::get();
        foreach ($receiveNews as $receiveNew) {
            Mail::to($receiveNew['email'])->send(new SendNewsMail($receiveNew));
        }

    }

    public function commentNew(Request $request) {
        if (session('user_id') == null) {
            return response()->json([
                'authenticated' => false
            ], 500);
            exit();
        }
        $this->validate($request, [
            'id' => 'required',
            'comment' => 'required'
          ]);
        $input = $request->all();
        $tmp = new Comment;
        $tmp->id_news = $input["id"];
        $tmp->id_user = session('user_id');
        $tmp->content = $input["comment"];
        $tmp->save();
        return response()->json([
            'error' => false
        ], 200);
    }
}
