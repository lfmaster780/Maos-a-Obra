<?php

use Illuminate\Database\Seeder;

class EnderecoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    for ($i=0 ; $i < 5; $i++){
      DB::table('enderecos')->insert(['rua' => str_random(10),'cidade' => str_random(10),'bairro' => str_random(7),'estado' => str_random(9),
      'numero' => 413,'cep' => str_random(10)]);
    }
    }
}
