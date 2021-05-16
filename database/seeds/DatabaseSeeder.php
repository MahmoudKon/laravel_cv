<?php

use App\Education;
use App\Experience;
use App\General;
use App\Hobby;
use App\Skill;
use App\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);

        $faker = Faker::create();
        // Create Rand 20 Users
    	foreach (range(1,10) as $index) {
	        User::create([
	            'username'      => $faker->name,
	            'email'         => $faker->email,
                'password'      => Hash::make(123),
                'approve'       => rand(0,1),
                'permissions'   => 'user'
	        ]);
        }   // end of users

        // Create Rand 20 General
    	for ($i = 2; $i < 11; $i++) {
	        General::create([
                'fullname'  => $faker->name,
                'website'   => $faker->url(),
                'job'       => 'New Job',
                'birthday'  => $faker->date(),
                'gender'    => 'male',
                'address'   => $faker->address(),
                'phone'     => rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9),
                'about'     => $faker->text(rand(200, 500)),
                'awards'    => $faker->text(rand(200, 500)),
                'user_id'   => $i,
	        ]);
	    }   // end of generals

        // Create Rand 30 Skills && Hobbies
    	foreach (range(1,30) as $index) {
	        Skill::create([
	            'skillname'  => $faker->text(rand(10,25), true),
	            'level'      => rand(1,5),
                'user_id'    => rand(2,10),
            ]);

            Hobby::create([
	            'hobbyname'  => $faker->text(rand(10,25), true),
	            'icon'      => 'icone_name',
                'user_id'    => rand(2,10),
	        ]);
        }   // end of skills && hobbies

        // Create Rand 30 Education && Experience
    	foreach (range(1,30) as $index) {
	        Education::create([
	            'start_date'  => $faker->dateTime('new'),
	            'End_date'    => $faker->dateTime('new'),
                'degree'      => $faker->text(rand(10,25), true),
                'place'       => $faker->text(rand(10,25), true),
                'description' => $faker->text(rand(100,200)),
                'user_id'     => rand(2,10),
            ]);

            Experience::create([
	            'start_date'  => $faker->dateTime('new'),
	            'End_date'    => $faker->dateTime('new'),
                'degree'      => $faker->text(rand(10,25), true),
                'place'       => $faker->text(rand(10,25), true),
                'description' => $faker->text(rand(100,200)),
                'user_id'     => rand(2,10),
	        ]);
        }   // end of educations && experiences
    }
}
