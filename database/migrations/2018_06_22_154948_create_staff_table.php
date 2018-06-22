<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->increments('id');
            $table->string('names', 200);
            $table->string('school', 80);
            $table->string('current_position', 80);
            $table->string('gender', 80);
            $table->string('civil_status', 80);
            $table->string('year_of_birth', 4);
            $table->string('national_id_number', 191);
            $table->string('phone', 30);
            $table->string('email', 200);
            $table->string('qualification_studied_name', 800);
            $table->string('institution_of_study', 800);
            $table->string('qualification_studied_level', 80);
            $table->string('work_status', 80);
            $table->string('staff_category', 80);
            $table->string('nationality', 80);
            $table->string('province', 200);
            $table->string('district', 200);
            $table->string('sector', 200);
            $table->string('cell', 200);
            $table->string('village', 200);
            $table->binary('photo');
            $table->date('date_of_recruitment');
            $table->string('has_attended_gender_inclusiveness_training',80);
            $table->string('has_attended_pedagogy_training',80);
            $table->string('work_status_details',80);
            $table->date('work_status_date');
            $table->string('working_schedule',80);
            $table->string('staff_department',80);
            $table->string('staff_specialization',191);
            $table->date('contract_start_date');
            $table->date('contract_end_date');
            $table->string('staff_accomodated',80);
            $table->string('bank_name',80);
            $table->string('bank_account_number',45);
            $table->string('rssb_number',45);
            $table->string('medical_insurance_scheme',45);
            $table->string('medical_card_number',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff');
    }
}
