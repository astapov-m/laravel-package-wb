<?php

namespace App\Models\Fbo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WbSale extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'wildberries_fbo_sales';
}
