<?php
    class Contact
    {
      public $name;
      public $address;
      public $phone_number;


      function __construct($name, $address, $phone_number)
      {
        $this->name = $name;
        $this->address = $address;
        $this->phone_number = $phone_number;
      }

    }