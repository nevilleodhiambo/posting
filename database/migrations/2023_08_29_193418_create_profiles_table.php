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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->text('summary');
            $table->string('job_title');
            $table->string('company');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('degree');
            $table->string('major');
            $table->date('graduation_date');
            $table->string('skills');
            $table->string('project_name');
            $table->string('project_description');
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
