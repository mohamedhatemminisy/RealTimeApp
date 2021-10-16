<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Question;
use App\Models\User;
use App\Models\Like;

class Replay extends Model
{
    use HasFactory;

    public function question(){
        $this->belongsTo(Question::class);
    }

    public function user(){
        $this->belongsTo(User::class);
    }

    public function like(){
        return $this->hasMany(Like::class);
    }
}
