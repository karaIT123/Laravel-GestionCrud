<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tag extends Model
{

    public $fillable = ['name'];

    public function posts()
    {
        return $this->belongsToMany('App\models\posts');
    }
    use HasFactory;
}
