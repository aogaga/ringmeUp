<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 5/6/15
 * Time: 5:41 AM
 */

class DirContact {

        /*
         * id
         * @var string
         */
    public $id;

    /**
     *
     * @var string
     */
    public $firstname;

    /**
     * @var string
     */
    public  $lastname;
    /**
     * @var string
     */
    public $middlename;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $occupation;

    /**
     * @var string
     */
    public $businessname;

    /**
     * @var string
     */
    public $contacttype_id;

    /*
     * @var string
     */
    public $created_at;
    /**
     * @var string
     */
    public $updated_at;
    /*
     * @var string
     */
    public $relevance;

    /*
     * @var ContactAddress
     */
    public $addresses;


    /**
     * @var ContactEmails
     */
    public  $emails;

    /*
     * @var ContactTel
     */
    public $phones;

    /**
     * @var ContactWebsites
     */
    public $websites;


}