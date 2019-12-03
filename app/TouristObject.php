<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class TouristObject extends Model
{ 
    
    protected $table = 'objects';
    public $timestamps = false;
    
    use Enjoythetrip\Presenters\ObjectPresenter;
    
    public function city(){
        return $this->belongsTo('App\City');
    }
    
     public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function photos(){
        return $this->morphMany('App\Photo', 'photoable');
    }
    
    public function scopeOrdered($query){
        return $query->orderBy('name', 'asc');
    }
    
    public function users(){
        return $this->morphToMany('App\User', 'likeable');
    }
    
    public function address(){
        return $this->hasOne('App\Address', 'object_id');
    }
    
    public function rooms(){
        return $this->hasMany('App\Room', 'object_id');
    }
    
    public function comments(){
        return $this->morphMany('App\Comment', 'commentable');
    }
    
    public function articles(){
        return $this->hasMany('App\Article', 'object_id');
    }
    
     public function isLiked()
    {
        return $this->users()->where('user_id', Auth::user()->id)->exists();
    }
}
