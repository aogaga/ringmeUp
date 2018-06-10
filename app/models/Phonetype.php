<?php

class Phonetype extends Model
{
	protected $fillable = [];

	protected $table = 'phonenumbertypes';


	public function phones()
	{
		return $this->hasMany('Phone');
	}


}