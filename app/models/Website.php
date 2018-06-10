<?php

class Website extends Model {
	protected $fillable = ['contact_id','websiteaddress','websitetype_id'];

	protected  $table = 'websites';




	protected static $rules = [
		'contact_id' => 'required',
		'websitetype_id' => 'required',
		'websiteaddress' => 'required',
	];

	protected static $messages = [
		'websiteaddress.required' => 'Please specify website address / url',
		'contact_id.required' => 'whose website or url is this ?',
		'websitetype_id' => 'website/url kind or category',

	];


	public function contact()
	{
		return $this->belongsTo('Contact');
	}


	public function websitetype()
	{
		return $this->belongsTo('Websitetype');
	}

}