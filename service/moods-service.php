<?php
# moods-service.php

# Load dependencies
# require_once('../lib/mood.php');

class MoodService
{
    function setMood($userKey, $moodValue, $moodComment)
    {
        if (strlen($userKey) == 0) {
            throw new SoapFault("Server", "Invalid userkey '".$userKey."'");
        }

        if (!is_bool($moodValue)) {
            throw new SoapFault("Server", "Invalid mood value '".$moodValue."'");
        }

        if (strlen($moodComment) > 140) {
            throw new SoapFault("Server", "Comment exceeds maximum length of 140 characters");
        }

/*
        $returnValue = addMood($userKey, $moodValue, $moodComment);
        if ($returnValue['errorCode'] != ERROR_NONE)
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
