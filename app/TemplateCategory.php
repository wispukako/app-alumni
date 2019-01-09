<?php namespace App;

use SleepingOwl\Models\SleepingOwlModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class TemplateCategory extends SleepingOwlModel
{
	use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = array('name');
	protected $table = 'template_category';


	public static function getList()
	{
		$vals = [];
        foreach( TemplateCategory::orderBy( 'id', 'asc' )->get() as $item )
            $vals[$item->id] = "{$item->name}";

        return $vals;
	}





}
