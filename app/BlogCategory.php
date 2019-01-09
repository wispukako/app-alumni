<?php namespace App;

use SleepingOwl\Models\SleepingOwlModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogCategory extends SleepingOwlModel
{
	use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = array('name','category_type');
	protected $table = 'blog_category';


	public function blogs()
		{
		 return $this->hasMany('App\Blog','blog_category_id');
		}

	public static function getList()
	{
		$vals = [];
        foreach( BlogCategory::orderBy( 'id', 'asc' )->get() as $item )
            $vals[$item->id] = "{$item->name}";
        return $vals;
	}


	public function setNameAttribute($name)
    {
        $this->attributes['name'] = $name;
        $this->attributes['slug'] = str_slug($this->attributes['name']);
    }


}
