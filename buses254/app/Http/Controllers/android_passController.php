<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\android_pass; //model being used

class android_passController extends Controller
{
    //This is controller stores passenger registration data received from the android App
    public function pass_registration ()
    {


    	//GET THE DATA

    	$fname = $_POST['fname']; 
    	$lname = $_POST['lname']; 
    	$idno =  $_POST['id_no']; 
    	$phno =  $_POST['phn_no']; 
    	$email =  $_POST['email']; 
    	$password = $_POST['password']; 


    	// VERIFY THE DATA


    	

 		//STORE THE DATA

            $passenger = new android_pass;

            

            $passenger->fname = $fname;
            $passenger->lname = $lname;
            $passenger->id_no = $idno;
		    $passenger->phn_no = $phno;
		    $passenger->email = $email;
		    $passenger->password = $password;

           if($passenger->save()){
           	echo "Registration Was Successful";

           }

           else{

           	echo "Registration Was Unsuccessful!! Try Again";
           }

//return $passenger ;
}
}

?>