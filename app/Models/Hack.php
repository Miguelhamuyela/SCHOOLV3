<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hack extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $table = "hacks";
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];

}
