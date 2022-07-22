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
        Schema::create('applyinforms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('father');
            $table->string('mother');
            $table->string('freedomFighter');
            $table->string('brithday');
            $table->string('age');
            $table->string('nid');
            $table->string('heigt');
            $table->string('weight');
            $table->string('postalAdd');
            $table->string('permanentAddress');
            $table->string('contactNo');
            $table->string('email');
            $table->string('homeDistrict');
            $table->string('HomeUpazila');
            $table->string('presentAddress');
            $table->string('nameExamSsc')->nullable;
            $table->string('passingyearSsc')->nullable;
            $table->string('subjectSsc')->nullable;
            $table->string('resultSsc')->nullable;
            $table->string('sscGpa')->nullable;
            $table->string('collageSsc')->nullable;
            $table->string('boardSsc')->nullable;
            $table->string('nameExamHsc')->nullable;
            $table->string('passingyearHsc')->nullable;
            $table->string('subjectHsc')->nullable;
            $table->string('resultHsc')->nullable;
            $table->string('hscGpa')->nullable;
            $table->string('collageHsc')->nullable;
            $table->string('boardHsc')->nullable;
            $table->string('nameExamGraduate')->nullable;
            $table->string('passingyearGraduate')->nullable;
            $table->string('subjectGraduate')->nullable;
            $table->string('resultGraduate')->nullable;
            $table->string('graduateGpa')->nullable;
            $table->string('collageGraduate')->nullable;
            $table->string('boardGraduate')->nullable;
            $table->string('nameofExamPostGraduate')->nullable;
            $table->string('passingyearPostGraduate')->nullable;
            $table->string('subjectPostGraduate')->nullable;
            $table->string('resultPostGraduate')->nullable;
            $table->string('postGpa')->nullable;
            $table->string('collagePostGraduate')->nullable;
            $table->string('boardPostGraduate')->nullable;
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
        Schema::dropIfExists('applyinforms');
    }
};
