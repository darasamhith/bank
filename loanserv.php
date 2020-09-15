<?php
session_start();
if(isset($_POST['submit'])){
  if(empty($_POST['amount'])){
    $error = "account or amount cannot be empty";
    echo "$error";
  }
  else
  {
    $conn = mysqli_connect("localhost", "root", "samhith");
    //Selecting Database
    $db = mysqli_select_db($conn, "bank");
    $asd=$_SESSION['Email'];
    $am=mysqli_real_escape_string($conn, $_POST['amount']);
    $pu=mysqli_real_escape_string($conn, $_POST['purpose']);
    $currentDir = getcwd();
    $uploadDirectory = "/uploads/";
    function file_get_content($filename)
      {
      $handle = fopen($filename, "rb");
      $contents = fread($handle, filesize($filename));
      fclose($handle);
       return $contents;
      }

    $errors = []; // Store all foreseen and unforseen errors here

    $fileExtensions = ['jpeg','jpg','png']; // Get all the file extensions

    $fileName = $_FILES['myfile']['name'];
    $fileSize = $_FILES['myfile']['size'];
    $fileTmpName  = $_FILES['myfile']['tmp_name'];

    $fileType = $_FILES['myfile']['type'];

    $uploadPath = $currentDir . $uploadDirectory . basename($fileName);

    if (isset($_POST['submit'])) {



        if ($fileSize > 2000000) {
            $errors[] = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";
        }

        if (empty($errors)) {
            $didUpload = move_uploaded_file($fileTmpName, $uploadPath);
            $_SESSION['path']=$uploadPath;

            if ($didUpload) {
                echo "The file " . basename($fileName) . " has been uploaded";
                $filedata  =mysqli_real_escape_string($conn,file_get_contents($uploadPath));
                $sql="INSERT into loan(acc_no,loan_amt,purpose,filename,documents) values('$asd','$am','$pu','$fileName','$filedata')";
                if(mysqli_query($conn,$sql)){
                  echo "upload success";
            } else {
                echo "An error occurred somewhere. Try again or contact the admin".$conn->error;
            }
        } else {
            foreach ($errors as $error) {
                echo $error . "These are the errors" . "\n";
            }
        }
    }
  }
}
}


?>
