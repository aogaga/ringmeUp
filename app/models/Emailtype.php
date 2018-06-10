<?php

class Emailtype extends Model {
	protected $fillable = [];
	protected  $table = 'emailtypes';



	public function emails(){
		return $this->hasMany('Email');
	}

}