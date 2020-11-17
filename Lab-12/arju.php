<?php

$allow = array("jpg", "gif", "png");
$todir = 'uploads/';
if ( !!$_FILES['image']['tmp_name'] ) 
{
    $info = explode('.', strtolower( $_FILES['image']['name']) ); 
    if ( in_array( end($info), $allow) ) 
    {
        if ( move_uploaded_file( $_FILES['image']['tmp_name'], $todir . basename($_FILES['image']['name'] ) ) )
        {
           echo "your uploaded the file :".$_FILES['image']['name'];
        }
    }
    else
    {
        echo ".Invalid File";
    }
}




?>