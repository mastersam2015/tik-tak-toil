<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width">
<script type="text/javascript" src="jquery.js"></script>
<script>
var t=0;
jQuery.ajaxSetup({async:false});
 $.ajaxSetup({ cache: false });
function klik(x){
	
	
		$.get("ready.php",{ go : '2'});
		
		
		
		$.get("zapis.php",{ go : x, player : 3});
		
$("#ready").val("wait");
	
	//
//alert($('#b1').val());
if($('#b1').val()=='3' && $('#b2').val()=='3' && $('#b3').val()=='3'){location.href = "index2.php?point=1";}
if($('#b4').val()=='3' && $('#b5').val()=='3' && $('#b6').val()=='3'){location.href = "index2.php?point=1";}
if($('#b7').val()=='3' && $('#b8').val()=='3' && $('#b9').val()=='3'){location.href = "index2.php?point=1";}
if($('#b1').val()=='3' && $('#b4').val()=='3' && $('#b7').val()=='3'){location.href = "index2.php?point=1";}
if($('#b2').val()=='3' && $('#b5').val()=='3' && $('#b8').val()=='3'){location.href = "index2.php?point=1";}
if($('#b3').val()=='3' && $('#b6').val()=='3' && $('#b9').val()=='3'){location.href = "index2.php?point=1";}

if($('#b1').val()=='3' && $('#b5').val()=='3' && $('#b9').val()=='3'){location.href = "index2.php?point=1";}
if($('#b3').val()=='3' && $('#b5').val()=='3' && $('#b7').val()=='3'){location.href = "index2.php?point=1";}

}


function reflesh(){
		
				  
				  
$.get( "ready.php", function( data ) {
  //$( ".result" ).html( data );
  //alert( "Load was performed." );
	//alert(data);
		  	if(data==1){
			$("#ready").val("ready");
				}else{$("#ready").val("wait");}
	
});
				
					  
 
	$.get( "zapis.txt", function( data ) {


for(i=0;i<=11;i++){
	pom=i;
	if(data.charAt(i)==2){
     $("#b"+pom).val(2);
	$('#a'+pom).css('background-image','url(krzyzyk.jpg)');
		
	}
	
	if(data.charAt(i)==3){
     $("#b"+pom).val(3);
	$('#a'+pom).css('background-image','url(kolko.jpg)');
		
	}
	
			if(data.charAt(i)=='0'){
   $("#b"+pom).val('1');
	$('#a'+pom).css('background-image','url(biale.jpg)');
		t++;
	}
	
}

	
});
		
		
if(t==1){
	
	location.href = "index2.php?reset=1";
	
}

	t=0;	
		
		
		}
		
		
		setInterval(reflesh, 1000);



</script>
<center>
<table border="0" style="background: url('tlo.jpg');background-position: -30px -50px; " width="400" height="400"><tr><td>
<input type="hidden" id="b1" value="1" ><div id="a1" style="width:80px;height:80px;" onclick="if($('#b1').val()=='1' && $('#ready').val()=='ready'){$('#a1').css('background-image','url(kolko.jpg)');$('#b1').val('3');klik(1);}"></div>
</td><td>
<input type="hidden" id="b2" value="1" ><div id="a2" style="width:80px;height:80px;" onclick="if($('#b2').val()=='1' && $('#ready').val()=='ready'){$('#a2').css('background-image','url(kolko.jpg)');$('#b2').val('3');klik(2);}"></div>
</td><td>
<input type="hidden" id="b3" value="1" ><div id="a3" style="width:80px;height:80px;" onclick="if($('#b3').val()=='1' && $('#ready').val()=='ready'){$('#a3').css('background-image','url(kolko.jpg)');$('#b3').val('3');klik(3);}"></div>
</td></tr>

<tr><td>
<input type="hidden" id="b4" value="1" ><div id="a4" style="width:80px;height:80px;" onclick="if($('#b4').val()=='1' && $('#ready').val()=='ready'){$('#a4').css('background-image','url(kolko.jpg)');$('#b4').val('3');klik(4);}"></div>
</td><td>
<input type="hidden" id="b5" value="1" ><div id="a5" style="width:80px;height:80px;" onclick="if($('#b5').val()=='1' && $('#ready').val()=='ready'){$('#a5').css('background-image','url(kolko.jpg)');$('#b5').val('3');klik(5);}"></div>
</td><td>
<input type="hidden" id="b6" value="1" ><div id="a6" style="width:80px;height:80px;" onclick="if($('#b6').val()=='1' && $('#ready').val()=='ready'){$('#a6').css('background-image','url(kolko.jpg)');$('#b6').val('3');klik(6);}"></div>
</td></tr>

<tr><td>
<input type="hidden" id="b7" value="1" ><div id="a7" style="width:80px;height:80px;" onclick="if($('#b7').val()=='1' && $('#ready').val()=='ready'){$('#a7').css('background-image','url(kolko.jpg)');$('#b7').val('3');klik(7);}"></div>
</td><td>
<input type="hidden" id="b8" value="1" ><div id="a8" style="width:80px;height:80px;" onclick="if($('#b8').val()=='1' && $('#ready').val()=='ready'){$('#a8').css('background-image','url(kolko.jpg)');$('#b8').val('3');klik(8);}"></div>
</td><td>
<input type="hidden" id="b9" value="1" ><div id="a9" style="width:80px;height:80px;" onclick="if($('#b9').val()=='1' && $('#ready').val()=='ready'){$('#a9').css('background-image','url(kolko.jpg)');$('#b9').val('3');klik(9);}"></div>
</td></tr>

</table>
<br><br>
<input type="text" value="ready" id="ready">
<br><br>

<?

$point=$_GET["point"];
$reset=$_GET["reset"];
//-------------
if(!empty($reset)){



  $fp=fopen("zapis.txt", "w");
  
  fwrite($fp, "0000000000");


fclose($fp);
  
  }

//-------------


if(!empty($point)){
$fp=fopen("p2.txt", "r");
while (!feof($fp)){
$str = fgets($fp);  
  }
  $str=$str+1;
  $fp=fopen("p2.txt", "w");
  
  fwrite($fp, $str);


  $fp=fopen("zapis.txt", "w");
  
  fwrite($fp, "0000000000");



fclose($fp);
  
  }
  
  
  $fp=fopen("p1.txt", "r");
while (!feof($fp)){
$str = fgets($fp);  
  }
  
  $fp=fopen("p2.txt", "r");
while (!feof($fp)){
$str2 = fgets($fp);  
  }
  
  
  echo "<img src=\"krzyzyk.jpg\" width=\"30\">".$str ." : ".$str2."<img src=\"kolko.jpg\" width=\"30\">";
  
  
?>
