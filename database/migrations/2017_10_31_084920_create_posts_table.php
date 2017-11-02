<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table-> increments('id');
            $table-> timestamps();
            $table-> string('title');
            $table-> text('content');
            $table -> string('title',500)-> change();
            $table -> boolean('is_feature')-> default(false)-> after('content');
            $post=new\App\Post();
            $post‐>title='testtitle';
            $post‐>content='testcontent';
            $post‐>save();   
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
