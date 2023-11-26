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
        Schema::create('tbl_properties', function (Blueprint $table) {
            $table->id('Property_ID');
            $table->string('Property_Code')->nullable();
            $table->string('Property_Name')->nullable();
            $table->foreignIdFor(\App\Models\Tbl_propertytype::class);
            $table->longText('Description')->nullable();
            $table->foreignIdFor(\App\Models\Tbl_district::class);
            $table->longText('Address')->nullable();
            $table->integer('Area')->nullable();
            $table->integer('Bed_Room')->nullable();
            $table->integer('Bath_Room')->nullable();
            $table->integer('Price')->nullable();
            $table->string('Installment_Rate')->nullable();
            $table->longText('Avatar')->nullable();
            $table->longText('Album')->nullable();
            $table->foreignIdFor(\App\Models\Tbl_propertystatus::class);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_properties');
    }
};
