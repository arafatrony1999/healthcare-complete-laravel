<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class services extends Model
{
    public $table='service';
    public $primaryKey='service_id';
    public $incrementing=true;
    public $keyType='int';
    public $timestamps=false;
}
