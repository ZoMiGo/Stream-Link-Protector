<?php
/** 
 * Script for Encryption - Decryption of IPTV 
 *  
 * Features : 
 * This class facilitates encoding data to pass between two can be used for 
 * encoding & decoding for cookie value or url param. 
 *   
 * @author Goran Trajilovic <gorance@live.de> 
 * @copyright AlexTV Player  
 *  
 * @version 1.2b 
 * 
 */ 

//define('DEBUG',0);

//define('PRODUCTION',1);



#development_mode : DEBUG / PRODUCTION
//$development_mode = PRODUCTION;



#Website root path for links
$server = 'http://myserverurl.com/tv/';

#User interface Acces
$u = "lHullKi";
$p = "KlU7Ghf";

#Stream Cuality "HQ" "HD" "LQ"
$streamq = "HQ";

#Proxy Response Base64
$stream = base64_decode("aHR0cDovL3d3dy5uZWtvbmVjbmUuY3ovZ2VuZXJhdG9ycHJveHkudHh0");

#Encoder Key This Key is Used to Generate a Protected Stream URL. If you Change this key All Generated URLs Down
$key = "7d5c65ac0557c2f047c02cfd62980fa0";

#User System Agent 
$user_agent = "AlexTV";  // Your User Agent if Stream Server has a User Agent Protection

#Error Video Clip if stream is Offline
$errorclip = "clip/error.avi";

#Database
$mysqlserver = "localhost";
$mysqluser = "root";
$mysqlpass = "";
$mysqldb = "caster_plus";

?>
