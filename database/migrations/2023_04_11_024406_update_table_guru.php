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
        Schema::table('gurus', function($table){
            $table->string('nip')->change();
            $table->renameColumn('Nip','nip');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('gurus', function($table){
            $table->integer('nip')->change();
            $table->renameColumn('nip','Nip');
        });
    }
};
