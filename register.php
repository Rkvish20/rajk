<?php
$conn = mysqli_connect('localhost', 'root', '','bootstrap');


if(isset($_POST['registerData']))
{
$Name=$_POST['Name'];
$DOB =$_POST['DOB'];
$Gender=$_POST['Gender'];
$BloodGroup=$_POST['BloodGroup'];
$PhoneNo=$_POST['PhoneNo'];
$city=$_POST['city'];
$Address=$_POST['Address'];
$DoYouHaveAnyDeases=$_POST['DoYouHaveAnyDeases'];
$AreYouAbove18YeaOld=$_POST['AreYouAbove18YeaOld'];
$RemeberMe=$_POST['RemeberMe'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];


$query_run = "INSERT INTO `bb`(`Name`, `DOB`, `Gender`, `BloodGroup`, `PhoneNo`, 
`city`, `Address`, `DoYouHaveAnyDeases`, `AreYouAbove18YeaOld`, `RemeberMe`, 
`Email`, `Password`) VALUES ('$Name','$DOB','$Gender','$BloodGroup','$PhoneNo',
'$city','$Address','$DoYouHaveAnyDeases','$AreYouAbove18YeaOld','$RemeberMe',
'$Email','$Password')"

mysqli_query($conn,$query);

if($query_run)
{
    echo' <script> alert("Data saved");
    </script> ';
    header('Location:register.html');
}
else
{
    echo' <script> alert("Data not saved");
    </script> ';
   
}
}
?>