<?php

use App\View\LoginView;

include('./template/navbar.php'); 
require_once('./app/view/LoginView.php');
$view=new LoginView ();
if(isset($_POST["julian"]))
{
  echo "hello";
}
?>
<div class="m-3">
<h1>Login</h1>
<div class="card flex m-5 p-5 bg-secondary bg-opacity-10">
<form method="post" action="" class="">
<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input name="user" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input   name="julian" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
<?php include('./template/footer.php'); ?>