<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('title');
            $table->float("price");
            $table->timestamps();
        });

        DB::table('menus')->insert(
            array(
                'name' => 'beer',
                'title' => 'Beer',
                'price' => 3.99
            )
        );
        DB::table('menus')->insert(
            array(
                'name' => 'red_wine',
                'title'=> 'Red Wine',
                'price' => 4.99
            )
        );
        DB::table('menus')->insert(
            array(
                'name' => 'white_wine',
                'title'=> 'White wine',
                'price' => 4.99
            )
        );

        DB::table('menus')->insert(
            array(
                'name' => 'whiskey',
                'title'=> 'Whiskey',
                'price' => 4.99
            )
        );


        DB::table('menus')->insert(
            array(
                'name' => 'vodka',
                'title'=> 'Vodka',
                'price' => 4.99
            )
        );
        DB::table('menus')->insert(
            array(
                'name' => 'rum',
                'title'=> 'Rum',
                'price' => 4.99
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
