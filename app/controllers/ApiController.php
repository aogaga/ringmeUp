<?php

class ApiController extends BaseController {



	public function moore(){
		$key = "Agi";
		$con = Contact::search($key)
			->with('addresses')
			->with('emails')
			->with('phones')
			->with('websites')
			->get();


		return $con;

	}


	public function Index(){
		$key = "Agi";
		$con = Contact::search($key)
			->with('addresses')
			->with('emails')
			->with('phones')
			->with('websites')
			->get();


		return $this->process($con);

	}


	private function process($con){

		$mapper = new JsonMapper();

		$bs = [];


		$i = 0;
		foreach($con as $val){

			$item = [];
			$item['id'] = $val->id;
			$item['firstname'] = $val->firstname;
			$item['lastname'] = $val->lastname;
			$item['middlename'] = $val->middlename;
			$item['occupation'] = $val->occupation;

			$item['address'] = $this->processAddress($val->addresses);

			array_push($bs, $item);



//				return $val->addresses[0];
//						//$bs = $val;

		}


		return $bs;
	}



	private function processAddress($addresses){

		$ct = count($addresses);
		$name = "";


		for($i=0; $i<$ct; $i++){
			$name .= $addresses[$i]->houseno." ";
			$name .= $addresses[$i]->street;


		}

		return $name;

	}





	/**
	 * Display a listing of the resource.
	 * GET /api
	 *
	 * @return Response
	 */
	public function test()
	{
		//$term = Input::get('term');
		$key  = "Agi";

		$con = Contact::join('addresses','addresses.contact_id', '=', 'contacts.id')
			->join('addresstypes','addresses.addresstype_id', '=', 'addresstypes.id')
			->join('countries','addresses.countrie_id', '=', 'countries.id')


			->join('phones','phones.contact_id', '=', 'contacts.id')
			->join('phonenumbertypes','phones.phonenumbertype_id', '=', 'phonenumbertypes.id')

			->join('emails','emails.contact_id', '=', 'contacts.id')
			->join('emailtypes','emails.emailtype_id', '=', 'emailtypes.id')


			->join('websites','websites.contact_id', '=', 'websites.id')
			->join('websitetypes','websites.websitetype_id', '=', 'websitetypes.id')

			->orderBy('contacts.created_at', 'desc')
			->where('contacts.lastname', 'LIKE', "%$key%")
			->orwhere('contacts.firstname', 'LIKE', "%$key%")
			->orwhere('contacts.middlename', 'LIKE', "%$key%")
			->orwhere('contacts.title', 'LIKE', "%$key%")
			->orwhere('contacts.occupation', 'LIKE', "%$key%")
			->orwhere('contacts.businessname', 'LIKE', "%$key%")


			->orwhere('addresses.houseno', 'LIKE', "%$key%")
			->orwhere('addresses.street', 'LIKE', "%$key%")
			->orwhere('addresses.city', 'LIKE', "%$key%")
			->orwhere('addresses.state', 'LIKE', "%$key%")
			->orwhere('addresses.street', 'LIKE', "%$key%")
			->orwhere('countries.full_name', 'LIKE', "%$key%")

			->orwhere('phones.number', 'LIKE', "%$key%")
			->orwhere('phonenumbertypes.phone_type', 'LIKE', "%$key%")

			->orwhere('emails.emaiaddress', 'LIKE', "%$key%")
			->orwhere('emailtypes.email_type', 'LIKE', "%$key%")

			->orwhere('websites.websiteaddress', 'LIKE', "%$key%")
			->orwhere('websitetypes.website_type', 'LIKE', "%$key%")



			->get(['contacts.title','contacts.firstname','contacts.lastname', 'contacts.middlename',
				'addresses.houseno','addresses.street','addresses.city','addresses.state','countries.full_name','addresstypes.address_type',
				'phones.number','phonenumbertypes.phone_type',
				'emails.emaiaddress' ,'emailtypes.email_type',
				'websites.websiteaddress','websitetypes.website_type'
			]);

//		return $con;
//
//
//
//		$con = Contact::search($key)
//			->with('addresses','phones','emails','websites')
//			->get();

		if($con == null){

			$response["success"] = 0;
			$response["message"] = "No Order  Was  Found";

			return $response;

		}else{

			$response["success"] = 1;
			$response["products"] = $queries = DB::getQueryLog();;

			return $response;
		}




	}




	public  function more(){

		$key = 'Agi';

		$result = contact::select('firstname','lastname', 'emails.emaiaddress','websites.websiteaddress')
				->join('emails', 'contacts.id', '=', 'emails.contact_id')
			    ->join('websites', 'contacts.id', '=', 'websites.contact_id')
			     ->where('firstname', 'LIKE', "%$key%")
			     ->orwhere('lastname', 'LIKE', "%$key%")
			     ->orwhere('websites.websiteaddress', 'LIKE', "%$key%")


			    ->get();

		$queries = DB::getQueryLog();
			return $queries;

//		return $result;
	}


}