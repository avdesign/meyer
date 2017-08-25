<?php

use Illuminate\Database\Seeder;

use AVDPainel\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $id = mt_rand(1, '123456789');

        User::create([
            'id' => $id,
        	'nome' => 'Anselmo Velame',
        	'email' => 'design@anselmovelame.com.br',
            'status' => 'Ativo',
        	'password' => bcrypt('avdesign'),
        ]);
    }
}
