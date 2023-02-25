<?php
$path = "TestFolder";
$result = scandir($path);
if(!file_exists("TestFolder2")){
    mkdir("TestFolder2");
}
// copy files from one folder to another
copy('fileDirectories.php','TestFolder/fileDirectories2.php');
var_dump($result);