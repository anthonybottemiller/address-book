<?php
    class Contact
    {
      private $name;
      private $address;
      private $phone_number;


      function __construct($name, $address, $phone_number)
      {
        $this->name = $name;
        $this->address = $address;
        $this->phone_number = $phone_number;
      }

      function setName($name)
      {
        $this->name = $name;
      }

      function getName()
      {
        return $this->name;
      }

      function setAddress($address)
      {
        $this->address = $address;
      }

      function getAddress()
      {
        return $this->address;
      }

      function setPhone($phone_number)
      {
        $this->phone_number = $phone_number;
      }

      function getPhone()
      {
        return $this->phone_number;
      }

      function save()
      {
        array_push($_SESSION['contacts'], $this);
      }

      static function getAll()
      {
        return $_SESSION['contacts'];
      }

      static function deleteAll()
      {
        $_SESSION['contacts'] = array();
      }
    }