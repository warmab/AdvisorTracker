<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $client = new SoapClient("http://wstracker.site90.net/wsAdvisorTracker/service.php?wsdl", 
                                array("trace" => 1, "exceptions" => 0));

        $response = $client->welcome();
        print($response);
        
        ?>
    </body>
</html>
