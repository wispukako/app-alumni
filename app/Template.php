<?php namespace App;

use SleepingOwl\Models\Interfaces\ModelWithImageFieldsInterface;
use SleepingOwl\Models\SleepingOwlModel;
use SleepingOwl\Models\Traits\ModelWithImageOrFileFieldsTrait;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Image;

class Template extends SleepingOwlModel implements ModelWithImageFieldsInterface
{

	protected $table = 'template';

    protected $fillable = array('title','image','opsi','template_category_id','textAddon1','textAddon2','date','description');

    use ModelWithImageOrFileFieldsTrait;

		public function template_category()
		{
				return $this->belongsTo('App\TemplateCategory','template_category_id');
		}

		public function getDates()
		{
		    return array_merge(parent::getDates(), ['date']);
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
