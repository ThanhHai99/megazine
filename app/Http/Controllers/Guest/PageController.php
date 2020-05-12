<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Slide;
use App\Topic;
use App\News;
use App\Video;


class PageController extends Controller
{
    public function getHome(Request $request) {
        $slides = Slide::join("topic", "slide.id_topic", "=", "topic.id")
                        ->select("slide.image", "slide.heading_primary", "slide.heading_secondary", "topic.name")
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
        $newsStyleMores="";
        $newsStyleMores = News::where("id_topic", 1)
                        ->orderBy("created_at", "desc")
                        ->offset($request->totalItem)
                        ->limit(2)
                        ->get();
        
        dd($newsStyleMores);
        $output = '';
        // foreach ($newsStyleMores as $newsStyleMore) {
        for ($i=0; $i<=1; $i++) {
            $output .= '
                <div class="col-md-4 item-style">
                    <div class="blog-entry-style animate-box fadeInUp animated">
                    <div class="blog-img">
                        <a href="single/'.$newsStyleMores->id.'"><img src="images/'.$newsStyleMores->image.'" class="img-responsive" alt="html5 bootstrap template"></a>
                    </div>
                    <div class="desc">
                        <p class="meta">
                            <span class="cat"><a href="#">'.$newsStyleMores->tag.'</a></span>
                            <span class="date">'. date("d F Y", strtotime($newsStyleMores->created_at)) .'</span>
                        </p>
                        <h2><a href="single/'.$newsStyleMores->id.'">'.$newsStyleMores->caption.'</a></h2>
                        <p>'.$newsStyleMores->subtitle.'</p>
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

    public function getVideo(Request $request) {
        $videos = Video::orderBy("created_at", "desc")->limit(10)->get();
        return view("page.guest.video",[
            "videos" => $videos
        ]);
    }

    public function getArchives(Request $request) {
        $news = News::orderBy("created_at", "desc")->paginate(7);
        return view("page.guest.archives", [
            "news" => $news
        ]);
    }    

    public function getSingle(Request $request, $id = null) {
        if (!(is_null($id))) {
            $newsDetails = News::join("users", "news.id_creator", "=", "users.id")
                                ->select("news.id", "news.id_topic", "users.name", "news.hot_news", "news.id_status", "news.image", "news.caption", "news.subtitle", "news.created_at")
                                ->where("news.id", "=", $id)
                                ->get();            
            $id_topic = News::find($id)->id_topic;
            $newsRecents = News::where("id_topic", "=", $id_topic)
                                ->where("id", "<>", $id)
                                ->inRandomOrder()
                                ->limit(6)->get();

            // dd($newsRecent);
            return view("page.guest.single", [                
                "newsDetails" => $newsDetails,
                "newsRecents" => $newsRecents
            ]);
        };
    }
}
