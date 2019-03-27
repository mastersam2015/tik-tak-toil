<?


$plik = fopen('zapis.txt','r');
$tekst4=fgets($plik, 10000);
fclose($plik);
$z=$_GET["go"];

if(!empty($_GET["go"])){
	
	$tekst4{$z}=$_GET["player"];
	
$plik = fopen('zapis.txt','w');
fputs($plik, $tekst4);
fclose($plik);
}




?>