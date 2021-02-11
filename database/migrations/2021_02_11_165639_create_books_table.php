<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->char('name')->nullable()->default(null);
            $table->date('written_at')->nullable()->default(null);
            $table->char('image')->nullable()->default(null);
            $table->integer('discount')->nullable()->default(0);
            $table->integer('rating')->nullable()->default(0);
            $table->text('description')->nullable()->default(null);
            $table->enum('status', ['active', 'unconfirmed', 'inactive'])->default('unconfirmed');
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
        Schema::dropIfExists('books');
    }
}
