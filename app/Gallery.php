<?php namespace App;

use SleepingOwl\Models\Interfaces\ModelWithImageFieldsInterface;
use SleepingOwl\Models\SleepingOwlModel;
use SleepingOwl\Models\Traits\ModelWithImageOrFileFieldsTrait;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Database\Eloquent\SoftDeletes;
use Image;

class Gallery extends SleepingOwlModel implements ModelWithImageFieldsInterface
{

	use SoftDeletes;
	use ModelWithImageOrFileFieldsTrait;
  protected $dates = ['deleted_at'];
  protected $fillable = array('name','image','description');
	protected $table = 'galleries';

	public static function getList()
	{
		$vals = [];
        foreach( Gallery::orderBy( 'id', 'asc' )->get() as $item )
            $vals[$item->id] = "{$item->name}";

        return $vals;
	}

	public function galleryimages()
	{
	 return $this->hasMany('App\GalleryImage','gallery_id');
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



}
