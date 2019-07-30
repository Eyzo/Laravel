<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Posts extends Model
{
    protected $fillable = ['title', 'slug', 'content','visible','category_id'];


    public function tags() {
        return $this->belongsToMany('App\Tags');
    }

    public function category() {
        return $this->belongsTo('App\Category');
    }

    public function scopeVisible($query) {
        return $query->where('visible',true);
    }

    public function setTitleAttribute($value) {
        $this->attributes['title'] = strtoupper($value);
    }

    public function setSlugAttribute($value) {
        if (empty($value)) {
            $this->attributes['slug'] = Str::slug($this->title);
        }
    }

    public function getDates() {
        return ['created_at','updated_at','published_at'];
    }

}
