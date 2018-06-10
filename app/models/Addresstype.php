<?php

class Addresstype extends Model {
	protected $fillable = [];


	protected $table = 'addresstypes';



	public function addresss(){
		return $this->hasMany('Address');
	}

}