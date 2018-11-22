<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // DB::table('users')->insert([
        //     ['nome' => 'Wiiliam',
        //     'usuario' => 'will',
        //     'cpf' => '033781783958',
        //     'tipo' => 'ADM',
        //     'ativo' => 1,
        //     'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'] 
        // ]);
        DB::table('dentes')->insert([
            ['nome' => 'canino', 'numero' => 39],
            ['nome' => 'molar', 'numero' => 2],
            ['nome' => 'presa', 'numero' => 21]
        ]);

        DB::table('servicos')->insert([
            ['nome' => 'Restauração', 'ativo' => 1],
            ['nome' => 'Canal', 'ativo' => 1],
            ['nome' => 'Limpeza', 'ativo' => 1]
        ]);
    }
}
