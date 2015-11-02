<?php

if(!empty($_FILES["fileToUpload"]["name"])){
  
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $_FILES["fileToUpload"]["name"])){
  
echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

}else{
  
echo "No File uploaded.";

}}else{
  
echo "No File uploaded.";

}

?>
