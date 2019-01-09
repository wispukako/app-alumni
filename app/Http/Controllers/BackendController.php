<?php namespace App\Http\Controllers;

use SleepingOwl\Admin\Controllers\AdminController;
use View;
use DB;
use Redirect;
use Admin;
use App;
use Request;
use DateTime;
use DateTimeZone;

class BackendController extends AdminController {

	public function admin_blog_tag($id){
		return Redirect::to('admin/blog_tags?blog_id='.$id);
	}

}
