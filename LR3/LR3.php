<?php

function get_struct($dir){
    $fileList = glob("$dir/*");
    foreach($fileList as $filename){ 
       if (is_dir($filename)){
            echo $filename. "<span style=\"font-weight: bold;\">| Size:</span>" , get_dir_size($filename)/1000, ' KB',
            "<span style=\"font-weight: bold;\"> Edited:</span>".date ("F d Y H:i:s.", filemtime($filename)),
            "<span style=\"font-weight: bold;\"> Created:</span>".date ("F d Y H:i:s.", filectime($filename)),
            "<span style=\"font-weight: bold;\"> Used:</span>".date ("F d Y H:i:s.", fileatime($filename)),'</br>';
            get_struct($filename);
        }
        else {
            echo $filename. "<span style=\"font-weight: bold;\">| Size:</span>".filesize($filename)/1000, ' KB',
            "<span style=\"font-weight: bold;\"> Created:</span>".date ("F d Y H:i:s.", filectime($filename)),
            "<span style=\"font-weight: bold;\"> Edited:</span>".date ("F d Y H:i:s.", filemtime($filename)),
            "<span style=\"font-weight: bold;\"> Used:</span>".date ("F d Y H:i:s.", fileatime($filename)),'</br>';
            $ext = substr(strrchr($filename,'.'),1);
            if ($ext=='txt' || $ext == 'docx'){
                $handle = fopen($filename, "rb");
                $contents = fread($handle, 100);
                echo"<p style=\"color: red;\"> $contents </p>";
                fclose($handle);
            }
        }
    }
}

function get_dir_size ($dir){
    $size = 0;
    foreach (glob(rtrim($dir, '/').'/*', GLOB_NOSORT) as $each) {
        $size += is_file($each) ? filesize($each) : get_dir_size($each);
    }
    return $size;
}

function get_pic_size ($dir){
       $pic_size = 0;
    $fileList = glob("$dir/*");
    foreach($fileList as $filename){ 
        if (is_dir($filename))
            $pic_size+=get_pic_size($filename);
        $ext = substr(strrchr($filename,'.'),1);
        if ($ext=='jpg' || $ext == 'png' || $ext=='jpeg'){
            $pic_size+=filesize($filename);}
    }
    return $pic_size;
}

function get_part($addr){
    return round(get_pic_size($addr)*100/get_dir_size($addr), 2);
}


if(!empty($_POST))
{
    get_struct($_POST['fdir']);
    echo '<hr/>';
    echo 'DIR '.$_POST['pdir'].' SIZE = '.get_dir_size($_POST['pdir']).' KB'.'</br>';
    echo 'PICS SIZE= '.get_pic_size($_POST['pdir']).' KB'.'</br>';
    echo 'PICS IS '.get_part($_POST['pdir']).' % OF THE TOTAL FILE VOLUME'.'</br>';
}
require_once('LR3.html');
?>