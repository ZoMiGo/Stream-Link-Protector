<?php ini_set("$user_agent", ")");
include 'enc64_session.php';
include 'config.php'; 
$oEncryption = new Encryption;
$id = $oEncryption->dec($_GET["channel"]);  // das solte entschlüselt werden in moment funkcioniert nur base64 entschlüselung
$fp = FOpen ("bolt.txt", "r");  // hir habe ich ein usser und password für den Stream
$blem = FRead ($fp, FileSize ("bolt.txt"));
$kontrola_funkcnosti_odkazu = file_get_contents("$stream");
$adresa = StrChr($id, "|");
$adresa = str_replace ("|", "", $adresa);
$heslo = current(explode("|", $id, 2));
if (($heslo==$blem) AND ($kontrola_funkcnosti_odkazu=="OK")){
header('Set-Cookie: track=978268624934537');
header('Content-Disposition: attachment; filename="video/signal.test"');
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Datum in der Vergangenheit
header("Content-Transfer-Encoding:­ binary"); 
//header('Content-Type: video/x-mpeg-ts');
$q = "$adresa";
readfile ($q);
}
else{
header('Content-Disposition: attachment; filename="video/signal.test"');
$q = "$errorclip";  // das ist ein Error clip wen ein stream offline ist
readfile ($q);
}   
?> 

