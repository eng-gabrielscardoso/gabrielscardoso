<?php

use App\Enums\CauseType;
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
        Schema::create('volunteerings', function (Blueprint $table) {
            $table->id();
            $table->string('organisation');
            $table->string('role');
            $table->enum('cause', CauseType::values());
            $table->text('description');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('volunteerings');
    }
};
