<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('AffiliationTableSeeder');
	}

}


class AffiliationTableSeeder extends Seeder {

    public function run()
    {
        DB::table('affiliations')->delete();

        
        $pages = array(
            array(
                'faculty_flag' => true,
                'name'=>'วิศวกรรมศาสตร์',
            ),

            array(
                'faculty_flag' => true,
                'name'=>'แพทยศาสตร์',
            )
        );

        
        DB::table('affiliations')->insert($pages);
    }

}