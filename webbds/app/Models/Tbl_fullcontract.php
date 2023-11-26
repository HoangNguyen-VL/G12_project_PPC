<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbl_fullcontract extends Model
{
    use HasFactory;

    protected $primaryKey = 'Contract_ID';
    protected $fillable = [
        'Contract_ID',
        'Full_Contract_Code',
        'Customer_Name',
        'Year_of_Birth',
        'SSN',
        'Customer_Address',
        'Mobile',
        'property_id',
        'Date_of_Contract',
        'Price',
        'Deposit',
        'Remain',
        'Status'
    ];
    public function property()
    {
        return $this->belongsTo(Tbl_property::class, 'property_id', 'property_id');
    }
}
