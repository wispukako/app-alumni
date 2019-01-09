<?php namespace App;

use SleepingOwl\Models\Interfaces\ModelWithImageFieldsInterface;
use SleepingOwl\Models\SleepingOwlModel;
use SleepingOwl\Models\Traits\ModelWithImageOrFileFieldsTrait;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Database\Eloquent\SoftDeletes;
use Image;

class SekolahSma extends SleepingOwlModel
{

	use SoftDeletes;
  protected $dates = ['deleted_at'];
  protected $fillable = array('name','description');
	protected $table = 'sekolah_sma';

	public static function getList()
	{
		$vals = [];
        foreach( SekolahSma::orderBy( 'id', 'asc' )->get() as $item )
            $vals[$item->id] = "{$item->name}";

        return $vals;
	}

	public function alumnis()
	{
	 return $this->hasMany('App\Alumni','sekolah_sma_id');
	}

}
