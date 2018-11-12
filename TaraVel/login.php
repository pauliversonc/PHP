<?php
  include_once 'header.php';
?>

<div class="row">
  <div class="columnloginleft" style=" height: 800px;  position: center; width: 50%;"></div>
<div class="column" style=" height: 800px;  position: center; width: 50%;  ">

  <fieldset>
    <div class="form-group">
    <legend style="padding: 20px; padding-top: 50px;">Log in Now!</legend>
      <form action="includes/login.inc.php" method="POST" style="width: auto;">

      <label for="exampleInputEmail1" style="margin-left: 40px;">Username</label>
      <input type="text" class="form-control" name="uid"  aria-describedby="emailHelp" placeholder="Enter Username" style="width: 600px; margin-left: 5%; ">
      <small id="emailHelp" class="form-text text-muted" style="margin-left: 40px;">Username will be use to login.</small><br>

      <label for="exampleInputPassword1"style="margin-left: 40px;">Password</label>
      <input type="password" class="form-control" name="pwd" id="pwds" placeholder="Password"style="width: 600px; margin-left: 5%; ">
      <small id="emailHelp" class="form-text text-muted" style="margin-left: 40px;">Only the user will know their password.</small><br>

       <div class="form-check">
        <label class="form-check-label" >
          <input class="form-check-input" style="margin-left: 3%;" type="checkbox" onclick="myFunction()"><br>
          <small id="emailHelp" class="form-text text-muted" style="margin-left: 45px; margin-top: -18px; ">Show Password</small><br>
       
      </div>

       <script>
function myFunction() {
    var x = document.getElementById("pwds");
    
    if (x.type === "password"  ) {
        x.type = "text";
        
    } else {
        x.type = "password";
   
    }
}
</script>

      <button type="submit" class="btn btn-primary" name="submit" style="width: 200px;margin-left: 33%;">Log in!</button><br><br>

      <label for="exampleInputPassword1"style="margin-left: 160px;">Don't have an account?<a href="signup.php"> Click here to Sign up!</a></label>
      </form>
    </div>
  </fieldset>
  </div>
</div>

<?php
  include_once 'footer.php';
?>