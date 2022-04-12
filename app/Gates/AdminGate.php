<?php 
namespace App\Gates;


class AdminGate{
  public function check_admin($user){
           if($user->email=== "danish3311@gmail.com"){
               return true;
           }else{
               return false;
           }
        }
}