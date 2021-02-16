<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

    <link rel="stylesheet" href="Task7.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src = "script.js"> </script>
    <style>
        body{
    background-color: rgb(158, 184, 178);
}

input[type=text] {
  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  }

  input[type=number] {
    width: 40%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  input[type=email] {
    width: 40%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  input[type=submit] {
    width: 20%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  input[type=submit]:hover {
    background-color: #45a049;
  }
  
  .h5{
      color: rgb(0, 255, 106);
  }
  
    </style>
</head>
<body>
    
    <center><form id="regForm" method="POST" action="reg.php">
    <h1>Registration Form</h1>
    Name: <br>
    <input type="text" id="name" name="name" placeholder = "Your name.." required><br><br>
    Email: <br>
    <input type="email" name="email" id="email" placeholder = "Your email.." required><br><br>
    Mobile No: <br>
    <input type="number" name="phone" id="phone" placeholder = "Your mobile no.." required><br><br>
    <input type="submit" name="submit" id="submit" value="submit">
    </form></center>
</body>


</html>