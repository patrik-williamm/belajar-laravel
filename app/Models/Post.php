<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'title',
    //     'slug',
    //     'excrept',
    //     'body',
    //     'categories_id',
    // ];

    protected $guarded = ['id'];

    public function categories() {
        
        return $this->belongsTo(Categories::class);
    }

    public function search(Request $request) {
        
    }
}
