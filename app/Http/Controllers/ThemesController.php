<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Goutte\Client;
use Goutte;
use Symfony\Component\DomCrawler\Crawler;

use App\Themes;

class ThemesController extends Controller
{
    public function index(){
        $populars = Themes::where('category','popular')->orderBy("created_at",'desc')->get();
        $latests = Themes::where('category','latest')->orderBy("created_at",'desc')->get();
        $featureds = Themes::where('category','featured')->orderBy("created_at",'desc')->get();
        return view('themes.index',compact('populars','latests','featureds'));
    }
    public function details($slug){
        $theme = Themes::where('slug',$slug)->firstOrFail();
        if($theme){
            return view('themes.show',compact('theme'));
        }
        return 'NOT Found';

    }
	public function search($search){
		$themes = Themes::where("title",'like','%'.$title.'%')->paginate(9);
		 return view('themes.search',compact('themes'));
	}
}
