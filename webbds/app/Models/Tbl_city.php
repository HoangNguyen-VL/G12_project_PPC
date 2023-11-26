<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbl_city extends Model
{
    use HasFactory;
    protected $fillable = [
        'City_ID',
        'City_Name'
    ];
}
