<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Video extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];

    public function category()
    {
      return $this->belongsTo(Category::class);
    }

    public function scopeWithCategory($query)
    {
      return $query->select('videos.*', 'categories.name as category_name', 'categories.slug as category_slug')
                  ->join('categories', 'videos.category_id', '=', 'categories.id')
                  ->orderBy('videos.created_at', 'desc') // TODO luego usar solo el orden
                  ->orderBy('videos.orden','desc')
                  ->get();
    }

}
