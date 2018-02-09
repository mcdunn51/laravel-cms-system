<?php 

// the controller is where all the logic goes

namespace App\Http\Controllers;

use App\Post;

class pages_controller extends Controller {

	
	public function getWelcome() {
		$posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
		return view('pages.welcome')->withPosts($posts);
	}

	public function getAbout() {
		return view('pages.about');
	}


	
	public function getContact() {

		return view('pages.contact');
	}
}