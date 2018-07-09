<?php

use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create a new user
        $admin_id = DB::table('users')->insertGetId([
            'username'  => 'almohamady',
            'name'      => 'Ahmed Al Mohamady',
            'password'  => bcrypt('aA@01093301320'),
            'confirmed' => 1,
            'verified'  => 1,
            'email'     => 'almohamady7@gmail.com',
            
            'settings'  => json_encode([
                'font'                          => 'Lato',
                'sidebar_color'                 => 'Gray',
                'notify_submissions_replied'    => true,
                'notify_comments_replied'       => true,
                'notify_mentions'               => true,
            ]),
            
            'info' => json_encode([
                'website' => null,
                'twitter' => null,
            ]),
            'created_at' => \Carbon\Carbon::now(),
        ]);

        //Make the user an admin
        DB::table('appointedd_users')->insert([
            'user_id'      => $admin_id,
            'appointed_as' => 'administrator',
        ]);
    }
}
