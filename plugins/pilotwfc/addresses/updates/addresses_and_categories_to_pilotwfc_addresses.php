<?php namespace PilotWFC\Addresses\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateAddressesTables extends Migration
{
    public function up()
    {
        // Таблица категорий
        Schema::create('pilotwfc_addresses_categories', function ($table) {
            $table->increments('id');
            $table->string('name'); // Название категории
            $table->string('slug')->unique(); // Уникальный идентификатор
            $table->timestamps();
        });

        // Таблица адресов
        Schema::create('pilotwfc_addresses', function ($table) {
            $table->increments('id');
            $table->string('title'); // Название
            $table->text('description')->nullable(); // Описание
            $table->string('type'); // Тип (например, "Тир", "Стрельбище")
            $table->string('phone_main')->nullable(); // Основной телефон
            $table->string('phone_mobile')->nullable(); // Мобильный телефон
            $table->string('email')->nullable(); // Email
            $table->string('city')->nullable(); // Город
            $table->string('address')->nullable(); // Адрес
            $table->decimal('latitude', 10, 8)->nullable(); // Широта
            $table->decimal('longitude', 11, 8)->nullable(); // Долгота
            $table->integer('category_id')->unsigned()->nullable(); // ID категории
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('pilotwfc_addresses_categories')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pilotwfc_addresses');
        Schema::dropIfExists('pilotwfc_addresses_categories');
    }
}
