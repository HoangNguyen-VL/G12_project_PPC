<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbl_propertystatus extends Model
{
    use HasFactory;
    protected $fillable = [
        'Status_ID',
        'Property_Status_Name'

    ];
}
