<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use estoque\Categoria;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		$this->call('CategoriaTableSeeder');
	}

}

class CategoriaTableSeeder extends Seeder{

	public function run()
	{
		Categoria::create(['nome' => 'Eletrônicos']);
		Categoria::create(['nome' => 'Informática']);
		Categoria::create(['nome' => 'Games']);
		Categoria::create(['nome' => 'Telefonia']);
	}

}
