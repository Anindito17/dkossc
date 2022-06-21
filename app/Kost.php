<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kost extends Model
{
    protected $fillable=['foto','nama','kecamatan','jenis','mandi','listrik','wifi','harga','real_harga'];
}
