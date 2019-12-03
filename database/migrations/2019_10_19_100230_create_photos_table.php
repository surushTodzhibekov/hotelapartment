<?php
/*
|--------------------------------------------------------------------------
| database/migrations/2018_01_28_142856_create_photos_table.php *** Copyright netprogs.pl | available only at Udemy.com | further distribution is prohibited  ***
|--------------------------------------------------------------------------
*/

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->string('photoable_type'); /* Lecture 8 */
            $table->bigInteger('photoable_id'); /* Lecture 8 */
            $table->string('path'); /* Lecture 8 */
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photos');
    }
}

