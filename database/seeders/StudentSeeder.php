<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;
use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;

class StudentSeeder extends Seeder
{
	    /**
	     * Run the database seeds.
	     *
	     * @return void
	     */
	    public function run()
	    {
	    	/*database Seeder, Cara Lama,mending pakai faker
	    	Schema::disableForeignKeyConstraints();
	    	Student::truncate();
	    	Schema::enableForeignKeyConstraints();
	        
	        $data = [
	        	['name' => 'aiu', 'gender' => 'P', 'nis'=> '0101001', 'class_id' =>'1'],
	        	['name' => 'budi', 'gender' => 'L', 'nis'=> '0101002', 'class_id' =>'1'],
	        	['name' => 'siti', 'gender' => 'P', 'nis'=> '0101003', 'class_id' =>'2'],
	        	['name' => 'tono', 'gender' => 'L', 'nis'=> '0101004', 'class_id' =>'3'],
	        ];

  			foreach ($data as $value) {
	    		Student::insert([
	        	'name'=> $value['name'],
	        	'gender'=> $value['gender'],
	        	'nis'=> $value['nis'],
	        	'class_id'=> $value['class_id'],
	        	'created_at'=> Carbon::now(),
	        	'updated_at'=> Carbon::now()
	       ]);
	   }*/
	   Student::factory()->count(100)->create();
	}

	
}
