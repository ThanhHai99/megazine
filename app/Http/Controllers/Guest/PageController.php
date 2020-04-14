<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

        $news = News::orderBy("created_at", "desc")->limit(14)->get();

        return view("page.guest.home",[
            "slides" => $slides,
            "news" => $news
        ]);
    }

    public function getStyle(Request $request) {
        $newsNewests = News::where("id_topic", 1)->orderBy("created_at", "desc")->limit(2)->get();
        $newsStyles = News::where("id_topic", 1)->orderBy("created_at", "desc")->offset(2)->limit(11)->get();
        $video = Video::where("id_topic", 1)->orderBy("created_at", "desc")->limit(1)->get();

        return view("page.guest.style", [
            "newsNewests" => $newsNewests,
            "newsStyles" => $newsStyles,
            "video" => $video
        ]);
    }

    public function getFashion(Request $request) {
        $newsNewests = News::where("id_topic", 2)->orderBy("created_at", "desc")->limit(6)->get();
        $newsFashions = News::where("id_topic", 2)->orderBy("created_at", "desc")->offset(6)->limit(6)->get();
        $newsFashionRecents = News::where("id_topic", 2)->orderBy("created_at", "desc")->offset(12)->limit(3)->get();
        $video = Video::where("id_topic", 2)->orderBy("created_at", "desc")->limit(1)->get();

        return view("page.guest.fashion",[
            "newsNewests" => $newsNewests,
            "newsFashions" => $newsFashions,
            "newsFashionRecents" => $newsFashionRecents,
            "video" => $video
        ]);
    }

    public function getTravel(Request $request) {
        $newsTravels = News::where("id_topic", 3)->orderBy("created_at", "desc")->limit(8)->get();
        $newsTravelRecents = News::where("id_topic", 3)->orderBy("created_at", "desc")->offset(8)->limit(3)->get();

        return view("page.guest.travel",[
            "newsTravels" => $newsTravels,
            "newsTravelRecents" => $newsTravelRecents
        ]);
    }

    public function getSports(Request $request) {
        $hotNewsSports = News::where("id_topic", 4)->where("hot_news", 1)->orderBy("created_at", "desc")->limit(4)->get();
        $newsNewests = News::where("id_topic", 4)->where("hot_news", 0)->orderBy("created_at", "desc")->limit(12)->get();
        return view("page.guest.sports",[
            "hotNewsSports" => $hotNewsSports,
            "newsNewests" => $newsNewests
        ]);
    }

    public function getVideo(Request $request) {
        $videos = Video::orderBy("created_at", "desc")->limit(5)->get();
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
            $newsDetails = News::where("id", $id)->get();
            return view("page.guest.single", [                
                "newsDetails" => $newsDetails
            ]);
        };
    }
}
