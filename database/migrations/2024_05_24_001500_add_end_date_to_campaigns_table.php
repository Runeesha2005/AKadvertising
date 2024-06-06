<?php
//
//use Illuminate\Database\Migrations\Migration;
//use Illuminate\Database\Schema\Blueprint;
//use Illuminate\Support\Facades\Schema;
//
//return new class extends Migration
//{
//    /**
//     * Run the migrations.
//     */
//    public function up(): void
//    {
//        Schema::table('campaigns', function (Blueprint $table) {
//            //
//
//            $table->dateTime('end_date')->nullable();
//        });
//    }
//
//    /**
//     * Reverse the migrations.
//     */
//    public function down(): void
//    {
//        Schema::table('campaigns', function (Blueprint $table) {
//            //
//
//            $table->dropColumn('end_date');
//        });
//    }
//};


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEndDateToCampaignsTable extends Migration
{
    public function up()
    {
        Schema::table('campaigns', function (Blueprint $table) {
            if (!Schema::hasColumn('campaigns', 'end_date')) {
                $table->dateTime('end_date')->nullable();
            }
        });
    }

    public function down()
    {
        Schema::table('campaigns', function (Blueprint $table) {
            if (Schema::hasColumn('campaigns', 'end_date')) {
                $table->dropColumn('end_date');
            }
        });
    }
}
