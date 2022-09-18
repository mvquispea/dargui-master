<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Infographic extends Model
{
  use HasFactory, SoftDeletes;

  protected $dates = ['deleted_at'];

  public function category()
  {
    return $this->belongsTo(Category::class);
  }

  public function scopeWithAuthor($query, $id)
  {
    return $query->select('infographics.*', 'users.name as user_name', 'users.lastname as user_lastname', 'users.image as user_image')
                ->join('users', 'infographics.autor_id', '=', 'users.id')
                ->where('infographics.id', $id)
                ->first();
  }

  public function scopeWithCategories($query)
  {
    return $query->select('infographics.*','categories.name as category_name')
                  ->leftJoin('categories', 'infographics.category_id','=','categories.id')
                  ->orderBy('created_at','desc')
                  ->orderBy('orden','desc')
                  ->get();
  }

}
