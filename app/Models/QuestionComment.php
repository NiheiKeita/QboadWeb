<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Comment;
use App\Models\Question;

class QuestionComment extends Model
{
    use SoftDeletes;
    protected $table = 'question_comment';

    protected $guarded = [
        "id"
    ];

    Public function comment()
    {
        return $this->belongsTo(Comment::class);
    }
    Public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
