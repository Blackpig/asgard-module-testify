<?php namespace Modules\Testify\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TestifyDatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// Seed the Masks with a default Mask
		DB::table('testify__masks')->insert([
            'title' => 'Default',
            'mask' => '{"salutation","first_name","initialise_first_name","last_name","town","state"}',
            'is_default' => 1,
        ]);

        Model::reguard();
	}

}
