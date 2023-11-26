<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbl_propertytype extends Model
{
    use HasFactory;
    protected $fillable = [
        'ID',
        'Property_Type_Name',
        'Property_Amount'

    ];
}
