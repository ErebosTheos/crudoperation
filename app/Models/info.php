<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class info extends Model
{
    use HasFactory;

    protected $table='infos';
    protected $guarded=[];
    //protected $fillable = [
      //  'name', 'email', 'address', 'phone_no'
    // ];
}
