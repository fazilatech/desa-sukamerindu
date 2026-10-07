<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('visitor_logs', function (Blueprint $table) {

            $table->id();


            $table->foreignId('user_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->string('ip_address', 45);

            $table->text('user_agent')->nullable();

            $table->string('browser')->nullable();

            $table->string('platform')->nullable();

            $table->string('device')->nullable();

            $table->string('method', 10)->default('GET');

            $table->string('url');

            $table->text('referer')->nullable();

            $table->timestamp('visited_at')->useCurrent();

            $table->timestamps();


            $table->index('user_id');

            $table->index('ip_address');

            $table->index('visited_at');

            $table->index('browser');

            $table->index('platform');

            $table->index('device');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('visitor_logs');
    }
};
