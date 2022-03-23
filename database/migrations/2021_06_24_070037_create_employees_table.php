<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            // $table->bigIncrements('id');
            $table->string('custom_id')->unique()->nullable();
            $table->unsignedBigInteger('blood_group_id');
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('designation_id');
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->string('name');
            $table->string('personal_email');
            $table->string('office_email')->nullable();
            $table->string('phone');
            $table->string('office_phone')->nullable();
            $table->string('gender');
            $table->text('present_address');
            $table->text('permanent_address');
            $table->string('profile_image');
            $table->date('dob');
            $table->string('emergency_contact_person');
            $table->string('emergency_contact_phone');
            $table->string('emergency_contact_address');
            $table->string('emergency_contact_relation');
            $table->string('nid_number');
            $table->string('nid_image');
            $table->string('certificate_image');
            $table->double('salary');
            $table->date('join_date');
            $table->date('quit_date')->nullable();
            $table->tinyInteger('is_current_employee')->default(1)->comment('1 for current employee 0 for not current employee');
            $table->tinyInteger('is_provision_period')->default(1)->comment('1 for provision period 0 for not provision period');
            $table->timestamps();
            $table->softDeletes();
            //password field is in add_password_employee
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
