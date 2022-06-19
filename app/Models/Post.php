<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['categories', 'user'];

    public function categories() {
        
        return $this->belongsTo(Categories::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

   public function scopeFilter($query) {
       return $query->where('title', 'like', '%'.request('search').'%');
   }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName(){
        return 'slug';
    }

}
