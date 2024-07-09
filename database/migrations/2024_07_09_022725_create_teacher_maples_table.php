<?php

use App\Traits\Migrations\HasForeign;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use HasForeign;

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('teacher_maples', function (Blueprint $table) {
            $table->id();
            $this->addForeignId($table, 'maple_id');
            $this->addForeignId($table, 'user_id');
            $this->addForeignId($table, 'school_year_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher_maples');
    }
};
