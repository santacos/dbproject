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
        $this->call('DepartmentTableSeeder');
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

           
        );

        
        DB::table('users')->insert($pages);
    }

}

class DepartmentTableSeeder extends Seeder {
    public function run(){
        DB::table('departments')->delete();
        $pages = array(
            array('name'=>'ฝ่ายกิจกรรม','default_detail' => 'วางแผนว่าจะทำกิจกรรมอะไรบ้าง และflowของแต่ละกิจกรรมเป็นอย่างไร รวมทั้งรายละเอียดปลีกย่อยทุกอย่างที่ต้องใช้ในการจัดกิจกรรมนึง','created_at' => new DateTime,'updated_at' => new DateTime,),
            array('name'=>'ฝ่าย pr','default_detail' => 'ออกแบบ คิดวิธี และการประชาสัมพันธ์ให้โครงการเป็นที่รู้จักและดึงคนมาเข้าร่วมได้','created_at' => new DateTime,'updated_at' => new DateTime,),
            array('name'=>'ฝ่ายสถานที่','default_detail' => 'ติดต่อขอใช้สถานที่ที่ต้องใช้ในโครงการ รวมทั้งดูแลความเรียบร้อยของสถานที่','created_at' => new DateTime,'updated_at' => new DateTime,),
            array('name'=>'ฝ่ายไลน์','default_detail' => 'คุมการเข้า/ออกของคนในแต่ละช่วงเวลา ว่าควรมีคนเข้ามาได้เวลาไหน จำนวนเท่าไร และไปตรงไหน','created_at' => new DateTime,'updated_at' => new DateTime,),
            array('name'=>'ฝ่ายทะเบียน','default_detail' => 'บันทึกข้อมูลผู้มาเข้าร่วมโครงการ และคอยให้คววามช่วยเหลือหน้างาน','created_at' => new DateTime,'updated_at' => new DateTime,),
            array('name'=>'ฝ่ายขอทุน','default_detail' => 'จัดหาสปอนเซอร์เพิ่มเติมสำหรับเป็นงบประมาณในการจัดโครงการ','created_at' => new DateTime,'updated_at' => new DateTime,),
            array('name'=>'ฝ่ายเหรัญญิก','default_detail' => 'ทำบัญชีรายรับรายจ่ายของโครงการ และดูแลทุกอย่างที่เกี่ยวกับเงินในโครงการ','created_at' => new DateTime,'updated_at' => new DateTime,),
            array('name'=>'ฝ่ายวิชาการ','default_detail' => 'จัดเตรียมเนื้อหาที่ต้องใช้ในโครงการ หรือตรวจสอบเนื้อหาว่าเหมาะสมหรือไม่','created_at' => new DateTime,'updated_at' => new DateTime,),
            array('name'=>'ฝ่ายเลขา','default_detail' => 'จดรายละเอียดการประชุมแต่ละครั้งให้หัวหน้าของตัวเอง และสรุปการประชุมให้คนในโครงการได้รับทราบ','created_at' => new DateTime,'updated_at' => new DateTime,),
            array('name'=>'ฝ่ายของที่ระลึก','default_detail' => 'เตรียมของที่ระลึกที่ต้องมอบในโครงการ','created_at' => new DateTime,'updated_at' => new DateTime,),
            array('name'=>'ฝ่ายครัว','default_detail' => 'เตรียมอาหารที่ต้องใช้ในโครงการ (ทั้งคิดเมนู ซื้อวัตถุดิบ และปรุง)','created_at' => new DateTime,'updated_at' => new DateTime,),
            array('name'=>'ฝ่ายยานพาหนะ','default_detail' => 'ติดต่อจัดหายานพาหนะที่ต้องใช้ในโครงการ รวมทั้งดูแลความเรียบร้อยของยานพาหนะ','created_at' => new DateTime,'updated_at' => new DateTime,),
            array('name'=>'ฝ่ายปฏิคม','default_detail' => 'คอยประสานงานระหว่างฝ่ายอื่นๆในโครงการให้เป็นไปอย่างราบรื่น','created_at' => new DateTime,'updated_at' => new DateTime,),

        );
        DB::table('departments')->insert($pages);
    }
}