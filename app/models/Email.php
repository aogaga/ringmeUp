<?php

class Email extends Model {
	protected $fillable = ['emaiaddress','emailtype_id','contact_id'];
	protected $table = 'emails';





	protected static $rules = [
		'contact_id' => 'required',
		'emaiaddress' => 'required',
		'emailtype_id' => 'required',
	];

	protected static $messages = [
		'emailtype_id.required' => 'Please specify email address category',
		'emaiaddress.required' => 'Email address is requird',
		'contact_id.required' => 'whose email address is this ? contact is requried',

	];


	public function contact()
	{
		return $this->belongsTo('Contact');
	}





	public function emailtype()
	{
		return $this->belongsTo('Emailtype');
	}






}