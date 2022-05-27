@extends('layouts.frontbase')
@section('title','')
@include("home.header")
@section('content')

<!DOCTYPE html>
	<html lang="tr">
	<head>
	<script type="text/javascript">
	window.empowerad=window.empowerad||{ads:new Array(),site:'tarimziraat','namespace':'empower','dataClass':'empower-ad'};
	var empowerScript=document.createElement('script');
	empowerScript.async=true;empowerScript.type="text/javascript";empowerScript.id='empower-ad-script';
	empowerScript.src='https://static.virgul.com/theme/mockups/adcode/outside.js?dts='+parseInt(new Date().getTime()/86400000);
	document.getElementsByTagName('head')[0].appendChild(empowerScript);
	</script>
	<script type="text/javascript" src="https://maps-api-ssl.google.com/maps/api/js?libraries=geometry&sensor=true&key=AIzaSyABlGc6QdtMLtAUtbrv8WcnO4lHXm5XGtM"></script>

	﻿<meta name="google-site-verification" content="SKvEWRN0moC66sDsJ7guoweYkMj3TpJGRqew5M32V-w" />
	<meta name="yandex-verification" content="bc130e704a2753a2" />
	<meta name="robots" content="index, follow" />
	<meta charset="utf-8" />
	<meta name="description" content="Haritadan İki Nokta arasındaki Mesafe Hesaplama Ölçme" />
	<meta name="keywords" content="Haritadan İki Nokta arasındaki Mesafe Hesaplama Ölçme" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<title>Haritadan İki Nokta arasındaki Mesafe Hesaplama Ölçme</title>
	<script type="text/javascript">
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-261409-16', 'auto');
	ga('send', 'pageview');
	</script>
	<script type="text/javascript">
	var trackOutboundLink = function(url) {
	ga('send', 'event', 'outbound', 'click', url, {'hitCallback':
		function () {
		document.location = url;
		}
	});
	</script>
	<script async type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script type="text/javascript">
	(adsbygoogle = window.adsbygoogle || []).push({
		google_ad_client: "ca-pub-9905946970499833",
		enable_page_level_ads: true,
		overlays: {bottom: true}
	});
	</script>
	<script data-ad-client="ca-pub-9905946970499833" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5dc6a6857873c90012199345&product=inline-share-buttons" async="async"></script>
	</head>
	
	<body>
	
	<div id="sol_sabit_div" class="sol_sabit_div_css">
	﻿<div data-empower-zone="153889" class="empower-ad empower-tower-left"></div>
	</div>

	<div id="ana_kapsul" class="ana_kapsul_div">
	<div id="icerigin_oldugu_div" class="orta_div">
	﻿<div data-empower-zone="153888" class="empower-ad"></div>
	<div class="description_baslik_div">
	Haritadan İki Nokta arasındaki Mesafe Hesaplama Ölçme</div>
	<style>
	input[type=text] {
	height:40px;
	font-size:120%;
	height:40px;
	width:45%;
	max-width:200px;
	margin-left:1%;
	display:inline-block;
	}
	button {
	height:40px;
	width:80px;	
	margin-left:1%;
	}

	</style>
	<div align="center">
		
		
		<div id="map-canvas" style="width:96%;height:400px;border: 1px solid #000000;margin-left:1%;margin-right:1%;"></div>
	<div id="sonuc" style="font-size:150%;text-align:center;color:red;"></div>
	<p  style="font-size:130%;text-align:center;">Nokta Ekleyin</p>
    <div class="col-md-6">
	<p align="center"><input class="form-input" type="text" name="enlem1" id="enlem1"  placeholder="Enlem" >
	<input class="form-input" type="text" name="boylam1" id="boylam1"  placeholder="Boylam"></p>
	<p align="center"><button class="button button-secondary button-nina" id="buton1" onclick="ekle()" >Ekle</button><button class="button button-secondary button-nina" id="buton2" onclick="hesapla()">Hesapla</button><button class="button button-secondary button-nina" id="buton" onclick="sil()" >Temizle</button></p>

		
		
		
		
	
	</div>

	<script>

	var map ;
	var koordinat;
	var konum_marker=[];
	var konum_marker1=[];
	var alan_sekil= [];
	var alan_path = [];
	var results = document.getElementById("sonuc");
	var bounds_marker = new google.maps.LatLngBounds();
		var dist = 0;
	function currencyFormatDE (num) {
		return num
		.toFixed(0)
		.replace(".", ",") 
		.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.") 
	}
	function mesafe_hesapla(mk1, mk2) {
		var R = 6378137;     
		var rlat1 = mk1.lat() * (Math.PI/180); 
		var rlat2 = mk2.lat() * (Math.PI/180); 
		var difflat = rlat2-rlat1;
		var difflon = (mk2.lng()-mk1.lng()) * (Math.PI/180); 
		var d = 2 * R * Math.asin(Math.sqrt(Math.sin(difflat/2)*Math.sin(difflat/2)+Math.cos(rlat1)*Math.cos(rlat2)*Math.sin(difflon/2)*Math.sin(difflon/2)));
		return d.toFixed(1) ; 
		}
	function initialize() {
	map = new google.maps.Map(document.getElementById('map-canvas'), {
		center: new google.maps.LatLng(39.9594954, 32.892535),
		disableDefaultUI: true,
		gestureHandling: "greedy",
			zoom: 6,
		mapTypeId: google.maps.MapTypeId.HYBRID
		});
	}
	function ekle() {
	if(document.getElementById("enlem1").value=='')
					{
						alert("Enlem bilgisi giriniz");
						document.getElementById("enlem1").focus();
						return false;
					}
					else if(document.getElementById("boylam1").value=='')
					{
					alert("Boylam bilgisi giriniz");
					document.getElementById("boylam1").focus();
					return false;
					}
				
							
	if (document.getElementById('enlem1').value.indexOf(",") >= 0) {
	document.getElementById('enlem1').value = document.getElementById('enlem1').value.replace(/\,/g,".");
	}
	if (document.getElementById('boylam1').value.indexOf(",") >= 0) {
	document.getElementById('boylam1').value = document.getElementById('boylam1').value.replace(/\,/g,".");
	}

	var enlem1_deger=document.getElementById("enlem1").value;
	var boylam1_deger=document.getElementById("boylam1").value;
	koordinat=new google.maps.LatLng(enlem1_deger, boylam1_deger);
	konum_marker1= new google.maps.Marker({
						position:new google.maps.LatLng(enlem1_deger, boylam1_deger),
						icon:'https://maps.google.com/mapfiles/ms/icons/blue-dot.png',
						map:map
						
					});	
		
	alan_path.push(koordinat);
	konum_marker.push(konum_marker1);
	document.getElementById("enlem1").value='';
	document.getElementById("boylam1").value='';
		bounds_marker.extend(new google.maps.LatLng(enlem1_deger, boylam1_deger))	
		map.fitBounds(bounds_marker)
		}
	function sil() {
	results.innerHTML= '';
	for (var i = alan_sekil.getPath().length-1; i > -1; i--) {
			alan_sekil.getPath().removeAt(i);
			}  
			for (var k = 0; k < konum_marker.length ; k++) {
			konum_marker[k].setMap(null);	
			}
			konum_marker=[];
			alan_path=[];
			document.getElementById("enlem1").value='';
	document.getElementById("boylam1").value='';
	map.setZoom(2); 
	bounds_marker = new google.maps.LatLngBounds(null);
		}
		function hesapla() {
	if (alan_sekil.length != 0)
	{alan_sekil.setMap(null)}	
	alan_sekil= new google.maps.Polyline({
			path: alan_path,
			strokeColor: '#ff0000',
			strokeOpacity: 0.6,
			strokeWeight: 3,
			fillColor: '#e5e5e5',
			fillOpacity: 0.3
			});
			alan_sekil.setMap(map);	
		if(alan_path.length > 1) {
		for (var i = 0; i < alan_sekil.getPath().length-1; i++) {	
		
		dist +=parseFloat(mesafe_hesapla(alan_sekil.getPath().getAt(i),alan_sekil.getPath().getAt(i+1)));
		}
	document.getElementById('sonuc').innerHTML= '<b>'+dist.toFixed(0)+'</b> metre';	
			}  	
			dist=0;
			
		}
	google.maps.event.addDomListener(window, 'load', initialize);
	</script>

	<br />

    </div>
  </div>
</div>


	</body>
	</html>









@endsection