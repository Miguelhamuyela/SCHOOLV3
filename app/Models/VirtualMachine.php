<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VirtualMachine extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $table = "virtual_machines";
    protected $guarded = ['id'];

    public function physical_machines()
    {
        return $this->belongsTo(Screening::class, 'fk_physical_machines_id');
    }

    protected $dates = ['deleted_at'];
}
