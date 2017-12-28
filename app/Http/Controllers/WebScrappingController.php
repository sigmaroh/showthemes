<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Goutte\Client;
use Goutte;
use Symfony\Component\DomCrawler\Crawler;

use App\Themes;
class WebScrappingController extends Controller
{
	public function jobs(){
		$client = new Client();
 //  Hackery to allow HTTPS
    $guzzleclient = new \GuzzleHttp\Client([
        'timeout' => 120,
        'verify' => false,
    ]);

	  /*featured */
	  $crawler = Goutte::request('GET', 'https://merojob.com/search/?q=php');
	  
	  $crawler->filter('.job-card')->each(function ($node) {
		  
		 $title = trim($node->filter('h1>a')->text()); 
		 
		  $theme_url =  $node->filter('.media-heading>a')->link()->getUri();
	
		  $image_url  =  $node->filter('img')->attr('src');
			
		  
		  $company = trim($node->filter('h3>a')->text());
		  
		  $location = $node->filter('.location')->text();
		 // $download_url  =  $node->filter('.install-theme-preview')->attr('href');
		  //$crawler_two = Goutte::request('GET', $theme_url);
			//dd('here');
		  //$det = $crawler_two->filter('.p-0')->each(function ($node) {
			//  return ['details' =>  $node->html()];
		  //});
		  //$details = $det[2]['details'];
		  return ['title'=>$title,'theme_url'=>$theme_url,'image_url'=>$image_url,'compay'=>$company,'location'=>$location];
	  });
	  /*featured*/
	
	
	
	
	

	}
     public function index()
  {
  //  Create a new Goutte client instance
    $client = new Client();
 //  Hackery to allow HTTPS
    $guzzleclient = new \GuzzleHttp\Client([
        'timeout' => 120,
        'verify' => false,
    ]);
//
//	  /*popular */
//	$crawler = Goutte::request('GET', 'https://wordpress.org/themes/browse/popular/');
//	 $crawler->filter('.theme')->each(function ($node) {
//
//    $theme_url =  $node->filter('.url')->link()->getUri();
//
//    $image_url  =  $node->filter('img')->attr('src');
//
//    $title	=  $node->filter('.entry-title')->text();
//
//    $download_url  =  $node->filter('.install-theme-preview')->attr('href');
//	$existing_theme =Themes::where("title",$title)->first();
//	if($existing_theme){
//
//	}
//	else{
//	$theme  = new Themes();
//	$theme->title= $title;
//	$theme->image_url =$image_url;
//	$theme->theme_url=$theme_url;
//	$theme->download_url=$download_url;
//	$theme->category='popular';
//	$theme->save();
//	}
//	return ['title'=>$title,'theme_url'=>$theme_url,'image_url'=>$image_url,'download_url'=>$download_url];
//    });
//	 /*popular */

		 /*featured */
		 $crawler = Goutte::request('GET', 'https://wordpress.org/themes/browse/popular/');
		 $crawler->filter('.theme')->each(function ($node) {
			 $theme_url =  $node->filter('.url')->link()->getUri();
			 $image_url  =  $node->filter('img')->attr('src');
			 $title =  $node->filter('.entry-title')->text();
			 $download_url  =  $node->filter('.install-theme-preview')->attr('href');
			 $existing_theme =Themes::where("title",$title)->first();
			 $crawler_two = Goutte::request('GET', $theme_url);

			 $details  =$crawler_two->filter('.theme-about')->each(function ($node) {
				 return ['image_url_details' =>  $node->filter('img')->attr('src'),
						 'details'  => $node->filter('.entry-summary')->text(),
				 ];
			 });
			 if($existing_theme){
			 }
			 else{
				 $theme  = new Themes();
				 $theme->title= $title;
				 $theme->slug= str_slug($title, '-');;
				 $theme->image_url =$image_url;
				 $theme->theme_url=$theme_url;
				 $theme->download_url=$download_url;
				 $theme->category='popular';
				 $detail = $details[0];
				 $theme->image_url_details =$detail['image_url_details'];
				 $theme->details=$detail['details'];
				 $theme->save();
			 }
			 return ['title'=>$title,'theme_url'=>$theme_url,'image_url'=>$image_url,'download_url'=>$download_url];
		 });
		 /*featured*/
	  /*featured */
	  $crawler = Goutte::request('GET', 'https://wordpress.org/themes/browse/featured/');
	  $crawler->filter('.theme')->each(function ($node) {
		  $theme_url =  $node->filter('.url')->link()->getUri();
		  $image_url  =  $node->filter('img')->attr('src');
		  $title =  $node->filter('.entry-title')->text();
		  $download_url  =  $node->filter('.install-theme-preview')->attr('href');
		  $existing_theme =Themes::where("title",$title)->first();
		  $crawler_two = Goutte::request('GET', $theme_url);

		  $details  =$crawler_two->filter('.theme-about')->each(function ($node) {
			  return ['image_url_details' =>  $node->filter('img')->attr('src'),
			  'details'  => $node->filter('.entry-summary')->text(),
			  ];
		  });
		  if($existing_theme){
		  }
		  else{
			  $theme  = new Themes();
			  $theme->title= $title;
			  $theme->slug= str_slug($title, '-');;
			  $theme->image_url =$image_url;
			  $theme->theme_url=$theme_url;
			  $theme->download_url=$download_url;
			  $theme->category='featured';
				$detail = $details[0];
			  $theme->image_url_details =$detail['image_url_details'];
			  $theme->details=$detail['details'];
			  $theme->save();
		  }
		  return ['title'=>$title,'theme_url'=>$theme_url,'image_url'=>$image_url,'download_url'=>$download_url];
	  });
	  /*featured*/



		 /*featured */
		 $crawler = Goutte::request('GET', 'https://wordpress.org/themes/browse/new/');
		 $crawler->filter('.theme')->each(function ($node) {
			 $theme_url =  $node->filter('.url')->link()->getUri();
			 $image_url  =  $node->filter('img')->attr('src');
			 $title =  $node->filter('.entry-title')->text();
			 $download_url  =  $node->filter('.install-theme-preview')->attr('href');
			 $existing_theme =Themes::where("title",$title)->first();
			 $crawler_two = Goutte::request('GET', $theme_url);

			 $details  =$crawler_two->filter('.theme-about')->each(function ($node) {
				 return ['image_url_details' =>  $node->filter('img')->attr('src'),
						 'details'  => $node->filter('.entry-summary')->text(),
				 ];
			 });
			 if($existing_theme){
			 }
			 else{
				 $theme  = new Themes();
				 $theme->title= $title;
				 $theme->slug= str_slug($title, '-');;
				 $theme->image_url =$image_url;
				 $theme->theme_url=$theme_url;
				 $theme->download_url=$download_url;
				 $theme->category='latest';
				 $detail = $details[0];
				 $theme->image_url_details =$detail['image_url_details'];
				 $theme->details=$detail['details'];
				 $theme->save();
			 }
			 return ['title'=>$title,'theme_url'=>$theme_url,'image_url'=>$image_url,'download_url'=>$download_url];
		 });
		 /*featured*/


//	  /*recent */
//	  $crawler = Goutte::request('GET', 'https://wordpress.org/themes/browse/new/');
//	  $crawler->filter('.theme')->each(function ($node) {
//
//		  $theme_url        =  $node->filter('.url')->link()->getUri();
//
//		  $image_url  =  $node->filter('img')->attr('src');
//
//		  $title          =  $node->filter('.entry-title')->text();
//
//		  $download_url     =  $node->filter('.install-theme-preview')->attr('href');
//		  $existing_theme =Themes::where("title",$title)->first();
//		  if($existing_theme){
//
//		  }
//		  else{
//			  $theme  = new Themes();
//			  $theme->title= $title;
//			  $theme->image_url =$image_url;
//			  $theme->theme_url=$theme_url;
//			  $theme->download_url=$download_url;
//			  $theme->category='latest';
//			  $theme->save();
//		  }
//		  return ['title'=>$title,'theme_url'=>$theme_url,'image_url'=>$image_url,'download_url'=>$download_url];
//	  });
//	  /*latest*/


    /* $crawler->filter('.theme .url')->each(function ($node) {
      $uri =$node->link();
	  dump($uri->getUri());
    });

	$crawler->filter('.theme-screenshot > img')->each(function ($node) {
	  $img =$node->getNode(0)->getAttribute('src');
	  dump($img);
    });
	$crawler->filter('.install-theme-preview')->each(function ($node) {
      $uri =$node->link();
	  dump($uri->getUri());
    });
	$crawler->filter('.entry-title')->each(function ($node) {
      $uri =$node->text();
	  dump($uri);
    });
	 */
  

    // Create DOM from URL or file
    // $html = file_get_html('https://www.facebook.com');

    // Find all images
   /*  foreach ($html->find('img') as $element) {
        echo $element->src . '<br>';
    }

    // Find all links
    foreach ($html->find('a') as $element) {
        echo $element->href . '<br>';
    } */
	 $themes = Themes::all();
    return view('scrape',compact('themes'));
  }
  
 
}
