<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('joblists', function (Blueprint $table) {
            $table->id();
            $table->string('JobTitle');
            $table->string('Category')->nullable();
            $table->string('CloseingDate')->nullable();
            $table->string('ExperienceRequirements');
            $table->string('OtherExperienceRequirements');
            $table->string('EducationalQualification');
            $table->string('OtherRequirements');
            $table->string('innovative');
            $table->string('OnlyOneApply');
            $table->string('Age');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('joblists');
    }
};
