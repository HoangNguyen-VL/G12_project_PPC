<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbl_property extends Model
{
    use HasFactory;
    protected $fillable = [
        'property_id',
        'Property_Code',
        'Property_Name',
        'Property_Type_ID',
        'Description',
        'District_ID',
        'Address',
        'Area',
        'Bed_Room',
        'Bath_Room',
        'Price',
        'Installment_Rate',
        'Avatar',
        'Album',
        'Property_Status_ID'
    ];
    protected $primaryKey = 'property_id';
}
