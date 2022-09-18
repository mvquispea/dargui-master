<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;
  
    protected $table = 'categories';
    protected $dates = ['deleted_at'];

    public function articles()
    {
      return $this->hasMany(Article::class)->orderBy('created_at', 'desc');
    }

    public function videos()
    {
      return $this->hasMany(Video::class)->orderBy('created_at', 'desc');
    }

    public function infographics()
    {
      return $this->hasMany(Infographic::class)->orderBy('created_at', 'desc');
    }
}
