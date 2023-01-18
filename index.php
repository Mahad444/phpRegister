<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Register</a>
      </li>
      
      
    </ul>
  </div>
</nav>
    <h1>Hello, world!</h1>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <form>
  <div class="form-group">
    <label for="exampleInputEmail1">FirstName</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter firstname">
    <small id="emailHelp" class="form-text text-muted">fill in your name correctly</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">LastName</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter lastname">
    <small id="emailHelp" class="form-text text-muted">fill in your name correctly</small>
  </div>
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Course</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="course">
  </div>
  <button type="submit" class="btn btn-primary">Save Details</button>
</form>
  </body>
</html>
<?php
$firstname = $lastname = $email = $course = '';
$errors = array ('fistname' => 'Firstname cannot be empty','email'=>'Email must be a valid email ','course' => 'Course cannot be empty');
if (isset($_POST['save'])){
#Cheking for firstname validation
if(empty($_POST['firstname'])){
    $errors['firstname'];
}else{
    #echo $_POST['firstname];
    #echo $_POST['course];
    $firstname = $_POST['firstname'];
    if(!preg_match('/^[a-zA-Z\s]+/',$firstname)){
        $errors['firstname'];
    }
}

// Checking LastName Validation
if(empty($_POST['lastname'])){
    $errors['lastname'];
}else{
    #echo $_POST['firstname];
    #echo $_POST['course];
    $firstname = $_POST['lastname'];
    if(!preg_match('/^[a-zA-Z\s]+/',$firstname)){
        $errors['lastname'];
    }
}

// Checking Validation for Course

if(empty($_POST['course'])){
    $errors['course'];
}else{
    #echo $_POST['firstname];
    #echo $_POST['course];
    $firstname = $_POST['course'];
    if(!preg_match('/^[a-zA-Z\s]+/',$firstname)){
        $errors['course'];
    }
}

//checking Validation for email

if(empty($_POST['email'])){
    $errors['email'];
}else{
    $email= $_POST['email'];
    if(!filter_var($email , FILTER_VALIDATE_EMAIL)){
        $errors['email'];
    }
}

}

?>