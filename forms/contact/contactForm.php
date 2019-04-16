<?php
namespace app\forms;
         
use Craft;
use plugins\dolphiq\form\models\Form;

class contactForm extends Form {

 public $fullname = "";
 public $phone = "";
 public $email = "";
 public $message = "";

 public function rules()
 {
   return [
     [['fullname','email', 'message'], 'required'],
     ['email', 'email'],
     ['phone', 'safe']
   ];
 }

 public function attributeLabels()
 {
   return [
     'fullname' => Craft::t('site', 'Full Name'),
     'phone' => Craft::t('site', 'Phone'),
     'email' => Craft::t('site', 'Email'),
     'message' => Craft::t('site', 'Inquiry'),
   ];
 }
}