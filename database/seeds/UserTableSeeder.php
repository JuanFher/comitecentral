<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $representant = User::create([
            'name' => 'Diana Valladares',
            'email' => 'diana@gmail.com',
            'password' => bcrypt('123456')
        ]);

        $representant->assignRole('representant');

        $admin = User::create([
            'name' => 'Ricardo Quiñonez',
            'email' => 'ricardo@gmail.com',
            'password' => bcrypt('123456')
        ]);

        $admin->assignRole('admin');

        $treasurer = User::create([
            'name' => ' Leodan Riera',
            'email' => 'leodan@gmail.com',
            'password' => bcrypt('123456')
        ]);

        $treasurer->assignRole('treasurer');

        $superadmin = User::create([
            'name' => ' Juan Fernando Peña',
            'email' => 'juan@gmail.com',
            'password' => bcrypt('123456')
        ]);

        $superadmin->assignRole('superadmin');


        $representant = User::create([
            'name' => 'Raquel Rojas',
            'email' => 'raquel@gmail.com',
            'password' => bcrypt('123456')
        ]);

        $representant->assignRole('representant');

        $representant = User::create([
            'name' => 'Juan Carlos Altamirano',
            'email' => 'juancarlos@gmail.com',
            'password' => bcrypt('123456')
        ]);

        $representant->assignRole('representant');
        

        $representant = User::create([
            'name' => 'Sandy Rodriguez',
            'email' => 'sandy@gmail.com',
            'password' => bcrypt('123456')
        ]);

        $representant->assignRole('representant');
        

        $representant = User::create([
            'name' => 'Fabian calderon',
            'email' => 'fabian@gmail.com',
            'password' => bcrypt('123456')
        ]);

        $representant->assignRole('representant');
        
        $representant = User::create([
            'name' => 'Patricio De la Toree',
            'email' => 'patricio@gmail.com',
            'password' => bcrypt('123456')
        ]);

        $representant->assignRole('representant');
        
        $representant = User::create([
            'name' => 'Marcia Conde',
            'email' => 'marcia@gmail.com',
            'password' => bcrypt('123456')
        ]);

        $representant->assignRole('representant');
        
        $representant = User::create([
            'name' => 'Jackson Cedeño',
            'email' => 'Jacson@gmail.com',
            'password' => bcrypt('123456')
        ]);

        $representant->assignRole('representant');
        
        $representant = User::create([
            'name' => 'Veronica Lema',
            'email' => 'veronica@gmail.com',
            'password' => bcrypt('123456')
        ]);

        $representant->assignRole('representant');
        
    }
}
