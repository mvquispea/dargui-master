<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory, SoftDeletes;
 
    protected $dates = ['deleted_at'];

    public function category()
    {
      return $this->belongsTo(Category::class);
    }

    public function scopeWithCategory($query)
    {
      return $query->select('articles.*', 'categories.name as category_name', 'categories.slug as category_slug')
                  ->join('categories', 'articles.category_id', '=', 'categories.id')
                  ->where('articles.category_id','<>', 5)
                  ->orderBy('articles.created_at', 'desc')
                  ->get();
    }

    public function scopeWithAuthor($query, $id)
    {
      return $query->select('articles.*', 'users.name as user_name', 'users.lastname as user_lastname', 'users.image as user_image')
                  ->join('users', 'articles.autor_id', '=', 'users.id')
                  ->where('articles.id', $id)
                  ->first();
    }

    public function scopeWithSearch($query, $search)
    {
      return $query->select('articles.*', 'categories.name as category_name', 'categories.slug as category_slug')
                  ->join('categories', 'articles.category_id', '=', 'categories.id')
                  ->where('articles.title', 'like', '%' . $search . '%')
                  ->orWhere('articles.bajada', 'like', '%' . $search . '%')
                  ->orWhere('articles.cita', 'like', '%' . $search . '%')
                  ->orderBy('articles.created_at', 'desc')
                  ->get();
    }
}
