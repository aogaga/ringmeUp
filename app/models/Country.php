<?php

class Country extends Model {
	protected $fillable = [];
	protected $table = 'countries';


	public function addresss(){
		return $this->hasMany('Address');
	}


}