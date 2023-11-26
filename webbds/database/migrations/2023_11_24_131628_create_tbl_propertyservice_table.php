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
        Schema::create('tbl_propertyservices', function (Blueprint $table) {
            $table->id('Pro_Service_ID');
            $table->foreignIdFor(\App\Models\Tbl_service::class);
            $table->foreignIdFor(\App\Models\Tbl_property::class);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_propertyservices');
    }
};
