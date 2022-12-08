<?php

namespace App\Models\Fbo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WbStock extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'wildberries_fbo_stocks';
}
