<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbl_installmentcontract extends Model
{
    use HasFactory;
    protected $fillable = [
        'Installment_ID',
        'Installment_Contract_Code',
        'Customer_Name',
        'Year_of_Birth',
        'SSN',
        'Customer_Address',
        'Mobile',
        'Property_ID',
        'Date_of_Contract',
        'Installment_payment_method',
        'Payment_period',
        'Price',
        'Deposit',
        'Loan_Amount',
        'Taken',
        'Remain',
        'Status'
    ];
}
