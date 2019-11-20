<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Setting::create([
            'site_name' => "Laravel's blog",
            'address' => 'Russia, Sevastopol',
            'contact_number' => '8 978 540 43 54',
            'contact_email' => 'some@gmail.com'
        ]);
    }
}
