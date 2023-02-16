<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use App\Models\User;
use App\Models\Choice;
use App\Models\Solve;
use App\Models\QuestionLike;
use App\Models\QuestionComment;

class Question extends Model
{
    use SoftDeletes;

    protected $guarded = [
        "id"
    ];

    Public function user()
    {
        return $this->belongsTo(User::class);
    }
    Public function choices()
    {
        return $this->hasMany(Choice::class);
    }
    Public function solves()
    {
        return $this->hasMany(Solve::class);
    }
    Public function question_likes()
    {
        return $this->hasMany(QuestionLike::class);
    }
    Public function question_comments()
    {
        return $this->hasMany(QuestionComment::class);
    }
    Public function getQuestionLikeCountAttribute()
    {
        return $this->question_likes->where('is_active',1)->count();
    }


}
