<?php
$coming= $_POST['coming'];
$name= $_POST['name'];
$dinnernames= $_POST['dinnernames'];

$body = "
Are they attending?: $coming
Name: $name

$dinnernames

";

if ($coming=="Yes")
    {
    mail("sheryl.jang@gmail.com","RSVP Response",$body);
    header("Location:http://sherylandbrady.com/success.html");
    }
else
    {
    mail("sheryl.jang@gmail.com","RSVP Response",$body);
    header("Location:http://sherylandbrady.com/thankyou.html");
    }
?>
