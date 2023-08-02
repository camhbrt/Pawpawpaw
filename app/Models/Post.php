<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'postdescription',
        'posttitle',
        
    ];
//     public function user():HasOne{
//         return $this->hasOne(User::class);
//     }
 }
