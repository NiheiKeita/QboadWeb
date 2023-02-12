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
}
