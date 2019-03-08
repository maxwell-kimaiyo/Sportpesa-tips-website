<?php
require_once 'core/init.php';
if (Input::exists()) {
  if(Token::check(Input::get('token'))){
  $validate = new Validate();
   $validation = $validate->check($_POST, array(
    'username' =>array(
     'required'=>true,
     'min' => 2,
     'max' => 20,
      'unique'=> 'user'),
      'password'=>array(
        'required'=> true,
        'min' => 4,
        'max'=>4),
      'phone' => array(
     'required'=>true,
     'min' => 10,
     'max' => 20 )
      ));
   if ($validation->passed()) {
    Session::flash('success','You are registered');
    header('Location:indexs.php');
   }else{
foreach ($validation->errors() as $error);
echo $error;
   }
 }
}
   ?>
  
<!DOCTYPE HTML> 
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="assets/css/register.css" />
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
       
   </head>


<center>
<div class="wrapper">
  <h1>Add User</h1>
  <form class="form" method="post" action="">
    <input type="text" name ="username" placeholder="UserName" value="<?php echo escape(Input::get('username')); ?>" autocomplete="off">
    <input type="text" name="phone" placeholder="Phone No" autocomplete="off" >
    <input type="password" name="password" placeholder="password" autocomplete="off" >
    <input type="hidden" name="token" value="<?php echo Token::generate();?>">
    <input type="submit" class="submit" value="Register">

  </form>
</div></center>
</body>
</html>