<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testUsersResponse extends Model
{
    use HasFactory;

    protected $primaryKey = "user_responses_id";
    
    protected $fillable = [
        'user_id',
        'questions_name_id',
        'questions_descriptions_id',
        'lyrics',
    ];
}
