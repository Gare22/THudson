<?php

$target_dir = "../imgs/galleries/" . $_POST['gallery'] . "/";

echo($target_dir);

echo("<br><br><br>");


for($i=0; $i<count($_FILES['filesToUpload']['name']); $i++){
    $target_path = $target_dir . $_FILES['filesToUpload']['name'][$i];

    if(move_uploaded_file($_FILES['filesToUpload']['tmp_name'][$i], $target_path)){
        echo("file uploaded successfully");
        echo("<BR><BR><BR>");
    }else{
        echo("there was an error uploading your files");
    }
}
?>