<?php

class Contacttype extends Model {
	protected $fillable = [];

	protected $table = 'contacttypes';


	public function contacts(){
		return $this->hasMany('Contact');
	}
}