<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">
		
		form {
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 40%;
  border-radius: 50%;
}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}
	</style>
</head>
<body>
<center><h1 style="color: red;">Registration Form</h1></center>

<form action="{{URL::to('/store')}}" method="post" >
  <!-- <div class="imgcontainer">
    <img src="login.png" alt="Avatar" class="avatar">
  </div> -->

  <div class="container">
    <label for="uname"><b>Name</b></label>
    <input type="text" placeholder="Enter name" name="name" required>

    <label for="Email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <input type="hidden"  name="_token" value="{{csrf_token()}}">

    

    <button type="submit">Register</button>
    
  </div>

  <div class="container" style="background-color:#f1f1f1">
     <button type="button" class="cancelbtn"><a href="/">Home</a></button>
    <span class="psw">Login <a href="login.blade.php">Here!</a></span>
  </div>
</form>
</body>
</html>