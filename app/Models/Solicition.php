<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Solicition extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'solicitions';
    public $guarded = ['id'];
    protected $dates = ['deleted_at'];
}
