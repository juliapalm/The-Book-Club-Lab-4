<?php

#first you have to start a session
session_start();

#assign a value to the $_SESSION superglobal array

$_SESSION['userid']=1;

#unset using unset 

#unset($_SESSION['userid']);

#check if set

if (isset($_SESSION['userid']))
    echo $_SESSION['userid'];
else
    echo "Not set";

#if you want to remove all session values, use session_destroy

#session_destroy();

?>