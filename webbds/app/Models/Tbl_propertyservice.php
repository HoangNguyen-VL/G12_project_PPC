<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbl_propertyservice extends Model
{
    use HasFactory;
    protected $fillable = [
        'Pro_Service_ID',
        'Service_ID',
        'Property_ID'

    ];
}
