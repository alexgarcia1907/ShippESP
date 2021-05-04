<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    private $roles = array(
		array(
			'id' => '1',
			'desc' => 'admin',
		),
		array(
			'id' => '2',
            'desc' => 'repartidor',
		),
		array(
			'id' => '3',
			'desc' => 'empresa',
		));

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createRoles();
        $this->command->info('Roles creados.');
    }

    public function createRoles(){
        DB::table('roles')->delete();
      
        foreach( $this->roles as $role) {
            $r = new Role;
            $r->id = $role['id'];
            $r->desc = $role['desc'];
            $r->save();
        }
    }
}
