<?php

namespace Database\Seeders;

use App\Models\AccessRights;
use App\Models\User;
use App\Models\PortofolioPost;
use App\Models\PortofolioCategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        AccessRights::create([
            'name'=>'Admin',
        ]);

        AccessRights::create([
            'name'=>'Agent',
        ]);

        AccessRights::create([
            'name'=>'Candidate',
        ]);

        User::create([
            'name'=> 'Admin',
            'username' => 'admindomusmea',
            'email' => 'admin@gmail.com',
            'password'=> bcrypt('password'),
            'access_rights_id'=> 1,
            'phone' => '08123456789'
        ]);

        User::factory(3)->create();

        PortofolioPost::factory(50)->create();

        PortofolioCategory::create([
            'name'=>'Design',
            'slug'=>'design'
        ]);

        PortofolioCategory::create([
            'name'=>'Build and Progress',
            'slug'=>'build-and-progress'
        ]);

        PortofolioCategory::create([
            'name'=>'Interior',
            'slug'=>'interior'
        ]);

        PortofolioCategory::create([
            'name'=>'Exterior',
            'slug'=>'exterior'
        ]);


    }
}
