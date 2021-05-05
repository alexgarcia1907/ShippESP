<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    private $users = array(
		array(
			'id' => '1',
			'name' => 'admin',
            'email' => 'alex@alex.com',
            'password' => '1234',
            'role_id' => 1
		));

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createUsers();
        $this->command->info('Usuarios creados.');
    }

    public function createUsers(){
        DB::table('users')->delete();
      
        foreach( $this->users as $user) {
            $r = new User;
            $r->id = $user['id'];
            $r->name = $user['name'];
            $r->email = $user['email'];
            $r->password = Hash::make($user['password']);
            $r->role_id = $user['role_id'];
            $r->save();
        }
    }
}
