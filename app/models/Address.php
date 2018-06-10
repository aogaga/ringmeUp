<?php
use Nicolaslopezj\Searchable\SearchableTrait;

class Address extends Model {

	use SearchableTrait;
	protected $table = 'addresses';
	protected $fillable = ['houseno','street','city','state','countrie_id','addresstype_id'];




	protected static $rules = [
		'houseno' => 'required',
		'street' => 'required',
		'city' => 'required',
		'state' => 'required',
		'countrie_id' => 'required',
		'addresstype_id' => 'required',

	];

	protected static $messages = [
		'houseno.required' => 'house / apartment no is required',
		'street.required' => 'name of street is requried',
		'city.required' => 'name of city is required',
		'state.required' => 'state /province is required',
		'countrie_id.required' => 'country is requried',
		'addresstype_id.required' => 'address is required',
	];




	protected $searchable = [
		'columns' => [
			'houseno' => 10,
			'street' => 10,


		],
		'joins' => [
			'countries' => ['countries.id', 'countries.countrie_id'],

		],
	];






	public function contact()
	{
		return $this->belongsTo('Contact');
	}


	public function countrie()
	{
		return $this->belongsTo('Country');
	}


	public function addresstype()
	{
		return $this->belongsTo('Addresstype');
	}


}