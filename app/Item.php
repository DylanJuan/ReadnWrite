<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['stationary_id', 'name', 'stock', 'price', 'description', 'image'];
    
    public function stationary(){
        return $this->HasOne('App\Stationary', 'id', 'stationary_id');
    }
}
