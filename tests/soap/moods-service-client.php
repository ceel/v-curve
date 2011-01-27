<?php
# moods-service-client.php


# setup this stuff in some config
if (!defined('SIMPLE_TEST')) {
    define('SIMPLE_TEST', '../simpletest/');
}

require_once(SIMPLE_TEST . 'autorun.php');

# DEBUG: Do not cache wsdls while developing...
ini_set("soap.wsdl_cache_enabled", "0");

class TestServiceInterface extends UnitTestCase {
    public $client;

    function setUp() {
        $this->client = new SoapClient('../../config/moods.wsdl');
    }

    function tearDown() {}

    function testAddMoodSuccess() {
        try {
            $this->client->setMood('1337U53R', true, 'Lorem ipsum dolor sit amet...');
        } catch (SoapFault $e) {
            $this->assertTrue(false, "Received exception with valid call: ".$e->faultstring);
        }
        $this->assertTrue(true);
    }

    function testAddMoodMissingParamUserId() {
        $this->expectException('SoapFault');
        $this->client->setMood('', false, 'Lorem ipsum dolor sit amet...');
    }

    function testAddMoodMissingParamUserMood() {
        $this->expectException('SoapFault');
        $this->client->setMood('1337U53R', '', 'Lorem ipsum dolor sit amet...');
    }

    function testAddMoodTooLongComment() {
        $str = 'Lorem ipsum dolor sit amet ';
        for ($i=0; $i < 4; $i++) { $str = $str . $str; }
        $this->expectException('SoapFault');
        $this->client->setMood('1337U53R', true, $str);
    }
}
?>
