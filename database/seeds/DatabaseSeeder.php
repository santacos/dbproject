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
        $this->call('StudentTableSeeder');
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
            array('username'=>'santacos1',
'email'=>'san1@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos1',
'lastname'=>'yeah',
'nickname'=>'coscos1',
'year'=>1,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos2',
'email'=>'san2@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos2',
'lastname'=>'yeah',
'nickname'=>'coscos2',
'year'=>2,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos3',
'email'=>'san3@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos3',
'lastname'=>'yeah',
'nickname'=>'coscos3',
'year'=>3,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos4',
'email'=>'san4@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos4',
'lastname'=>'yeah',
'nickname'=>'coscos4',
'year'=>4,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos5',
'email'=>'san5@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos5',
'lastname'=>'yeah',
'nickname'=>'coscos5',
'year'=>1,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos6',
'email'=>'san6@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos6',
'lastname'=>'yeah',
'nickname'=>'coscos6',
'year'=>2,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos7',
'email'=>'san7@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos7',
'lastname'=>'yeah',
'nickname'=>'coscos7',
'year'=>3,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos8',
'email'=>'san8@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos8',
'lastname'=>'yeah',
'nickname'=>'coscos8',
'year'=>4,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos9',
'email'=>'san9@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos9',
'lastname'=>'yeah',
'nickname'=>'coscos9',
'year'=>1,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos10',
'email'=>'san10@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos10',
'lastname'=>'yeah',
'nickname'=>'coscos10',
'year'=>2,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos11',
'email'=>'san11@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos11',
'lastname'=>'yeah',
'nickname'=>'coscos11',
'year'=>3,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos12',
'email'=>'san12@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos12',
'lastname'=>'yeah',
'nickname'=>'coscos12',
'year'=>4,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos13',
'email'=>'san13@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos13',
'lastname'=>'yeah',
'nickname'=>'coscos13',
'year'=>1,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos14',
'email'=>'san14@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos14',
'lastname'=>'yeah',
'nickname'=>'coscos14',
'year'=>2,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos15',
'email'=>'san15@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos15',
'lastname'=>'yeah',
'nickname'=>'coscos15',
'year'=>3,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos16',
'email'=>'san16@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos16',
'lastname'=>'yeah',
'nickname'=>'coscos16',
'year'=>4,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos17',
'email'=>'san17@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos17',
'lastname'=>'yeah',
'nickname'=>'coscos17',
'year'=>1,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos18',
'email'=>'san18@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos18',
'lastname'=>'yeah',
'nickname'=>'coscos18',
'year'=>2,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos19',
'email'=>'san19@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos19',
'lastname'=>'yeah',
'nickname'=>'coscos19',
'year'=>3,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos20',
'email'=>'san20@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos20',
'lastname'=>'yeah',
'nickname'=>'coscos20',
'year'=>4,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos21',
'email'=>'san21@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos21',
'lastname'=>'yeah',
'nickname'=>'coscos21',
'year'=>1,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos22',
'email'=>'san22@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos22',
'lastname'=>'yeah',
'nickname'=>'coscos22',
'year'=>2,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos23',
'email'=>'san23@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos23',
'lastname'=>'yeah',
'nickname'=>'coscos23',
'year'=>3,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos24',
'email'=>'san24@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos24',
'lastname'=>'yeah',
'nickname'=>'coscos24',
'year'=>4,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos25',
'email'=>'san25@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos25',
'lastname'=>'yeah',
'nickname'=>'coscos25',
'year'=>1,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos26',
'email'=>'san26@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos26',
'lastname'=>'yeah',
'nickname'=>'coscos26',
'year'=>2,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos27',
'email'=>'san27@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos27',
'lastname'=>'yeah',
'nickname'=>'coscos27',
'year'=>3,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos28',
'email'=>'san28@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos28',
'lastname'=>'yeah',
'nickname'=>'coscos28',
'year'=>4,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos29',
'email'=>'san29@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos29',
'lastname'=>'yeah',
'nickname'=>'coscos29',
'year'=>1,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos30',
'email'=>'san30@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos30',
'lastname'=>'yeah',
'nickname'=>'coscos30',
'year'=>2,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos31',
'email'=>'san31@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos31',
'lastname'=>'yeah',
'nickname'=>'coscos31',
'year'=>3,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos32',
'email'=>'san32@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos32',
'lastname'=>'yeah',
'nickname'=>'coscos32',
'year'=>4,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos33',
'email'=>'san33@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos33',
'lastname'=>'yeah',
'nickname'=>'coscos33',
'year'=>1,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos34',
'email'=>'san34@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos34',
'lastname'=>'yeah',
'nickname'=>'coscos34',
'year'=>2,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos35',
'email'=>'san35@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos35',
'lastname'=>'yeah',
'nickname'=>'coscos35',
'year'=>3,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos36',
'email'=>'san36@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos36',
'lastname'=>'yeah',
'nickname'=>'coscos36',
'year'=>4,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos37',
'email'=>'san37@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos37',
'lastname'=>'yeah',
'nickname'=>'coscos37',
'year'=>1,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos38',
'email'=>'san38@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos38',
'lastname'=>'yeah',
'nickname'=>'coscos38',
'year'=>2,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos39',
'email'=>'san39@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos39',
'lastname'=>'yeah',
'nickname'=>'coscos39',
'year'=>3,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos40',
'email'=>'san40@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos40',
'lastname'=>'yeah',
'nickname'=>'coscos40',
'year'=>4,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos41',
'email'=>'san41@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos41',
'lastname'=>'yeah',
'nickname'=>'coscos41',
'year'=>1,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos42',
'email'=>'san42@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos42',
'lastname'=>'yeah',
'nickname'=>'coscos42',
'year'=>2,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos43',
'email'=>'san43@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos43',
'lastname'=>'yeah',
'nickname'=>'coscos43',
'year'=>3,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos44',
'email'=>'san44@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos44',
'lastname'=>'yeah',
'nickname'=>'coscos44',
'year'=>4,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos45',
'email'=>'san45@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos45',
'lastname'=>'yeah',
'nickname'=>'coscos45',
'year'=>1,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos46',
'email'=>'san46@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos46',
'lastname'=>'yeah',
'nickname'=>'coscos46',
'year'=>2,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos47',
'email'=>'san47@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos47',
'lastname'=>'yeah',
'nickname'=>'coscos47',
'year'=>3,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos48',
'email'=>'san48@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos48',
'lastname'=>'yeah',
'nickname'=>'coscos48',
'year'=>4,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos49',
'email'=>'san49@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos49',
'lastname'=>'yeah',
'nickname'=>'coscos49',
'year'=>1,
'sex'=>'f','birthdate'=>date('2015-03-15'),'tel'=>'025555555','created_at' => new DateTime,'updated_at' => new DateTime,),

array('username'=>'santacos50',
'email'=>'san50@san.com',
'password'=> Hash::make('123456'),
'firstname'=>'cos50',
'lastname'=>'yeah',
'nickname'=>'coscos50',
'year'=>2,
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


class StudentTableSeeder extends Seeder {
     public function run()
    {
        DB::table('students')->delete();

        
        $student = new \App\Student;
                $student->user_id = 1;
                $student->description = 'หล่อ รวย ใจดี ';
                $student->year = 4;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 2;
                $student->description = 'ขี้เหร่ แต่รักเด็ก ';
                $student->year = 4;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 3;
                $student->description = 'วิศวะ กอดอุ่น ';
                $student->year = 2;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 4;
                $student->description = 'หน้าสิว เรียนไม่เก่ง ';
                $student->year = 2;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 5;
                $student->description = 'อ้วน ดำ ล่ำ เตี้ย ';
                $student->year = 2;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 6;
                $student->description = 'หน้าโง่ แต่เอช้วน ';
                $student->year = 3;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 7;
                $student->description = 'ตีดอท ชอบถ่ายรูป ';
                $student->year = 2;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 8;
                $student->description = 'ขับพอร์ช บ้านรวย ';
                $student->year = 2;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 9;
                $student->description = 'ใช้ไอโฟน มีแฟนแล้ว ';
                $student->year = 1;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 10;
                $student->description = 'หล่อมาก เป็นเกย์ ';
                $student->year = 3;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 11;
                $student->description = 'ชอบเที่ยวกลางคืน โสดสนิท ';
                $student->year = 3;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 12;
                $student->description = 'ขี้เหร่ อยากมีแฟนบัญชี ';
                $student->year = 2;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 13;
                $student->description = 'ชอบสีขาว ใช้นาฬิกา PAM ';
                $student->year = 1;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 14;
                $student->description = ' ลูกเจ้าของ CP บ้านเลี้ยงหมาสิบตัว';
                $student->year = 4;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 15;
                $student->description = 'ใช้ MAC BOOK ชอบสีดำ เล่นบาสระดับโลก ';
                $student->year = 3;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 16;
                $student->description = 'นักมวยเก่า หล่อ ล่ำ เฟรนลี่ ';
                $student->year = 4;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 17;
                $student->description = 'นายแบบ คอแข็ง หุ่นดี ';
                $student->year = 1;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 18;
                $student->description = 'รักหมา ชอบกินกาแฟ สวย ';
                $student->year = 4;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 19;
                $student->description = 'ขาว หมวย สวย น่ารัก ';
                $student->year = 2;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 20;
                $student->description = 'ขาว สวย หมวย อึ๋ม ';
                $student->year = 3;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 21;
                $student->description = 'อกสะบึ้ม ขาว บัญชี ';
                $student->year = 1;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 22;
                $student->description = 'เรียน BBA ขาว ล่ำ หุ่นดี ';
                $student->year = 3;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 23;
                $student->description = 'ชอบขับรถ บ้านส่งแก๊ส ';
                $student->year = 1;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 24;
                $student->description = 'สวย คล้ำ มีพุง ';
                $student->year = 2;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 25;
                $student->description = 'อยากมีแฟนหล่อๆ วิศวะ ';
                $student->year = 1;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 26;
                $student->description = 'เป็นตุ้ดครุ ล่ำ คล้ำ สูง ';
                $student->year = 1;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 27;
                $student->description = 'ชอบกินน้ำแข็งใส เด็กสถาปัตย์ ';
                $student->year = 2;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 28;
                $student->description = 'หมอ รวย ใจดี ขี้เหร่ ';
                $student->year = 2;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 29;
                $student->description = 'วิทย์กีฬา หล่อ ล่ำ ดำ คล้ำ ';
                $student->year = 1;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 30;
                $student->description = 'อักษร ชอบเที่ยวต่างประเทศ ';
                $student->year = 3;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 31;
                $student->description = ' ทันตะ หมอฟันอยากโดนฟัน';
                $student->year = 3;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 32;
                $student->description = 'เภสัช ยาที่ดีที่สุดคือความรัก ';
                $student->year = 3;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 33;
                $student->description = 'ครุ หญิงแท้ สวย บึ้ม ';
                $student->year = 1;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 34;
                $student->description = 'วิศวะ เกียรตินิยม ชอบแมนยู ';
                $student->year = 1;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 35;
                $student->description = 'บัญชี เป็นเลสเบี้ยน ชอบสาววิทยา ';
                $student->year = 3;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 36;
                $student->description = 'ใส่แว่น เด็กดี สวย ขาว หมวยมาก ';
                $student->year = 2;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 37;
                $student->description = ' นิติ ไม่ค่อยมีเวลาว่าง เป็นที่ปรึกษาให้ได้';
                $student->year = 1;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 38;
                $student->description = 'หล่อ จน ใช้ซัมซุงฮีโร่ ';
                $student->year = 1;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 39;
                $student->description = ' สวย ใจดี ตูดใหญ่ น่ารัก หมวย';
                $student->year = 1;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 40;
                $student->description = ' เถิก ใจดี หมวย สวย อึ๋ม ';
                $student->year = 3;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 41;
                $student->description = ' บัญชี สวย บึ้ม เป็นดารา';
                $student->year = 1;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 42;
                $student->description = 'วิศวะ หาคู่ขา ';
                $student->year = 2;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 43;
                $student->description = 'ขาว สวย หมวย ไม่อึ๋ม บ้านรวยนะ';
                $student->year = 1;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 44;
                $student->description = 'เรียนเก่ง หล่อ กุ้งแห้ง เด็กแว่น ';
                $student->year = 4;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 45;
                $student->description = 'แบดบอยวิศวะ กินเหล้า ดูดบุหรี่ ';
                $student->year = 1;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 46;
                $student->description = ' ครุ กระเทยสวย ขาว ผอม มีหน้าอก';
                $student->year = 1;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 47;
                $student->description = 'หล่อ รวย โสด เกรดเยอะ ';
                $student->year = 3;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 48;
                $student->description = ' หล่อ รวย เจ้าของห้าง';
                $student->year = 1;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 49;
                $student->description = 'สวย หมวย อึ๋ม ใช้ไอโฟน ';
                $student->year = 2;
                $student->save();

        $student = new \App\Student;
                $student->user_id = 50;
                $student->description = 'กระเทย ดำ คล้ำ แต่เด็ด ';
                $student->year = 2;
                $student->save();


    }


}
