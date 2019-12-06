<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>registration form</title>
  </head>
  <body style="background-color: silver;">
    <h1 style="text-align: center;color: indigo;font-size: 45px;margin-bottom:10px">REGISTRATION FORM</h1>
<!--first column-->
<form action="">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                

            <label for="firstname"><b>First name</label></b>
            <input type="text" class="form-control" id="validationTooltip01" value="Enter firstname" required>
            <br>
            <label for="lastname"><b>Last name</label></b>
            <input type="text" class="form-control" id="validationTooltip01" value="Enter Lastname" required>
            <br>
            <label for="email"><b>Email</label></b>
            <input type="email" class="form-control" id="validationTooltip01" value="xyz@exampe.com" required>                       
                       <br>
             <label for="phone"><b>Phone</label></b>
             <input type="tel" class="form-control" id="validationTooltip01" value="+254" required>      
           <br>
   
   <h6><b>Gender</h6></b>
   <div class="form-check">
   <input type="radio" name="gender" value="male" checked> Male
  <input type="radio" name="gender" value="female"> Female
  <input type="radio" name="gender" value="other"> Other
          </label>

         
        </div>
      

        <br>

<div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Terms and Conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
            </div>

            <!--end of first row-->

            <div class="col-md-6">
                

                    <label for="firstname"><b>Date of Birth</label></b>
                    <input type="date" class="form-control" id="validationTooltip01" value="dd/mm/yyyy" required>
                    <br>

<h6><b><Languages</h6></b>
                    <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  <label class="form-check-label" for="inlineCheckbox1">HTML</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">CSS</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  <label class="form-check-label" for="inlineCheckbox1">PHP</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">JS</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  <label class="form-check-label" for="inlineCheckbox1">GO</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">JQUERY</label>
</div>
<br><br>
                    <label for="lastname"><b>Hobbies and Talents</label></b>
                    <select class="custom-select">
                     <option selected>---</option>
                      <option value="1">coding</option>
                      <option value="2">programming</option>
                       <option value="3">developing</option>
                            </select>
                   
                    <br>
                    <label for="password"><b>Password</label></b>
                    <input type="password" class="form-control" id="validationTooltip01" value="" required>                       
                               <br>
                     <label for="password"><b>Retype Password</label></b>
                    <input type="password" class="form-control" id="validationTooltip01" value="" required>      
                    </div>
        

            
       
    </div>
</div>
</form>

<footer>
<button class="btn btn-primary btn-md btn-block" type="submit" style="background-color: green; border-radius:40px;">REGISTER</button>

</footer>

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>