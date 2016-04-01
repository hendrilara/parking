<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Image extends Model
{
	protected $table ='image';
    protected $fillable = ['picture'];

    protected $hidden = ['created_at', 'updated_at', 'name'];

    public function location()
    {
    	return $this->hasMany('App\Location', 'image_id');
    }

    public function scopeImage($query, $id)
    {
    	
    }
}
