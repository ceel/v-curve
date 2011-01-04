<?php
# moods-service.php

# Load dependencies
# require('../lib/mood.php');

class MoodService
{
    function setMood($userKey, $moodValue, $moodComment)
    {
        return array(0, "success");
/*
        $returnValue = addMood($userKey, $moodValue, $moodComment);
        if ($returnValue['errorCode'] != '')
        {
            throw new SoapFault("Server", $returnValue['errorString']);
        }
*/
    }
}

# DEBUG: Do not cache wsdls while developing...
ini_set("soap.wsdl_cache_enabled", "0");

# Create the SOAP server
$server = new SoapServer("../config/moods.wsdl");
$server->setClass("MoodService");
$server->handle();

?>
