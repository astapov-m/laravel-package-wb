<?php

namespace Astapovm\Wb\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WbOrder extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'wildberries_fbo_orders';
}
