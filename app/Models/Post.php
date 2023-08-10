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
        'userid',
        'image_path'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'userid');
    }
 }
