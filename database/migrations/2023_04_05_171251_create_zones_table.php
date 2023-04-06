<?php

use App\Models\Zone;
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
        Schema::create('zones', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->integer('price_per_hour');

            $table->timestamps();
        });

        Zone::create(['name' => 'Zona Verde', 'price_per_hour' => '100']);
        Zone::create(['name' => 'Zona Amarilla', 'price_per_hour' => '200']);
        Zone::create(['name' => 'Zona Roja', 'price_per_hour' => '300']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zones');
    }
};
