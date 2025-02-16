<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
$nameErr = $emailErr = $genderErr = $websiteErr = "";

$name = $email = $gender = $comment = $website = "";

if(isset($_POST["submit"])){

  if (empty($_POST["name"])) {
    $nameErr = "من فضلك اكتب الاسم";
  } 
  else {$name = ($_POST["name"]);}
  


  if (empty($_POST["email"])) {
    $emailErr = "برجاء كتابة الايميل";
  } 

  else {$email = ($_POST["email"]);}


    
  if (empty($_POST["website"])) {
    $websiteErr = "برجاء تحديد الموقع الالكتروني";
  } 
  else {$website = ($_POST["website"]);}


  if (empty($_POST["comment"])) {
    $comment = "";
  }

   else {$comment = ($_POST["comment"]);}

  if (empty($_POST["gender"])) {
    $genderErr = "برجاء تحديد الجنس";
  } 

  else { $gender = ($_POST["gender"]);}
}


?>

<h2>PHP Form Validation Example</h2>

<form method="post" action="<?php echo ($_SERVER["PHP_SELF"]);?>">

  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>

  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>

  Website: <input type="text" name="website">
  <span class="error">*<?php echo $websiteErr;?></span>
  <br><br>

  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>

  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>

  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>