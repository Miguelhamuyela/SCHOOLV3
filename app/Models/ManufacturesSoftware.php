<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ManufacturesSoftware extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "manufactures_softwares";

    protected $guarded = ['id'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function payments(){
        return $this->belongsTo(Payment::class, 'fk_Payments_id', 'id');
    }

    public function scheldules(){
        return $this->belongsTo(Scheldule::class, 'fk_Scheldules_id', 'id');
    }

    public function clients(){
        return $this->belongsTo(Client::class, 'fk_Clients_id', 'id');
    }


}
