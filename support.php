<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  


<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="support.php">  
  Name: <input type="text" name="name" value="E">
  <span class="error">* </span>
  <br><br>
  E-mail: <input type="text" name="email" value="E@gmail.com">
  <span class="error">* </span>
  <br><br>
  Website: <input type="text" name="website" value="https://e.com/">
  <span class="error"></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40">E</textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender"  value="female">Female
  <input type="radio" name="gender"  value="male">Male
  <input type="radio" name="gender" checked value="other">Other  
  <span class="error">* </span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<h2>Your Input:</h2>E<br>E@gmail.com<br>https://e.com/<br>E<br>other
</body>
</html>