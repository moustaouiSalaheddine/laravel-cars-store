<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    /**
     * Product can belong to one category
     * 
     */
    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
