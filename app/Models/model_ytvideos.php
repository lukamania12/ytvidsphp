<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class model_ytvideos extends Model
{
    use HasFactory;

    protected $table = 'model_ytvideos';

    protected $fillable = [
        "Video Name",
        "Video URL",
        "Video Description",
    ];
}
