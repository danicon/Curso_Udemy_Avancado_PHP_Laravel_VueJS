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
        //
        Schema::table('fornecedores', function (Blueprint $table) {
           $table->string('uf', 2);
           $table->string('email', 150);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('fornecedores', function (Blueprint $table) {
            //para remover colunas
            // $table->dropColumn('uf')
            // $table->dropColumn('email')
            $table->dropColumn(['uf', 'email']);
         });
    }
};
