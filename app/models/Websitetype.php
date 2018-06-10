<?php

class Websitetype extends Model {
	protected $fillable = [];

	protected  $table = 'websitetypes';


	public function websites(){
		return $this->hasMany('Website');
	}
}