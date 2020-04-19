<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incomes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('Cuota Comite Central');
            $table->double('amount', 8, 2);
            $table->enum('type_payment', ['efectivo', 'transferencia', 'cheque', 'deposito']);
            $table->foreignId('student_id')->constrained()->nullable();
            $table->foreignId('treasurer_id')->constrained()->nullable();
            $table->unsignedInteger('document');
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
        Schema::dropIfExists('incomes');
    }
}
