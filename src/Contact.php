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
      function save()
      {
        array_push($_SESSION['contacts'], $this);
      }
      static function getAll()
      {
        return $_SESSION['list_of_tasks'];
      }
    }