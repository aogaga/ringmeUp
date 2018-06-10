<?php
use Nicolaslopezj\Searchable\SearchableTrait;

class Contact  extends Model {
	use SearchableTrait;

	protected $fillable = ['firstname', 'lastname','middlename', 'title','occupation','businessname',
	'contacttype_id'];

	protected $table = 'contacts';






	protected $searchable = [
		'columns' => [
			'firstname' => 10,
			'lastname' => 10,
			'middlename' => 10,
			'title' => 10,
			'occupation' => 10,
			'businessname' => 10,
			'addresses.street'=>10,
			'phones.number'=>10,

		],
		'joins' => [
//			'posts' => ['users.id','posts.user_id'],
			'addresses' => ['contacts.id','addresses.contact_id'],
			'phones' => ['contacts.id','phones.contact_id'],
			'emails' => ['contacts.id','emails.contact_id'],
			'websites' => ['contacts.id','websites.contact_id'],
		],
	];






	public function addresses(){
		return $this->hasMany('Address');
	}


	public function emails(){
		return $this->hasMany('Email');
	}


	public function phones(){
		return $this->hasMany('Phone');
	}



	public function websites(){
		return $this->hasMany('Website');
	}



	public function contacttype()
	{
		return $this->belongsTo('Contacttype');
	}





}