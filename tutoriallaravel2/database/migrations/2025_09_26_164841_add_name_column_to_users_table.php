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
        Schema::table('users', function (Blueprint $table) {
            //

         // Ganti 'email' dengan kolom yang sudah ada
         $table->string('name')->nullable()->after('id');

        });
    }

    public function down(): void
{
    Schema::table('users', function (Blueprint $table) {
        if (Schema::hasColumn('users', 'name')) {
            $table->dropColumn('name');
        }
    });
}
};        

    

