<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->delete();

        $data = [
            ['key' => 'current_session', 'value' => '2021-2022'],
            ['key' => 'school_title', 'value' => 'Md'],
            ['key' => 'school_name', 'value' => 'MD International Schools'],
            ['key' => 'end_first_term', 'value' => '01-12-2022'],
            ['key' => 'end_second_term', 'value' => '01-03-2023'],
            ['key' => 'phone', 'value' => '0123456789'],
            ['key' => 'address', 'value' => 'دمشق'],
            ['key' => 'school_email', 'value' => 'MD@gmail.com'],
            ['key' => 'logo', 'value' => '1.jpg'],
        ];

        DB::table('settings')->insert($data);
    }
}
