<!DOCTYPE html>
<html>
<head>
    <title>Funciones network</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="w3.css">
    <style>
        body {font-family: "Montserrat", sans-serif;}
        div {width:90%;margin:auto;border:2px solid blue;padding: 10px;}
    </style>
    </head>
    <body class="w3-content" >
    
    <?php
    echo "<div class='w3-text-green'>";
    echo "<center><h3>ITGAM</h3>";
    echo "<h3>Programacion web</h3>";
    echo "<h2 class='w3-text-green'>Funciones de Redes </h2></center>";
    echo "</div>";

    echo "<div class='w3-text-blue'>";
    echo <<<desc1
    1) checkdnsrr()
    we can use the <b>checkdnsrr()</b>
    function to check our DNs record to verify the existence of a domain name or not
    desc1;
    $domain='w3schools.com';
    if(checkdnsrr($domain,"MX")) {
        echo "Passed";
    } else {
        echo "Failed";
    }
    echo "</div>";

    echo "<div class='w3-text-blue'>";
    echo <<<desc2
    <b>2) dns_get_mx()</br><br>
    Return details of mail exchanger records (Mx records)<br>:
    desc2;
    $domain="w3schools.com";
    if(dns_get_mx($domain,$mx_details)){
        foreach($mx_details as $Key=>$value){
            echo "$Key => $value <br>";
        }
    }
echo "</div>";

echo "<div class='w3-text-blue'>";
echo <<<desc3
<br>3) The gethostbyaddr()</br> fuction returns the domain name for a given IP address 
desc3;
$dirRemota=$_SERVER["REMOTE_ADDR"];
$host = gethostbyaddr($_SERVER["REMOTE_ADDR"]);
echo "<br>HOST $dirRemota: ".$host;
$host = gethostbyaddr("192.160.126.203");
echo "<br>HOST 192.160.126.203: ".$host;
$host = gethostbyaddr("8.8.8.8");
echo "<br>HOST 8.8.8.8: ".$host;
echo "</div>";

echo "<div class='w3-text-blue'>";
echo <<<desc4
<br>4)The gethostbyname()</b> fuction returns the IPv4 address for a given domain/host name
desc4;
$direccion="www.w3schools.com";
$ip = gethostbyname($direccion);
echo "<br>IP:".$ip." de ".$direccion;
$ipv6 = gethostbynamel($direccion);
echo "<br>IPv6:".$ip." de ".$direccion;

$direccion="www.google.com";
$ip = gethostbyname($direccion);
echo "<br>IP:".$ip." de ".$direccion;
$direccion="www.hostinger.mx";
$ip = gethostbyname($direccion);
echo "<br>IP:".$ip." de ".$direccion;
echo "</div>";

echo "<div class='w3-text-blue'>";
echo <<<desc5
5) The <b>gethostname()</b> function returns the host name fot the local machine
desc5;
echo "<br>Host name".gethostname();
echo "</div>";

echo "<div class='w3-text-blue'>";
echo <<<desc6
<br>6) getprotobyname(), getprotobynumber()</b>
desc6;

echo "<br>";
$protocolnum = getprotobyname("tcp");
echo $protocolnum;
echo "<br>";
$protocolnum = getprotobyname("udp");
echo $protocolnum;
echo "<br>";
$protocolname = getprotobynumber(17);
echo $protocolname;
echo "<br>";
echo "</div>";

echo "<div class='w3-text-blue'>";
echo <<<desc7
<br>7) getservbyname</b><br>
desc7;
$services = array("ftp", "ssh", 'nicname', 'gopher', 'finger', 'pop3' ,'www',
            "telnet", "http", "https");
foreach( $services as $index){
    echo getservbyname($index, "tcp")
    . ": " . $index . "<br>";
}
echo "</div>";
echo "<div class='w3-text-blue'>";
echo "<b>Mi url es: ".getMyUrl()."</b>";
echo "</div>";
echo "</body>";

function getMyUrl()
{
    $protocol = (!empty($_SERVER['HTTPS'])
    && (strtolower($_SERVER['HTTPS']) == 'on' || $_SERVER['HTTPS'] == '1')) ? 'https://' : 'htpp://';
    $server = $_SERVER['SERVER_NAME'];
    $port = $_SERVER['SERVER_PORT'] ? ':'.$_SERVER['SERVER_PORT'] : '';
    return $protocol.$server.$port;
}
?>