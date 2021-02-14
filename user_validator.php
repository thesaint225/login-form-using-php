<?php
// create a user validator class to handle validation
// constructor which taken in POST data from form validation
// check require "fields to check" are present in data 
// createmethods to validate individual fields
// -- a method to validate a username
// -- a method to vaidate email
//  return an error array once all checks are done

class UserValidator
{
    private $data;
    private $error = [];
    private static $fields = ['name', 'email', 'subject', 'message'];
    public function __construct($post_data)
    {
        $this->data = $post_data;
    }

    public function validadeForm()
    {
        // foreach (self::$fields as field) {
        //     if (!array_key_exists($field, $this->data)) {
        //     }
        }
        // foreach(self::$fields as $field){
        //     if(!array_key_exists($field, $this->data)){
        //       trigger_error("'$field' is not present in the data");
        //       return;
        //     }
    }

    private function ValidateName()
    {
    }
    private function ValidatePhone()
    {
    }

    private function ValidateEmail()
    {
    }
    private function validateSubject()
    {
    }
    private function ValidateMessage()
    {
    }
    private function addError()
    {
    }
}
