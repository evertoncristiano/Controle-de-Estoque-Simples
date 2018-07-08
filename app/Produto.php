<?php
namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model {

	public $timestamps = FALSE;
	protected $fillable = array('nome', 'descricao', 'valor', 'quantidade');

}