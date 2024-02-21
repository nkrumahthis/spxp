<?php

$s = <<<xml
<?xml version="1.0" encoding="utf-8"?><soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema"><soap:Body><soap:Fault><faultcode>soap:Client</faultcode><faultstring>Server was unable to read request. ---&gt; There is an error in XML document (11, 86). ---&gt; Input string was not in a correct format.</faultstring><detail /></soap:Fault></soap:Body></soap:Envelope>
xml;

function removeBetweenMarkers($string, $startMarker, $endMarker)
{
    // Find the positions of the start and end markers
    $startPos = strpos($string, $startMarker);
    $endPos = strpos($string, $endMarker, $startPos);

    // If both markers are found
    if ($startPos !== false && $endPos !== false) {
        // Remove the substring between the markers
        $string = substr($string, 0, $startPos) . substr($string, $endPos + strlen($endMarker));
    }

    return $string;
}

function parse($s)
{
    if(gettype(strpos($s, "<?xml")) == "integer"){
        $s = removeBetweenMarkers($s, "<?xml", "?>");
    }

    return $s;
}

echo parse($s);
