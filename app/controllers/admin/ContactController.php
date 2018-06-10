<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/13/15
 * Time: 3:25 PM
 */

class ContactController extends  BaseController {


    /**
     * @return all contacts
     */
    public function index(){

        $contacts = Contact::orderBy('id','desc')->paginate('100');

        return View::make('contact.index')->with(['contacts'=>$contacts]);
    }


    /**
     * @return  a view that contains a form to add a new contact
     */
    public function add(){

        $ct = Contacttype::lists('contact_type', 'id');
        return View::make('contact.add')->with(['ct'=>$ct]);

    }


    /***
     * @return the outcome of adding a new contact to the database
     *
     */
    public function newContact(){

        $contact = new Contact(Input::all());

        if($contact->save()){

            return Redirect::to('/list/all')->with('message', 'A new sales rep has been created');
        }else{

            return Redirect::back()->withInput()->withErrors($contact->getErrors());
        }

    }


    /**
     * @param $id
     * @return a view containing the contact and all his details
     *
     */

    public function viewContactDetails($id){

        $contact = Contact::find($id);

        if($contact == null){
            return Redirect::to('/list/all');

        }else{


            return View::make('contact.viewcontactdetails')->with(['contact'=>$contact]);
        }


    }



    public function addcontactaddresstocontact($id){

        $contact = Contact::find($id);

        $ct = Country::lists('full_name', 'id');
        $ad = Addresstype::lists('address_type','id');

        if($contact == null){

            return Redirect::to("/viewContactDetails/$id");
        }else{

            return View::make('contact.addContactAddresstoCntact')->with(['ct'=>$ct, 'ad'=>$ad]);
        }

    }


    /**
     * @param $id
     * @return the outcome of the address creation process
     */
    public function addaddressfornewcontact($id){

        $add = new Address(Input::all());
        $add->contact_id = $id;
        $add->lat = '0';
        $add->long = '0';

        if($add->save()){


            return Redirect::to("/viewContactDetails/$id")->with('message', 'a new address has been added for contact');

        }else{

            return Redirect::back()->withInput()->withErrors($add->getErrors());

        }

    }


    /**
     * @param $id
     * @param $contact
     * @return the outcome of the delete operation
     */
    public  function  deletecontactaddress($id, $contact){

            $add = Address::find($id);

                if($add == null){

                    return Redirect::to("/viewContactDetails/$contact")->with('message', 'delete operation failed');
                }else{
                    $add->delete();
                    return Redirect::to("/viewContactDetails/$contact")->with('message', 'Delete Operation was succcessful');

                }


    }


    /**
     * @param $id
     * @param $contact
     * @return mixed
     */
    public  function editcontactaddress($id, $contact){

        $address = Address::find($id);
        if($address == null){
            return Redirect::to("/viewContactDetails/$contact")->with('message', 'Address could not be found');
        }else{

            $ct = Country::lists('full_name', 'id');
            $ad = Addresstype::lists('address_type','id');
            return View::make('contact.editcontactaddress')->with(['ct'=>$ct, 'ad'=>$ad, 'address'=>$address]);
        }


    }


    /**
     * @param $id
     * @param $contact
     * @return mixed
     */

    public  function editcontactaddresspost($id, $contact){

        $address = Address::find($id);
        $address->fill(Input::all());

        if($address->save()){

            return Redirect::to("/viewContactDetails/$contact")->with('message', 'update operation completed');
        }else{
            return Redirect::back()->withInput()->withErrors($address->getErrors());

        }

    }


    /**
     * @param $id
     * @param $contact
     * @return mixed
     *
     */
    public  function deletecontactphonenumber($id, $contact){

        $phone = Phone::find($id);


        if($phone == null){

            return Redirect::to("/viewContactDetails/$contact")->with('message', 'Phone number not found');
        }else{

            $phone->delete();
            return Redirect::to("/viewContactDetails/$contact")->with('message', 'Delete Operation was succcessful');
        }


    }


    /**
     * @param $id
     * @param $contact
     * @return mixed
     *
     */

    public function editcontactphonenumber($id, $contact){

        $phone = Phone::find($id);
        $ph = Phonetype::lists('phone_type','id');


        if($phone == null){

            return Redirect::to("/viewContactDetails/$contact")->with('message', 'Phone number not found');
        }else{

            return View::make('contact.editcontactphonenumber')->with(['phone'=>$phone, 'ph'=>$ph]);
        }


    }


    /**
     * @param $id
     * @param $contact
     * @return mixed
     */

    public  function editcontactphonenumberpost($id, $contact){
        $phone = Phone::find($id);
        $phone->fill(Input::all());
        $phone->contact_id = $contact;


        if($phone->save()){

            return Redirect::to("/viewContactDetails/$contact")->with('message', 'update operation completed');
        }else{
            return Redirect::back()->withInput()->withErrors($phone->getErrors());

        }
    }


    /**
     * @param $id
     * @return mixed
     */
    public function addnewcontactphonenumber($id){

        $contact = Contact::find($id);

        $ph = Phonetype::lists('phone_type','id');

        return View::make('contact.addnewcontactphonenumber')->with(['ph'=>$ph, 'contact'=>$contact]);

    }


    /**
     * @param $id
     * @return mixed
     */

    public  function addnewcontactphonenumberpost($id){

        $phone = new Phone(Input::all());
        $phone->contact_id = $id;



        if($phone->save()){

            return Redirect::to("/viewContactDetails/$id")->with('message', 'operation completed');
        }else{
            return Redirect::back()->withInput()->withErrors($phone->getErrors());

        }



    }


    /**
     * @param $id
     * @return mixed
     */

    public function addnewcontactemailladdress($id){
        $emailtype = Emailtype::lists('email_type', 'id');

        return View::make('contact.addnewcontactemailladdress')->with(['em'=>$emailtype]);

    }


    /**
     * @param $id
     * @return mixed
     */

    public function addnewcontactemailladdresspost($id){

        $email = new Email(Input::all());
        $email->contact_id = $id;

        if($email->save()){

            return Redirect::to("/viewContactDetails/$id")->with('message', 'operation completed');

        }else{
            return Redirect::back()->withInput()->withErrors($email->getErrors());
        }


    }


    /**
     * @param $id
     * @param $contact
     * @return mixed
     */

    public function deletenewcontactemailaddress($id, $contact){

        $email = Email::find($id);

        if($email == null){
            return Redirect::to("/viewContactDetails/$contact")->with('message', 'Email Address not found');

        }else{

            $email->delete();
            return Redirect::to("/viewContactDetails/$contact")->with('message', 'Delete Operation was succcessful');
        }
    }


    /**
     * @param $id
     * @param $contact
     * @return mixed
     */
    public function editnewcontactemailaddreess($id, $contact){

        $email = Email::find($id);
        $emailtype = Emailtype::lists('email_type', 'id');

        if($email == null){
            return Redirect::to("/viewContactDetails/$contact")->with('message', 'Email address not found');
        }else{

            return View::make('contact.editnewcontactemailaddreess')->with(['email'=>$email, 'em'=>$emailtype]);
        }



    }


    /**
     * @param $id
     * @param $contact
     * @return mixed
     */

    public function editnewcontactemailaddreesspost($id, $contact){

        $email = email::find($id);
        $email->fill(Input::all());
        $email->contact_id = $contact;


        if($email->save()){

            return Redirect::to("/viewContactDetails/$contact")->with('message', 'update operation completed');
        }else{
            return Redirect::back()->withInput()->withErrors($email->getErrors());

        }


    }


    /**
     * @param $id
     * @return mixed
     */
    public function addnewcontactwebsiteurl($id){

        $wp = Websitetype::lists('website_type', 'id');

        return View::make('contact.addnewcontactwebsiteurl')->with(['wp'=>$wp]);

    }


    /**
     * @param $id
     * @return mixed
     */
    public  function addnewcontactwebsiteurlpost($id){

        $web = new Website(Input::all());

        $web->contact_id = $id;

        if($web->save()){

            return Redirect::to("/viewContactDetails/$id")->with('message', 'operation completed');

        }else{
            return Redirect::back()->withInput()->withErrors($web->getErrors());
        }

    }


    /**
     * @param $id
     * @param $contact
     * @return mixed
     */
    public function deletecontactwebsiteurl($id, $contact){

        $web = Website::find($id);

        if($web == null){
            return Redirect::to("/viewContactDetails/$contact")->with('message', 'Website or url not found');
        }else{

            $web->delete();
            return Redirect::to("/viewContactDetails/$contact")->with('message', 'Delete Operation was succcessful');
        }

    }


    /**
     * @param $id
     * @param $contact
     * @return mixed
     */

    public function editcontactwebsiteurl($id, $contact){

        $website = Website::find($id);

        $wp = Websitetype::lists('website_type', 'id');


        if($website == null){
            return Redirect::to("/viewContactDetails/$contact")->with('message', 'Email address not found');
        }else{

            return View::make('contact.editcontactwebsiteurl')->with(['website'=>$website, 'wp'=>$wp]);
        }


    }


    /**
     * @param $id
     * @param $contact
     * @return mixed
     */
    public  function editcontactwebsiteurlpost($id, $contact){
        $website = Website::find($id);
        $website->fill(Input::all());
        $website->contact_id = $contact;



        if($website->save()){

            return Redirect::to("/viewContactDetails/$contact")->with('message', 'update operation completed');
        }else{
            return Redirect::back()->withInput()->withErrors($website->getErrors());

        }

    }






    public function editcontactperosnaldetails($id){

        $contact = Contact::find($id);
        $ct = Contacttype::lists('contact_type', 'id');

        if($contact==null){

          return Redirect::to('/list/all')->with('message', 'an error occured');

        }else{


            return View::make('contact.editcontactperosnaldetails')->with(['ct'=>$ct, 'contact'=>$contact]);

        }
    }





    public function editcontactperosnaldetailspost($id){
        $contact = Contact::find($id);
        $contact->fill(Input::all());


        if($contact->save()){

            return Redirect::to("/list/all")->with('message', 'update operation completed');
        }else{
            return Redirect::back()->withInput()->withErrors($contact->getErrors());

        }

    }


}