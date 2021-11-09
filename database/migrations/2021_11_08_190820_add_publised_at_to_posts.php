<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPublisedAtToPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $connector = new Illuminate\Database\Connectors\Connector();




        //$host = 'localhost:3306';
        //$db = 'laravel';
        //$pdo = $connector->createConnection("mysql:host=$host;dbname=$db;charset=UTF8",['username' => 'root', 'password' => 'root'],[]);
        //$grammar = \Illuminate\Support\Facades\DB::statement('alter table posts add published_at DateTime');



        //$c=new PDO("mysql:host=$host;dbname=laravel",'root','root');
        //$con = new \Illuminate\Database\Connection($pdo,'laravel');

        Schema::table('posts', function (Blueprint $table) {
            $table->timestamp('published_at')->default('1970-01-01 00:00:00');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('published_at');
        });
    }
}
