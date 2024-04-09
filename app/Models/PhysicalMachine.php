<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PhysicalMachine extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'physical_machines';
    public $guarded = ['id'];

    public function hacks()
    {
        return $this->belongsTo(Hack::class,'fk_hacks_id');
    }




    protected $dates = ['deleted_at'];
}
