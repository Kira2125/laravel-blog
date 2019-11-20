<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([
            'name' => 'Kira',
            'email' => 'Kira@lala.me',
            'password' => bcrypt('password'),
            'admin' => 1
        ]);

        App\Profile::create([

            'user_id' => $user->id,

            'avatar' => 'uploads/avatars/1.png',

            'about' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi enim facere maxime nisi obcaecati optio pariatur porro quo tenetur, ut.',

            'facebook' => 'facebook.com',

            'youtube' => 'youtube.com'

        ]);
    }
}
