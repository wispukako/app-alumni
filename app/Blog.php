<?php namespace App;

use SleepingOwl\Models\Interfaces\ModelWithImageFieldsInterface;
use SleepingOwl\Models\SleepingOwlModel;
use SleepingOwl\Models\Traits\ModelWithImageOrFileFieldsTrait;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Database\Eloquent\SoftDeletes;
use AdminAuth;
use Image;
use Storage;

class Blog extends SleepingOwlModel implements ModelWithImageFieldsInterface{

	use SoftDeletes;
	use ModelWithImageOrFileFieldsTrait;

	protected $dates = ['deleted_at'];

	protected $fillable = array('title','description','status','author','image','blog_category_id','meta_title','meta_description','meta_keyword',
	'review_cache','viewer_cache','rating_cache_count','rating_cache_sum','rating_cache',
	'image_s3','image_s3_thumb','image_s3_small');
	protected $table = 'blogs';

	public function setTitleAttribute($title)
	{
		$this->attributes['title'] = $title;
		$this->attributes['slug'] = str_slug($this->attributes['title']);
		$this->attributes['user_id'] = \AdminAuth::user()->id;
	}

	public function admins()
	{
		return $this->belongsTo('App\Alumni','user_id');
	}

	public function category()
	{
		return $this->belongsTo('App\BlogCategory','blog_category_id');
	}

	public function user()
	{
		return $this->belongsTo('App\User','user_id');
	}

	/**
	*  a deals has many commnets
	*
	* @return object
	*/
	public function comments()
	{
		return $this->hasMany('App\BlogComment');
	}

	/**
	* a deals has many commnets
	* this query give all off the parent commnet of a deal
	*
	* @return object
	*/
	public function nestedComments()
	{
		return $this->hasMany('App\BlogComment')->where('comment_parent', null);
	}

	public function getImageFields()
	{
			return [
					'image' => 'monuments/',
					'photo' => '',
					'other' => ['other_images/', function($directory, $originalName, $extension)
					{
							return $originalName;
					}]
			];
	}


	/*
	 * This is only for demo application to disable file uploads
	 */
	 public function setImage($field, $image)
	 {
			 parent::setImage($field, $image);
			 $file = $this->$field;
			 if ( ! $file->exists()) return;
			 $path = $file->getFullPath();

			 // you can use Intervention Image package features to change uploaded image
			 Image::make($path)->save();
	 }


	public function setAuthorAttribute($author){
		$this->attributes['author'] = AdminAuth::user()->username ;
	}



}
