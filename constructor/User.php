<?php
class User {
    // melakukan registrasi properti global
    public $id, $name, $email, $address, $role;

    // constructor nilai default

    //constructor dengan variable parameter
    public function __construct( $id, $name, $email, $address, $role ) 
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->address = $address;
        $this->role = $role;

    } 
}
