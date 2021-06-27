<?php

$host = "localhost"; // الخاص بالسيرفر ip اسم السيرفر أو 
$username = "root";    // اسم المستخدم الخاص بقاعدة البيانات
$password = "";  // كلمة المرور الخاصة بقاعدة البيانات
$dbname = "interface"; // إسم قاعدة البيانات الخاصة بك 

// انشاء الاتصال
$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error)
{
    echo "Connection failed! " . $conn->connect_error;
}
else
{
  echo "Connected successfully....";
}

//--------------------------------------//
$Left  =  $_POST['Left_value'];
$Right =  $_POST['Right_value'];
$Stop  =  $_POST['Stop_value'];
$Backward  =  $_POST['Backward_value'];
$Forward  =  $_POST['Forward_value'];


if(isset($_POST['left'])){  //  عند الضغط على زر الإرسال سيتم تخزين البيانات فقط 


    
  $my_query = "select * from int_base";
  $result = mysqli_query($conn, $my_query);

  $my_query = "INSERT INTO int_base (Left_value)
  VALUES ('$Left')";
  
  
  $result = mysqli_query($conn, $my_query);
  if($result)
  {
      echo "The data has been stored successfully...";
  }
  else{
      echo "An error occurred!!!, please check the code and try again. <br>";
  }


}else if(isset($_POST['right'])){  //  عند الضغط على زر الإرسال سيتم تخزين البيانات فقط 


    
  $my_query = "select * from int_base";
  $result = mysqli_query($conn, $my_query);

  $my_query = "INSERT INTO int_base (Right_value)
  VALUES ('$Right')";
  
  
  $result = mysqli_query($conn, $my_query);
  if($result)
  {
      echo "The data has been stored successfully...";
  }
  else{
      echo "An error occurred!!!, please check the code and try again. <br>";
  }


}else if(isset($_POST['stop'])){  //  عند الضغط على زر الإرسال سيتم تخزين البيانات فقط 


    
  $my_query = "select * from int_base";
  $result = mysqli_query($conn, $my_query);

  $my_query = "INSERT INTO int_base (Stop_value)
  VALUES ('$Stop')";
  
  
  $result = mysqli_query($conn, $my_query);
  if($result)
  {
      echo "The data has been stored successfully...";
  }
  else{
      echo "An error occurred!!!, please check the code and try again. <br>";
  }


}else if(isset($_POST['backward'])){  //  عند الضغط على زر الإرسال سيتم تخزين البيانات فقط 


    
  $my_query = "select * from int_base";
  $result = mysqli_query($conn, $my_query);

  $my_query = "INSERT INTO int_base (Backward_value)
  VALUES ('$Backward')";
  
  
  $result = mysqli_query($conn, $my_query);
  if($result)
  {
      echo "The data has been stored successfully...";
  }
  else{
      echo "An error occurred!!!, please check the code and try again. <br>";
  }


}else if(isset($_POST['forward'])){  //  عند الضغط على زر الإرسال سيتم تخزين البيانات فقط 


    
  $my_query = "select * from int_base";
  $result = mysqli_query($conn, $my_query);

  $my_query = "INSERT INTO int_base (Forward_value)
  VALUES ('$Forward')";
  
  
  $result = mysqli_query($conn, $my_query);
  if($result)
  {
      echo "The data has been stored successfully...";
  }
  else{
      echo "An error occurred!!!, please check the code and try again. <br>";
  }


}
$conn->close(); // إغلاق الإتصال 




?>