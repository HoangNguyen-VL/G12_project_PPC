<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbl_installmentcontract', function (Blueprint $table) {
            $table->id('Installment_ID');
            $table->string('Installment_Contract_Code')->nullable();
            $table->string('Customer_Name')->nullable();
            $table->timestamp('Year_of_Birth')->nullable();
            $table->string('SSN')->nullable();
            $table->longText('Customer_Address')->nullable();
            $table->string('Mobile')->nullable();
            $table->foreignIdFor(\App\Models\Tbl_property::class);
            $table->timestamp('Date_of_Contract')->nullable();
            $table->timestamp('Installment_payment_method')->nullable();
            $table->timestamp('Payment_period')->nullable();
            $table->integer('Price')->nullable();
            $table->integer('Deposit')->nullable();
            $table->integer('Loan_Amount')->nullable();
            $table->integer('Taken')->nullable();
            $table->integer('Remain')->nullable();
            $table->integer('Status')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_installmentcontract');
    }
};
