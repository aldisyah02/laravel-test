<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }
}