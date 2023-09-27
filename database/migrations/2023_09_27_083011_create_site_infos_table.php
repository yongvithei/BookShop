<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('site_infos', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('name')->nullable();
            $table->string('support_phone')->nullable();
            $table->string('email')->nullable();
            $table->text('address', 555)->nullable();
            $table->string('information', 555)->nullable();
            $table->string('map', 1000)->nullable();
            $table->string('facebook')->nullable();
            $table->string('telegram')->nullable();
            $table->timestamps();
        });
        DB::table('site_infos')->insert([
            [
                'image' => 'null',
                'name' => 'Ponleu Vichea',
                'support_phone' => '012345678',
                'email' => 'ponleuvichea@support.com',
                'address' => 'No. 161-162, St. 2, Prek Mohatep Village, Sangkat Svay Por, Battambang City, Battambang, Cambodia',
                'information' => 'Stationery, Educational Stores & Supplies in Battambang - Cambodia',
                'facebook' => 'm.facebook.com/ponleuvichea',
                'telegram' => 'https://t.me/Vithei',
                'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3885.9426169295493!2d103.19627957427005!3d13.10282178722476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310549db4dd83f63%3A0x44eb584304a355fd!2z4Z6U4Z6O4Z-S4Z6O4Z624Z6C4Z624Z6aIOGeluGek-GfkuGem-GeuuGenOGet-Geh-GfkuGeh-GetiAtIFBvbmxldSBWaWNoZWEgQm9va3Nob3A!5e0!3m2!1sen!2ssg!4v1695813273080!5m2!1sen!2ssg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_infos');
    }
};
