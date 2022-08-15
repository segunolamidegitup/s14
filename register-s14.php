<?php
/**
 * Register
 *
 * Plugin Name: Registration
 * Plugin URI:  https://wordpress.org/plugins/classic-editor/
 * Description: Register User
 * Version:     1.0.0
 * Author:      Studio 14

*/

 add_shortcode("s14register","s14register");

 function s14register($attr){
    // username, email, password, confirm password, gender (Male or Female) and Phone Number
    global $wpdb;

if(isset($_POST['username'])){
$username=$_POST['username'];
// $username=trim($username);
}

if(isset($_POST['email'])){
    $email=$_POST['email'];
    
}

if(isset($_POST['password'])){
    $password=$_POST['password'];
}


if(isset($_POST['confirm_password'])){
    $confirm_password=$_POST['confirm_password'];
}

if(isset($_POST['gender'])){
    $gender=$_POST['gender'];
}

if(isset($_POST['phone'])){
    $phone=$_POST['phone'];
}


//SUBMIT

// $wpdb->create("",array());






    echo "

    USERNAME: $username
    EMAIL: $email
    <div class='form-details'>

            <form class='register-form' action='' method='POST'>

                <div class='field'>
                    <label>Username: </label>
                    <input type='text' required value='' name='username' placeholder='Username'>
                </div>

                <div class='field'>
                    <label>Email: </label>
                    <input type='email'  required  value='' name='email' placeholder='Email'>
                </div>


                <div class='field'>
                    <label>Password: </label>
                    <input type='text'  required value='' name='password' placeholder='Password'>
                </div>

                <div class='field'>
                    <label>Confirm Password: </label>
                    <input type='text'  required value='' name='confirm_password' placeholder='Confirm Password'>
                </div>

                <div class='field'>
                    <label>Gender: </label>
                    <select required  name='gender'>
                        <option value='Male'> Male</option>
                        <option value='Female'> Female</option>

                    </select>
                </div>

                <div class='field'>
                    <label>Phone Number </label>
                    <input type='number'  required  name='phone' placeholder='+234...'>
                </div>

                <div class='field'>
                <input type='submit' value='Register'>
            </div>


            </form>

  </div>

        ";
            


 }//Shortcode Ends


// Enqueue Scripts
add_action("wp_enqueue_scripts","addscripts");
 function addscripts(){

// Include CSS
wp_enqueue_style("Main css",plugin_dir_url(__FILE__)."/assets/css/main.css","","","all");


 }