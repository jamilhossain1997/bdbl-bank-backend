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
        Schema::create('applyexprences', function (Blueprint $table) {
            $table->id();
            $table->string('apply_id')->nullable;
            $table->string('FromDate')->nullable;
            $table->string('To_Date')->nullable;
            $table->string('Designation')->nullable;
            $table->string('Organization_Type')->nullable;
            $table->string('Organization')->nullable;
            $table->string('Responsibilities')->nullable;
            $table->string('Nature_of_Job')->nullable;
            $table->string('FromDate1')->nullable;
            $table->string('To_Date1')->nullable;
            $table->string('Designation1')->nullable;
            $table->string('Organization_Type1')->nullable;
            $table->string('Organization1')->nullable;
            $table->string('Responsibilities1')->nullable;
            $table->string('Nature_of_Job1')->nullable;
            $table->string('FromDate2')->nullable;
            $table->string('To_Date2')->nullable;
            $table->string('Designation2')->nullable;
            $table->string('Organization_Type2')->nullable;
            $table->string('Organization2')->nullable;
            $table->string('Responsibilities2')->nullable;
            $table->string('Nature_of_Job2')->nullable;
            $table->string('FromDate3')->nullable;
            $table->string('To_Date3')->nullable;
            $table->string('Designation3')->nullable;
            $table->string('Organization_Type3')->nullable;
            $table->string('Organization3')->nullable;
            $table->string('Responsibilities3')->nullable;
            $table->string('Nature_of_Job3')->nullable;
            $table->string('Name_of_organizations')->nullable;
            $table->string('Field_of_Experience')->nullable;
            $table->string('Duration')->nullable;
            $table->string('Name_of_organizations1')->nullable;
            $table->string('Field_of_Experience1')->nullable;
            $table->string('Duration1')->nullable;
            $table->string('Name_of_organizations2')->nullable;
            $table->string('Field_of_Experience2')->nullable;
            $table->string('Duration2')->nullable;
            $table->string('photo')->nullable;
            $table->string('lastcerificate')->nullable;
            $table->string('nidCertificate')->nullable;
            $table->string('status');
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
        Schema::dropIfExists('applyexprences');
    }
};
