<form action="step.php" method="GET">
url:<input name="adresa" value="" size="100" maxlength="800" type="text">
<input class="button" name="akce" value="GENERISI" type="submit">
</form><br><br>

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
include 'enc64_session.php'; 
include 'config.php';
$oEncryption = new Encryption; 
if(!isset($_GET['adresa'])) $_GET['adresa'] = "";
{
$adresa = $_GET['adresa'];
}
if ($adresa!=""){
$adresa = str_replace ("\n", " ", $adresa);
$adresa = str_replace ("SELECT", " ", $adresa);
$adresa = str_replace ("FROM", " ", $adresa);
$adresa = str_replace ("select", " ", $adresa);
$adresa = str_replace ("from", " ", $adresa);
$adresa = str_replace (">", "&gt;", $adresa);
$adresa = str_replace ("<", "&lt;", $adresa);

$fp = FOpen ("bolt.txt", "r");
$blem = FRead ($fp, FileSize ("bolt.txt"));
$id = $oEncryption->enc("$blem|$adresa");
echo "url:<input class=\"ff\" style=\"width: 80%;\" name=\"emblink\" value=\"$server?u=$u&p=$p&channel=$id\" onclick=\"this.select(); this.focus();\" type=\"text\">";
}
?>