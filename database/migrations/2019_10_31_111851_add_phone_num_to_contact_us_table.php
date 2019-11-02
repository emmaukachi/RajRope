<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPhoneNumToContactUsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::table('contact_us', function (Blueprint $table) {
				$table->string('phoneNum')->nullable()->after('message');
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::table('contact_us', function (Blueprint $table) {
				$table->dropColumn(['phoneNum']);
			});
	}
}
