<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbl_district extends Model
{
    use HasFactory;
    protected $fillable = [
        'District_ID',
        'City_ID',
        'District_Name'
    ];
}
