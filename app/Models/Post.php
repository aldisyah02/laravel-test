<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory;

    // $fillable adalah variable yang objectnya diizinkan untuk diinput dengan banyak karakter, sisanya tidak boleh
    // protected $fillable = [
    //     'title',
    //     'excerpt',
    //     'body',
    // ];

    // $guarded adalah variable yang objectnya dijaga untuk diinput dengan banyak karakter, sisanya boleh diinput
    protected $guarded = [
        'id',
    ];
    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters){

        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('title', 'LIKE', '%' . $search . '%')
                        ->orWhere('body', 'LIKE', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function($query, $category) {
            return $query->whereHas('category', function($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        $query->when($filters['author'] ?? false, function($query, $author) {
            return $query->whereHas('author', function($query) use ($author) {
                $query->where('username', $author);
            });
        });
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}