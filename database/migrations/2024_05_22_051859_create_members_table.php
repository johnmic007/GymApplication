<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('parents_name');
            $table->foreignId('institution_id')->constrained('institution')->cascadeOnDelete();
            $table->enum('category', ['student', 'staff']);
            $table->string('department');
            $table->string('rollnumber_employeenumber')->unique();
            $table->date('date_of_birth');
            $table->string('mobile_number')->unique();
            $table->integer('age');
            $table->enum('gender', ['male', 'female', 'others']);
            $table->longText('medical_conditions')->nullable();
            $table->longText('address');
            $table->decimal('current_weight', 8, 2);
            $table->decimal('current_height', 8, 2);
            $table->foreignId('subscription_id')->constrained('subscription')->cascadeOnDelete();
            $table->date('first_payment_date')->default(DB::raw('CURRENT_DATE'));
            $table->date('membership_start_date')->default(DB::raw('CURRENT_DATE'));
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
