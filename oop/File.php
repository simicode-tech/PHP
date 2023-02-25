<?php

class Files{
    function displayContent($filename):bool{
        $result = true;
        try{
            echo "Read the content of the file:$filename". PHP_EOL;
            $content = file_get_contents($filename);
            echo "Display content of the file:$filename". PHP_EOL;
            echo $content;
        }catch(Exception $e){
            $result = false;
        }
        return $result;
    }
}
$file1 = new Files();

$file1->displayContent("Test.txt");