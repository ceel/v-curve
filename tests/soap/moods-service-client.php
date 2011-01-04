<?php
# moods-service-client.php

    $client = new SoapClient("../../config/moods.wsdl");
    print_r($client->setMood("1337U53R", 1, "Commenting goes on on on...."));

?>
