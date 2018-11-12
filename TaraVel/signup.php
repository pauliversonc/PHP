<?php
  include_once 'header.php';
?>

<br><br>

<div class="row">
<div class="columnxxx" style=" height: 1000px;  position: center; width: 50%; "></div>
<div class="column" style=" height: auto;  position: center; width: 50%;  ">

  <fieldset>
    <div class="form-group">
    <legend style="padding: 20px;">Sign up Now!</legend>

      <form action="includes/signup.inc.php" method="POST" style="width: auto; ">

      <label for="exampleInputEmail1" style="margin-left: 40px;">First name</label>
      <input type="text" class="form-control" name="first"  aria-describedby="emailHelp"  style="width: 600px; margin-left: 5%; ">
      <small id="emailHelp" class="form-text text-muted" style="margin-left: 40px;">Please Input your real name.</small><br>

      <label for="exampleInputEmail1" style="margin-left: 40px;">Last name</label>
      <input type="text" class="form-control" name="last"  aria-describedby="emailHelp"  style="width: 600px; margin-left: 5%; "><br>

      <label for="exampleInputEmail1" style="margin-left: 40px;">Middle name</label>
      <input type="text" class="form-control" name="mname"  aria-describedby="emailHelp"  style="width: 600px; margin-left: 5%; "><br>

      <label for="exampleInputEmail1" style="margin-left: 40px;">Email address</label>
      <input type="email" class="form-control" name="email"  aria-describedby="emailHelp" style="width: 600px; margin-left: 5%; ">
      <small id="emailHelp" class="form-text text-muted" style="margin-left: 40px;">We'll never share your email with anyone else.</small><br>

      <div class="form-check">
        <label class="form-check-label " style="margin-left: 5%;" >
          <input type="radio" class="form-check-input" name="sex" id="sex" checked value="Male">
          Male
        </label>

         <label class="form-check-label" style="margin-left: 25px;">
          <input type="radio" class="form-check-input" name="sex" id="sex" value="Female">
          Female
        </label>
      </div>
        <br>  <label for="exampleInputEmail1" style="margin-left: 40px;">Date of Birth</label>
      <input type="date" class="form-control" name="bday"  style="width: 600px; margin-left: 5%; " required>
      <br>

      <label for="exampleInputEmail1" style="margin-left: 40px;">Address</label>
      <input type="text" class="form-control" name="address"  aria-describedby="emailHelp"  style="width: 600px; height: 70px; margin-left: 5%; padding-top: 0px; padding-left: 0px ">
     <br>


      <label for="exampleInputEmail1" style="margin-left: 40px;">Sign up as!</label>
      <select class="form-control" name="type"  aria-describedby="emailHelp"  style="width: 600px; margin-left: 5%;">
           <option  name="type">TaraVeler</option>
           <option name="type">Business Owner</option>
      </select>

      <br>




      <label for="exampleInputEmail1" style="margin-left: 40px;">Username</label>
      <input type="text" class="form-control" name="uid"  aria-describedby="emailHelp"  style="width: 600px; margin-left: 5%; ">
      <small id="emailHelp" class="form-text text-muted" style="margin-left: 40px;">Username will be use to login.</small><br>

      <label for="exampleInputPassword1"style="margin-left: 40px;">Password</label>
      <input type="password" class="form-control" name="pwd" id="pwds" style="width: 600px; margin-left: 5%; " placeholder="8  to 16 characters">
      <small id="emailHelp" class="form-text text-muted" style="margin-left: 40px;">Only the user will know their password.</small><br>

      <label for="exampleInputPassword1"style="margin-left: 40px;">Confirm Password</label>
      <input type="password" class="form-control" name="pwdchk" id="pwdchks" style="width: 600px; margin-left: 5%; ">

      <div class="form-check">
        <label class="form-check-label" >
          <input class="form-check-input" style="margin-left: 2%;" type="checkbox" onclick="myFunction()"><br>
          <small id="emailHelp" class="form-text text-muted" style="margin-left: 40px; margin-top: -18px; ">Show Password</small><br>
       
      </div>


    

     <script>
function myFunction() {
    var x = document.getElementById("pwds");
    var y = document.getElementById("pwdchks");
    if (x.type === "password" && y.type === "password" ) {
        x.type = "text";
        y.type = "text";
    } else {
        x.type = "password";
        y.type = "password";
    }
}
</script>
<br><br>
      <button type="submit" name="submit" class="btn btn-primary" style="width: 200px;margin-left: 33%;">Sign Up!</button> <br><br>
      <label for="exampleInputPassword1"style="margin-left: 160px;">Already have an account?<a href="login.php"> Click here to Sign in!</a></label>

      </form>
    </div>
  </fieldset>
</div>
</div>

<?php
  include_once 'footer.php';
?>

