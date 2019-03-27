<?

if(!empty($_GET["go"])){
$plik = fopen('ready.txt','w');
fputs($plik, $_GET["go"]);
fclose($plik);
}


$plik = fopen('ready.txt','r');
$tekst4=fgets($plik, 10000);
fclose($plik);
echo $tekst4;

?>