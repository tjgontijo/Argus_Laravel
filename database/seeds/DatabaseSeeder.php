<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RasTableSeeder::class);
        $this->call(CourseTypesTableSeeder::class);
        $this->call(UnitsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(UnitTeachesTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(StatusReleasesTableSeeder::class);
        $this->call(CourseReleasesTableSeeder::class);        
        $this->call(PermissionTableSeeder::class);
        $this->call(StatusEnrollsTableSeeder::class);
        $this->call(FunctionEnrolsTableSeeder::class);
        $this->call(EnrollsTableSeeder::class);
    }
}
