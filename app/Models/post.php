<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class post extends Model
{
    protected $fillable = (['title','slug','content','online','category_id']);

    public function category(){
        return $this->belongsTo('App\Models\category');
    }

    public function scopePublished($query)
    {
        return $query->where('online',true)->whereRaw('created_at < NOW()');
        // return $query->where('online',true)->where('created_at', '<', DB::raw('NOW()'));
    }

    public function scopeSearchByTitle($query, $title)
    {
        return $query->where('title', 'LIKE', '%' . $title . '%');
    }

    public function setSlugAttribute($value)
    {
        if(empty($value)){
            return $this->attributes['slug'] = Str::slug($this->title);

            #dd($this->attributes['slug']);
        }

        return $this->attributes['slug'] = $value;
        #dd($value);
    }

    public function getDates()
    {
        return ['created_at', 'updated_at','published_at'];
    }

    /*public function getTableAttribute($value)
    {
        return $value;
    }
    public function setTableAttribute($value)
    {
        $this->attributes['table'] = $value;
    }
    public function getRouteKey()
    {
        return parent::getRouteKey();
        return $this->slug;
    }*/


    use HasFactory;
}
