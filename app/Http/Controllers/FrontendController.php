<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use View;
use AdminAuth;
use App\Alumni;
use App\Angkatan;
use App\Blog;
use App\Gallery;

class FrontendController extends Controller
{
	public function index()
	{
		$data['posts'] 	= Blog::orderBy('created_at', 'desc')->paginate(10);

		return View::make('front.home',$data);
	}

	public function singlePost($id)
	{

		$data['post'] 	= Blog::find($id);

		return View::make('front.post',$data);

	}

	public function gallery()
	{
		$data['galleries'] 	= Gallery::orderBy('created_at', 'desc')->paginate(10);

		return View::make('front.galleries',$data);
	}

	public function galleryDetail($id)
	{

		$data['gallery'] 	= Gallery::find($id);

		return View::make('front.gallery',$data);

	}


}
