<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use View;
use Admin;
use AdminAuth;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Alumni;
use App\Angkatan;
use App\Blog;
use App\Gallery;
use App\SekolahSd;
use App\SekolahSmp;
use App\SekolahSma;

class DashboardController extends Controller
{
	public function getIndex()
	{
		$data['total_alumni'] 	= Alumni::count();
		$data['total_angkatan'] = Angkatan::count();
		$data['total_blog'] 		= Blog::count();
		$data['total_gallery'] 	= Gallery::count();
		$data['user'] 	= AdminAuth::user();

		return View::make('dashboard',$data);
	}

	public function listalumni(Request $request)
	{

		$alumni = Alumni::where('id','!=','');

		if($request->input('name')!=''){
			$alumni->where('name','like','%'.$request->input('name').'%');
		}
		if($request->input('angkatan')!=''){
			$alumni->where('angkatan_id',$request->input('angkatan'));
		}
		if($request->input('jurusan')!=''){
			$alumni->where('jurusan',$request->input('jurusan'));
		}
		if($request->input('sekolah_sd')!=''){
			$alumni->where('sekolah_sd_id',$request->input('sekolah_sd'));
		}
		if($request->input('sekolah_smp')!=''){
			$alumni->where('sekolah_smp_id',$request->input('sekolah_smp'));
		}
		if($request->input('sekolah_sma')!=''){
			$alumni->where('sekolah_sma_id',$request->input('sekolah_sma'));
		}

		$data['alumnis'] 	= $alumni->get();

		$data['sekolah_sds'] = SekolahSd::get();
		$data['sekolah_smps'] = SekolahSmp::get();
		$data['sekolah_smas'] = SekolahSma::get();
		$data['angkatans'] = Angkatan::get();
		$data['jurusans'] 		= array('IPA' => 'IPA', 'IPS' => 'IPS', 'Bahasa' => 'Bahasa');
		$data['user'] 	= AdminAuth::user();

		$content =  View::make('listalumni',$data);

		return Admin::view($content);
	}

}
