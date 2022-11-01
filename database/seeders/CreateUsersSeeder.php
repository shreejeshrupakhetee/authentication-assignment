<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name'=>'Admin',
                'email'=>'shreejeshadmin@ekbana.com',
                'is_admin'=>'1',
                'password'=> bcrypt('1122334455'),
            ],
            [
                'name'=>'User',
                'email'=>'shreejeshuser@ekbana.com',
                'is_admin'=>'0',
                'password'=> bcrypt('1122334455'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
