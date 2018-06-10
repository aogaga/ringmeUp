<?php

class Phone extends Model {
	protected $fillable = ['number','phonenumbertype_id','contact_id'];

	protected $table = 'phones';


	protected static $rules = [
		'contact_id' => 'required',
		'number' => 'required',
		'phonenumbertype_id' => 'required',
	];

	protected static $messages = [
		'phonenumbertype_id.required' => 'Please specify phone number category',
		'number.required' => 'phone number is requird',
		'contact_id.required' => 'who owns this phone number, ? contact is requried',

	];






	public function contact()
	{
		return $this->belongsTo('Contact');
	}


	public function phonenumbertype()
	{
		return $this->belongsTo('Phonetype');
	}



}