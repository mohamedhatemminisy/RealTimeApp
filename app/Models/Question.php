<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Replay;
use App\Models\Category;

class Question extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function replays(){
        return $this->hasMany(Replay::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
