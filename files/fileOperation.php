<?php
$fileName = "MyFolder.txt";

if (file_exists($fileName)){
    echo "File exists". PHP_EOL;
    // check if it is a directory
    if(is_dir($fileName)){
        die("it is a directory not file");
    }
    // copy file
    // copy($fileName,"copyfile.txt");
    // copy("copyfile.txt","copyfile1.txt");
    // open file
    $fileHandler = fopen($fileName, "r");
    $fileSize = filesize($fileName);
    $contant = fread($fileHandler,$fileSize);
    echo $contant. PHP_EOL;
}else{
echo "file or directory not found". PHP_EOL;
die("no such file or directory");
}