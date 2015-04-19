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
        $this->call('UserTableSeeder');
	}

}


class AffiliationTableSeeder extends Seeder {

    public function run()
    {
        DB::table('affiliations')->delete();

        
        $pages = array(
            array('faculty_flag'=>true,'name'=>'สำนักบริหารวิชาการ',),
            array('faculty_flag'=>true,'name'=>'บัณฑิตวิทยาลัย',),
            array('faculty_flag'=>true,'name'=>'คณะวิศวกรรมศาสตร์',),
            array('faculty_flag'=>true,'name'=>'คณะอักษรศาสตร์',),
            array('faculty_flag'=>true,'name'=>'คณะวิทยาศาสตร์',),
            array('faculty_flag'=>true,'name'=>'คณะรัฐศาสตร์',),
            array('faculty_flag'=>true,'name'=>'คณะสถาปัตยกรรมศาสตร์',),
            array('faculty_flag'=>true,'name'=>'คณะพาณิชยศาสตร์และการบัญชี',),
            array('faculty_flag'=>true,'name'=>'คณะครุศาสตร์',),
            array('faculty_flag'=>true,'name'=>'คณะนิเทศศาสตร์',),
            array('faculty_flag'=>true,'name'=>'คณะเศรษฐศาสตร์',),
            array('faculty_flag'=>true,'name'=>'สำนักบริหารยุทธศาสตร์และการงบประมาณ',),
            array('faculty_flag'=>true,'name'=>'คณะแพทยศาสตร์',),
            array('faculty_flag'=>true,'name'=>'คณะสัตวแพทยศาสตร์',),
            array('faculty_flag'=>true,'name'=>'คณะทันตแพทยศาสตร์',),
            array('faculty_flag'=>true,'name'=>'คณะเภสัชศาสตร์',),
            array('faculty_flag'=>true,'name'=>'คณะนิติศาสตร์',),
            array('faculty_flag'=>true,'name'=>'คณะศิลปกรรมศาสตร์',),
            array('faculty_flag'=>true,'name'=>'คณะพยาบาลศาสตร์',),
            array('faculty_flag'=>true,'name'=>'คณะสหเวชศาสตร์',),
            array('faculty_flag'=>true,'name'=>'คณะจิตวิทยา',),
            array('faculty_flag'=>true,'name'=>'คณะวิทยาศาสตร์การกีฬา',),
            array('faculty_flag'=>true,'name'=>'สำนักวิชาทรัพยากรการเกษตร',),
            array('faculty_flag'=>true,'name'=>'สำนักบริหารกิจการนิสิต',),
            array('faculty_flag'=>true,'name'=>'วิทยาลัยวิทยาศาสตร์สาธารณสุข',),
            array('faculty_flag'=>true,'name'=>'หน่วยงานภายนอกจุฬาฯ',),
        );

        
        DB::table('affiliations')->insert($pages);
    }

}



class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        
        $pages = array(
                array('username'=>'santacos',
                'email'=>'san@san.com',
                'password'=> Hash::make('123456'),
                'firstname'=>'cos',
                'lastname'=>'yeah',
                'nickname'=>'coscos',
                'sex'=>'f',
                'birthdate'=>date('2015-03-15'),
                'tel'=>'025555555',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                ),
                array('username'=>'santayeah0',
'email'=>'san0@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah0',
'lastname'=>'yeah',
'nickname'=>'yeahyeah0',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah1',
'email'=>'san1@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah1',
'lastname'=>'yeah',
'nickname'=>'yeahyeah1',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah2',
'email'=>'san2@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah2',
'lastname'=>'yeah',
'nickname'=>'yeahyeah2',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah3',
'email'=>'san3@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah3',
'lastname'=>'yeah',
'nickname'=>'yeahyeah3',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah4',
'email'=>'san4@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah4',
'lastname'=>'yeah',
'nickname'=>'yeahyeah4',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah5',
'email'=>'san5@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah5',
'lastname'=>'yeah',
'nickname'=>'yeahyeah5',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah6',
'email'=>'san6@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah6',
'lastname'=>'yeah',
'nickname'=>'yeahyeah6',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah7',
'email'=>'san7@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah7',
'lastname'=>'yeah',
'nickname'=>'yeahyeah7',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah8',
'email'=>'san8@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah8',
'lastname'=>'yeah',
'nickname'=>'yeahyeah8',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah9',
'email'=>'san9@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah9',
'lastname'=>'yeah',
'nickname'=>'yeahyeah9',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah10',
'email'=>'san10@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah10',
'lastname'=>'yeah',
'nickname'=>'yeahyeah10',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah11',
'email'=>'san11@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah11',
'lastname'=>'yeah',
'nickname'=>'yeahyeah11',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah12',
'email'=>'san12@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah12',
'lastname'=>'yeah',
'nickname'=>'yeahyeah12',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah13',
'email'=>'san13@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah13',
'lastname'=>'yeah',
'nickname'=>'yeahyeah13',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah14',
'email'=>'san14@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah14',
'lastname'=>'yeah',
'nickname'=>'yeahyeah14',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah15',
'email'=>'san15@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah15',
'lastname'=>'yeah',
'nickname'=>'yeahyeah15',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah16',
'email'=>'san16@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah16',
'lastname'=>'yeah',
'nickname'=>'yeahyeah16',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah17',
'email'=>'san17@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah17',
'lastname'=>'yeah',
'nickname'=>'yeahyeah17',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah18',
'email'=>'san18@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah18',
'lastname'=>'yeah',
'nickname'=>'yeahyeah18',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah19',
'email'=>'san19@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah19',
'lastname'=>'yeah',
'nickname'=>'yeahyeah19',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah20',
'email'=>'san20@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah20',
'lastname'=>'yeah',
'nickname'=>'yeahyeah20',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah21',
'email'=>'san21@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah21',
'lastname'=>'yeah',
'nickname'=>'yeahyeah21',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah22',
'email'=>'san22@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah22',
'lastname'=>'yeah',
'nickname'=>'yeahyeah22',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah23',
'email'=>'san23@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah23',
'lastname'=>'yeah',
'nickname'=>'yeahyeah23',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah24',
'email'=>'san24@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah24',
'lastname'=>'yeah',
'nickname'=>'yeahyeah24',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah25',
'email'=>'san25@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah25',
'lastname'=>'yeah',
'nickname'=>'yeahyeah25',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah26',
'email'=>'san26@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah26',
'lastname'=>'yeah',
'nickname'=>'yeahyeah26',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah27',
'email'=>'san27@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah27',
'lastname'=>'yeah',
'nickname'=>'yeahyeah27',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah28',
'email'=>'san28@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah28',
'lastname'=>'yeah',
'nickname'=>'yeahyeah28',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah29',
'email'=>'san29@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah29',
'lastname'=>'yeah',
'nickname'=>'yeahyeah29',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah30',
'email'=>'san30@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah30',
'lastname'=>'yeah',
'nickname'=>'yeahyeah30',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah31',
'email'=>'san31@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah31',
'lastname'=>'yeah',
'nickname'=>'yeahyeah31',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah32',
'email'=>'san32@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah32',
'lastname'=>'yeah',
'nickname'=>'yeahyeah32',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah33',
'email'=>'san33@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah33',
'lastname'=>'yeah',
'nickname'=>'yeahyeah33',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah34',
'email'=>'san34@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah34',
'lastname'=>'yeah',
'nickname'=>'yeahyeah34',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah35',
'email'=>'san35@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah35',
'lastname'=>'yeah',
'nickname'=>'yeahyeah35',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah36',
'email'=>'san36@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah36',
'lastname'=>'yeah',
'nickname'=>'yeahyeah36',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah37',
'email'=>'san37@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah37',
'lastname'=>'yeah',
'nickname'=>'yeahyeah37',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah38',
'email'=>'san38@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah38',
'lastname'=>'yeah',
'nickname'=>'yeahyeah38',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah39',
'email'=>'san39@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah39',
'lastname'=>'yeah',
'nickname'=>'yeahyeah39',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah40',
'email'=>'san40@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah40',
'lastname'=>'yeah',
'nickname'=>'yeahyeah40',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah41',
'email'=>'san41@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah41',
'lastname'=>'yeah',
'nickname'=>'yeahyeah41',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah42',
'email'=>'san42@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah42',
'lastname'=>'yeah',
'nickname'=>'yeahyeah42',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah43',
'email'=>'san43@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah43',
'lastname'=>'yeah',
'nickname'=>'yeahyeah43',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah44',
'email'=>'san44@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah44',
'lastname'=>'yeah',
'nickname'=>'yeahyeah44',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah45',
'email'=>'san45@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah45',
'lastname'=>'yeah',
'nickname'=>'yeahyeah45',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah46',
'email'=>'san46@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah46',
'lastname'=>'yeah',
'nickname'=>'yeahyeah46',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah47',
'email'=>'san47@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah47',
'lastname'=>'yeah',
'nickname'=>'yeahyeah47',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah48',
'email'=>'san48@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah48',
'lastname'=>'yeah',
'nickname'=>'yeahyeah48',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santayeah49',
'email'=>'san49@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'yeah49',
'lastname'=>'yeah',
'nickname'=>'yeahyeah49',
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),


        );

        
        DB::table('users')->insert($pages);
    }

}