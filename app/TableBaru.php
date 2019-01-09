<?php namespace App;

use SleepingOwl\Models\Interfaces\ModelWithImageFieldsInterface;
use SleepingOwl\Models\SleepingOwlModel;
use SleepingOwl\Models\Traits\ModelWithImageOrFileFieldsTrait;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Database\Eloquent\SoftDeletes;
use Image;

class TableBaru extends SleepingOwlModel
{

	use SoftDeletes;
	protected $dates = ['deleted_at'];
	protected $fillable = array('name');
	protected $table = 'table_baru';

	public static function getList()
	{
		$vals = [];
        foreach( TableBaru::orderBy( 'id', 'asc' )->get() as $item )
            $vals[$item->id] = "{$item->name}";

        return $vals;
	}

}
