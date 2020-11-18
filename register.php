<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript">
    function check()
    {

    var mobile = document.getElementById('contact');
   
    
    var message = document.getElementById('message');

   var goodColor = "red";
    var badColor = "blue";
  
    if(mobile.value.length!=10)
    {
        mobile.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "required 10 digits, match requested format!"
    }
  }
    
  </script>
</head>
<body>
	<?php
  error_reporting(E_ALL);

              include 'model.php';
              $model = new Model();
              $insert = $model->insert($_POST);
        

    ?>
<form  action="" method="POST" enctype="multipart/form-data"> 
 <label for="Event">Event cartagory:</label>
  <select id="event" name="event">
    <option value="event1">saturday event1</option>
    <option value="event2">sunday event2</option>
    
  </select>
<br>
Image choice1:
<input type="file" name="image" id="img" placeholder="image" required>
<br>
Starat Date:
<input type="date" name="fromdate" placeholder="startdate" min="01-11-2020" max='30-11-2020' required>
<br>
End Date:
<input type="month" name="todate" placeholder="enddate" min='01-11-2020' max='30-11-2020' required>
<br>
School Name:
<input type="text" name="school" id="school" placeholder="schoolname" required pattern="[0-9a-zA-Z_.-]*">
<br>
Event Name:
<input type="text" name="eventname" id="eventname" placeholder="eventname" required pattern=
"[0-9a-zA-Z_.-]*">
<br>
No Of Students:
<input type="number" name="student" id="student"  placeholder="studentdetails" min="0" max="9999"  required >
<br>
Contact Number:
<input type="number" name="contact" id="contact"  onkeyup="check(); return false;" required pattern="[789][0-9]{9}"><span id="message"></span>
<br>

<input type="submit"  name="submit" value="Register" > 
</form>
</body>
</html>
















