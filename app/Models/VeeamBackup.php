<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VeeamBackup extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $table = "veeam_backups";
    protected $guarded = ['id'];

    protected $dates = ['deleted_at'];

    public function virtual_machines(){
        return $this->belongsTo(VirtualMachine::class, 'fk_virtual_machines_id');
    }
    
}
