<?php require_once('php/init.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Weather-App</title>
	
	<link rel="stylesheet" type="text/css" href="<?php echo('css/style.css')?>">
	<link rel="stylesheet" type="text/css" href="css/jquery.autocomplete.css">
	<link rel="stylesheet" type="text/css" href="css/weather-icons.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		
</head>
<body>



	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <select class="form-control" placeholder="Search" id="searchTerm">

       <option></option>

        <option value="Cairo">Cairo</option>
						<option value="Paris">Paris</option>
						<option value="New York">New York</option>
						<option value="Tokyo">Tokyo</option>
						<option value="London">London</option>
						<option value="Berlin">Berlin</option>
						<option value="Casablanca">Casablanca</option>
						<option value="New Delhi">New Delhi</option>
						<option value="Jakarta">Jakarta</option>
						<option value="Seoul">Seoul</option>
						<option value="Moskva (Moscow)">Moskva (Moscow)</option>
						<option value="Bangkok">Bangkok</option>
						<option value="Berlin">Berlin</option>
						<option value="Vienna">Vienna</option>
						<option value="Wien">Wien</option>
						<option value="Brussels">Brussels</option>
						<option value="Sofiya">Sofiya</option>
						<option value="Zagreb">Zagreb</option>
						<option value="Prague (Praha)">Prague (Praha)</option>
						<option value="Copenhagen (Kobenhavn)">Copenhagen (Kobenhavn)</option>
						<option value="Helsinki">Helsinki</option>
						<option value="Stockholm">Stockholm</option>
						<option value="Washington DC">Washington DC</option>
						<option value="California">California</option>
						<option value="Colorado">Colorado</option>
						<option value="Athens">Athens</option>
						<option value="Rome">Rome</option>
						<option value="Bucharest">Bucharest</option>
						<option value="San Marino">San Marino</option>
						<option value="Madrid">Madrid</option>
						<option value="Barcelona">Barcelona</option>
						<option value="Lisbon">Lisbon</option>
						<option value="Rabat">Rabat</option>
						<option value="Andaman/Nicobar Islands">Andaman/Nicobar Islands</option>
						<option value="Andhra Pradesh">Andhra Pradesh</option>
						<option value="Arunachal Pradesh">Arunachal Pradesh</option>
						<option value="Assam">Assam</option>
						<option value="Bihar">Bihar</option>
						<option value="Chandigarh">Chandigarh</option>
						<option value="Chhattisgarh">Chhattisgarh</option>
						<option value="Dadra/Nagar Haveli">Dadra/Nagar Haveli</option>
						<option value="Daman/Diu">Daman/Diu</option>
						<option value="Goa">Goa</option>
						<option value="Gujarat">Gujarat</option>
						<option value="Haryana">Haryana</option>
						<option value="Himachal Pradesh">Himachal Pradesh</option>
						<option value="Jammu">Jammu</option>
						<option value="Kashmir">Kashmir</option>
						<option value="Jharkhand">Jharkhand</option>
						<option value="Karnataka">Karnataka</option>
						<option value="Kerala">Kerala</option>
						<option value="Lakshadweep">Lakshadweep</option>
						<option value="Madhya Pradesh">Madhya Pradesh</option>
						<option value="Maharashtra">Maharashtra</option>
						<option value="Manipur">Manipur</option>
						<option value="Meghalaya">Meghalaya</option>
						<option value="Mizoram">Mizoram</option>
						<option value="Nagaland">Nagaland</option>
						<option value="Orissa">Orissa</option>
						<option value="Pondicherry">Pondicherry</option>
						<option value="Punjab">Punjab</option>
						<option value="Rajasthan">Rajasthan</option>
						<option value="Sikkim">Sikkim</option>
						<option value="Tamil Nadu">Tamil Nadu</option>
						<option value="Tripura">Tripura</option>
						<option value="Uttaranchal">Uttaranchal</option>
						<option value="Uttar Pradesh">Uttar Pradesh</option>
						<option value="West Bengal">West Bengal</option>
						<option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
						<option value="Papua">Papua</option>
						<option value="Yogyakarta">Yogyakarta</option>
						<option value="Aichi">Aichi</option>
						<option value="Akita">Akita</option>
						<option value="Aomori">Aomori</option>
						<option value="Chiba">Chiba</option>
						<option value="Ehime">Ehime</option>
						<option value="Fukui">Fukui</option>
						<option value="Fukuoka">Fukuoka</option>
						<option value="Fukushima">Fukushima</option>
						<option value="Kyoto">Kyoto</option>
						<option value="Mie">Mie</option>
						<option value="Miyagi">Miyagi</option>
						<option value="Miyazaki">Miyazaki</option>
						<option value="Nagano">Nagano</option>
						<option value="Nagasaki">Nagasaki</option>
						<option value="Nara">Nara</option>
						<option value="Niigata">Niigata</option>
						<option value="Oita">Oita</option>
						<option value="Okayama">Okayama</option>
						<option value="Okinawa">Okinawa</option>
						<option value="Osaka">Osaka</option>
						<option value="Saga">Saga</option>
						<option value="Seoul">Seoul</option>
						<option value="Cheju-do">Cheju-do</option>
						<option value="Cholla-bukto">Cholla-bukto</option>
						<option value="Kuala Lumpur">Kuala Lumpur</option>
						<option value="Maale">Maale</option>
						<option value="San Juan">San Juan</option>
						<option value="Adjuntas">Adjuntas</option>
						<option value="Aguada">Aguada</option>
						<option value="Aguadilla">Aguadilla</option>
						<option value="Aguas Buenas">Aguas Buenas</option>
						<option value="Aibonito">Aibonito</option>
						<option value="Anasco">Anasco</option>
						<option value="Arecibo">Arecibo</option>
						<option value="Arroyo">Arroyo</option>
						<option value="Barceloneta">Barceloneta</option>
						<option value="Barranquitas">Barranquitas</option>
						<option value="Bayamon">Bayamon</option>
						<option value="Cabo Rojo">Cabo Rojo</option>
						<option value="Nassau">Nassau</option>
						<option value="Acklins/Crooked Islands">Acklins/Crooked Islands</option>
						<option value="Bimini">Bimini</option>
						<option value="Cat Island">Cat Island</option>
						<option value="Exuma">Exuma</option>
						<option value="Freeport">Freeport</option>
						<option value="Fresh Creek">Fresh Creek</option>
						<option value="Havana">Havana</option>
						<option value="Kingston">Kingston</option>
						<option value="Clarendon">Clarendon</option>
						<option value="Hanover">Hanover</option>
						<option value="Manchester">Manchester</option>
						<option value="Portland">Portland</option>
						<option value="Saint Andrew">Saint Andrew</option>
						<option value="Saint Ann">Saint Ann</option>
						<option value="Saint Catherine">Saint Catherine</option>
						<option value="Saint Elizabeth">Saint Elizabeth</option>
						<option value="Saint James">Saint James</option>
						<option value="Saint Mary">Saint Mary</option>
						<option value="Saint Thomas">Saint Thomas</option>
						<option value="Trelawny">Trelawny</option>
						<option value="Westmoreland">Westmoreland</option>
						<option value="Saint John">Saint John</option>
						<option value="Barbuda">Barbuda</option>
						<option value="Redonda">Redonda</option>
						<option value="Saint George">Saint George</option>
						<option value="Saint Mary">Saint Mary</option>
						<option value="Saint Paul">Saint Paul</option>
						<option value="Saint Peter">Saint Peter</option>
						<option value="Saint Philip">Saint Philip</option>
						<option value="Belmopan">Belmopan</option>
						<option value="Belize">Belize</option>
						<option value="Cayo">Cayo</option>
						<option value="Corozal">Corozal</option>
						<option value="Orange Walk">Orange Walk</option>
						<option value="Stann Creek">Stann Creek</option>
						<option value="Toledo">Toledo</option>
						<option value="San Jose">San Jose</option>
						<option value="Alajuela">Alajuela</option>
						<option value="Cartago">Cartago</option>
						<option value="Guanacaste">Guanacaste</option>
						<option value="Heredia">Heredia</option>
						<option value="Limon">Limon</option>
						<option value="Puntarenas">Puntarenas</option>
						<option value="San Salvador">San Salvador</option>
						<option value="Ahuachapan">Ahuachapan</option>
						<option value="Cabanas">Cabanas</option>
						<option value="Guatemala">Guatemala</option>
						<option value="Panama">Panama</option>
						<option value="Bocas del Toro">Bocas del Toro</option>
						<option value="Chiriqui">Chiriqui</option>
						<option value="Andorra la Vella">Andorra la Vella</option>
						<option value="Canillo">Canillo</option>
						<option value="Encamp">Encamp</option>
						<option value="La Massana">La Massana</option>
						<option value="Escaldes-Engordany">Escaldes-Engordany</option>
						<option value="Ordino">Ordino</option>
						<option value="Sant Julia de Lorie">Sant Julia de Lorie</option>
						<option value="Burgenland">Burgenland</option>
						<option value="Kaernten">Kaernten</option>
						<option value="Niederoesterreich">Niederoesterreich</option>
						<option value="Oberoesterreich">Oberoesterreich</option>
						<option value="Salzburg">Salzburg</option>
						<option value="Steiermark">Steiermark</option>
						<option value="Tirol">Tirol</option>
						<option value="Vorarlberg">Vorarlberg</option>
						<option value="Minsk">Minsk</option>
						<option value="Brest">Brest</option>
						<option value="Antwerpen">Antwerpen</option>
						<option value="Brabant Wallon">Brabant Wallon</option>
						<option value="Brussels (Bruxelles)">Brussels (Bruxelles)</option>
						<option value="Hainaut">Hainaut</option>
						<option value="Liege">Liege</option>
						<option value="Limburg">Limburg</option>
						<option value="Luxembourg">Luxembourg</option>
						<option value="Namur">Namur</option>
						<option value="Oost-Vlaanderen">Oost-Vlaanderen</option>
						<option value="Vlaams-Brabant">Vlaams-Brabant</option>
						<option value="West-Vlaanderen">West-Vlaanderen</option>
						<option value="Sarajevo">Sarajevo</option>
						<option value="Tirana">Tirana</option>
						<option value="Harjumaa (Tallinn)">Harjumaa (Tallinn)</option>
						<option value="Alsace">Alsace</option>
						<option value="Aquitaine">Aquitaine</option>
						<option value="Auvergne">Auvergne</option>
						<option value="Basse-Normandie">Basse-Normandie</option>
						<option value="Bourgogne">Bourgogne</option>
						<option value="Bretagne">Bretagne</option>
						<option value="Centre">Centre</option>
						<option value="Champagne-Ardenne">Champagne-Ardenne</option>
						<option value="Corse">Corse</option>
						<option value="Franche-Comte">Franche-Comte</option>
						<option value="Haute-Normandie">Haute-Normandie</option>
						<option value="Ile-de-France">Ile-de-France</option>
						<option value="Languedoc-Roussillon">Languedoc-Roussillon</option>
						<option value="Limousin">Limousin</option>
						<option value="Lorraine">Lorraine</option>
						<option value="Midi-Pyrenees">Midi-Pyrenees</option>
						<option value="Nord-Pas-de-Calais">Nord-Pas-de-Calais</option>
						<option value="Pays de la Loire">Pays de la Loire</option>
						<option value="Picardie">Picardie</option>
						<option value="Poitou-Charentes">Poitou-Charentes</option>
						<option value="Provence-Alpes-Cote d\\'Azur">Provence-Alpes-Cote d\\'Azur</option>
						<option value="Rhone-Alpes">Rhone-Alpes</option>
						<option value="Baden-Wuerttemberg">Baden-Wuerttemberg</option>
						<option value="Bayern">Bayern</option>
						<option value="Berlin">Berlin</option>
						<option value="Brandenburg">Brandenburg</option>
						<option value="Bremen">Bremen</option>
						<option value="Hamburg">Hamburg</option>
						<option value="Hessen">Hessen</option>
						<option value="Mecklenburg-Vorpommern">Mecklenburg-Vorpommern</option>
						<option value="Niedersachsen">Niedersachsen</option>
						<option value="Nordrhein-Westfalen">Nordrhein-Westfalen</option>
						<option value="Rheinland-Pfalz">Rheinland-Pfalz</option>
						<option value="Saarland">Saarland</option>
						<option value="Sachsen">Sachsen</option>
						<option value="Sachsen-Anhalt">Sachsen-Anhalt</option>
						<option value="Schleswig-Holstein">Schleswig-Holstein</option>
						<option value="Thueringen">Thueringen</option>
						<option value="Athens">Athens</option>
						<option value="Thessaloniki">Thessaloniki</option>
						<option value="Zakynthos">Zakynthos</option>
						<option value=""></option>
						<option value="Budapest">Budapest</option>
						<option value=""></option>
						<option value="Bacs-Kiskun">Bacs-Kiskun</option>
						<option value="Baranya">Baranya</option>
						<option value="Bekes">Bekes</option>
						<option value="Bekescsaba">Bekescsaba</option>
						<option value="Borsod-Abauj-Zemplen">Borsod-Abauj-Zemplen</option>
						<option value="Csongrad">Csongrad</option>
						<option value="Debrecen">Debrecen</option>
						<option value="Dunaujvaros">Dunaujvaros</option>
						<option value="Eger">Eger</option>
						<option value="Fejer">Fejer</option>
						<option value="Gyor">Gyor</option>
						<option value="Gyor-Moson-Sopron">Gyor-Moson-Sopron</option>
						<option value="Hajdu-Bihar">Hajdu-Bihar</option>
						<option value="Heves">Heves</option>
						<option value="Hodmezovasarhely">Hodmezovasarhely</option>
						<option value="Jasz-Nagykun-Szolnok">Jasz-Nagykun-Szolnok</option>
						<option value="Kaposvar">Kaposvar</option>
						<option value="Kecskemet">Kecskemet</option>
						<option value="Komarom-Esztergom">Komarom-Esztergom</option>
						<option value="Miskolc">Miskolc</option>
						<option value="Nagykanizsa">Nagykanizsa</option>
						<option value="Nograd">Nograd</option>
						<option value="Nyiregyhaza">Nyiregyhaza</option>
						<option value="Pecs">Pecs</option>
						<option value="Pest">Pest</option>
						<option value="Somogy">Somogy</option>
						<option value="Sopron">Sopron</option>
						<option value="Szabolcs-Szatmar-Bereg">Szabolcs-Szatmar-Bereg</option>
						<option value="Szeged">Szeged</option>
						<option value="Szekesfehervar">Szekesfehervar</option>
						<option value="Szolnok">Szolnok</option>
						<option value="Szombathely">Szombathely</option>
						<option value="Tatabanya">Tatabanya</option>
						<option value="Tolna">Tolna</option>
						<option value="Vas">Vas</option>
						<option value="Veszprem">Veszprem</option>
						<option value="Veszprem">Veszprem</option>
						<option value="Zala">Zala</option>
						<option value="Zalaegerszeg">Zalaegerszeg</option>
						<option value="Reykjavik">Reykjavik</option>
						<option value="Dublin">Dublin</option>
						<option value=""></option>
						<option value="Rome">Rome</option>
						<option value=""></option>
						<option value="Abruzzi">Abruzzi</option>
						<option value="Basilicata">Basilicata</option>
						<option value="Calabria">Calabria</option>
						<option value="Campania">Campania</option>
						<option value="Emilia-Romagna">Emilia-Romagna</option>
						<option value="Friuli-Venezia Giulia">Friuli-Venezia Giulia</option>
						<option value="Lazio">Lazio</option>
						<option value="Liguria">Liguria</option>
						<option value="Lombardia">Lombardia</option>
						<option value="Marche">Marche</option>
						<option value="Molise">Molise</option>
						<option value="Piemonte">Piemonte</option>
						<option value="Puglia">Puglia</option>
						<option value="Sardegna">Sardegna</option>
						<option value="Sicilia">Sicilia</option>
						<option value="Toscana">Toscana</option>
						<option value="Trentino-Alto Adige">Trentino-Alto Adige</option>
						<option value="Umbria">Umbria</option>
						<option value="Valle d\\'Aosta">Valle d\\'Aosta</option>
						<option value="Veneto">Veneto</option>
						<option value="Riga">Riga</option>
						<option value="Vaduz">Vaduz</option>
						<option value="Vilnius">Vilnius</option>
						<option value="Luxembourg">Luxembourg</option>
						<option value="Skopje">Skopje</option>
						<option value="Valletta">Valletta</option>
						<option value="Chisinau">Chisinau</option>
						<option value="Monaco">Monaco</option>
						<option value="Monte-Carlo">Monte-Carlo</option>
						<option value="Amsterdam">Amsterdam</option>
						<option value="The Hague">The Hague</option>
						<option value="Oslo">Oslo</option>
						<option value="Warsaw">Warsaw</option>
						<option value="Lisbon">Lisbon</option>
						<option value="Aveiro">Aveiro</option>
						<option value="Acores (Azores)">Acores (Azores)</option>
						<option value="Beja">Beja</option>
						<option value="Braga">Braga</option>
						<option value="Braganca">Braganca</option>
						<option value="Castelo Branco">Castelo Branco</option>
						<option value="Coimbra">Coimbra</option>
						<option value="Evora">Evora</option>
						<option value="Faro">Faro</option>
						<option value="Guarda">Guarda</option>
						<option value="Leiria">Leiria</option>
						<option value="Lisboa">Lisboa</option>
						<option value="Madeira">Madeira</option>
						<option value="Portalegre">Portalegre</option>
						<option value="Porto">Porto</option>
						<option value="Santarem">Santarem</option>
						<option value="Setubal">Setubal</option>
						<option value="Viana do Castelo">Viana do Castelo</option>
						<option value="Vila Real">Vila Real</option>
						<option value="Viseu">Viseu</option>
						<option value="Bucharest (Bucuresti)">Bucharest (Bucuresti)</option>
						<option value="Cluj">Cluj</option>
						<option value="Constanta">Constanta</option>
						<option value="Iasi">Iasi</option>
						<option value="Ilfov">Ilfov</option>
						<option value="Maramures">Maramures</option>
						<option value="Mures">Mures</option>
						<option value="Prahova">Prahova</option>
						<option value="Satu Mare">Satu Mare</option>
						<option value="Sibiu">Sibiu</option>
						<option value="Timis">Timis</option>
						<option value="San Marino">San Marino</option>
						<option value="Belgrade">Belgrade</option>
						<option value="Montenegro">Montenegro</option>
						<option value="Serbia">Serbia</option>
						<option value="Vojvodina">Vojvodina</option>
						<option value="Bratislava">Bratislava</option>
						<option value="Ljubljana">Ljubljana</option>
						<option value="San Marin">San Marin</option>
						<option value="Bratislava">Bratislava</option>
						<option value="Ljubljana">Ljubljana</option>
						<option value="Andalucia">Andalucia</option>
						<option value="Aragon">Aragon</option>
						<option value="Asturias">Asturias</option>
						<option value="Baleares (Balearic Islands)">Baleares (Balearic Islands)</option>
						<option value="Ceuta">Ceuta</option>
						<option value="Canarias (Canary Islands)">Canarias (Canary Islands)</option>
						<option value="Cantabria">Cantabria</option>
						<option value="Castilla-La Mancha">Castilla-La Mancha</option>
						<option value="Castilla y Leon">Castilla y Leon</option>
						<option value="Cataluna">Cataluna</option>
						<option value="Communidad Valencian">Communidad Valencian</option>
						<option value="Extremadura">Extremadura</option>
						<option value="Galicia">Galicia</option>
						<option value="La Rioja">La Rioja</option>
						<option value="Melilla">Melilla</option>
						<option value="Murcia">Murcia</option>
						<option value="Navarra">Navarra</option>
						<option value="Blekinge">Blekinge</option>
						<option value="Dalarnas">Dalarnas</option>
						<option value="Gavleborgs">Gavleborgs</option>
						<option value="Gotlands">Gotlands</option>
						<option value="Hallands">Hallands</option>
						<option value="Jamtlands">Jamtlands</option>
						<option value="Jonkopings">Jonkopings</option>
						<option value="Kalmar">Kalmar</option>
						<option value="Kronobergs">Kronobergs</option>
						<option value="Norrbottens">Norrbottens</option>
						<option value="Orebro">Orebro</option>
						<option value="Ostergotlands">Ostergotlands</option>
						<option value="Skane">Skane</option>
						<option value="Sodermanlands">Sodermanlands</option>
						<option value="Uppsala">Uppsala</option>
						<option value="Varmlands">Varmlands</option>
						<option value="Vasterbottens">Vasterbottens</option>
						<option value="Vasternorrlands">Vasternorrlands</option>
						<option value="Vastmanlands">Vastmanlands</option>
						<option value="Vastra Gotalands">Vastra Gotalands</option>
						<option value="Blekinge">Blekinge</option>
						<option value="Dalarnas">Dalarnas</option>
						<option value="Gavleborgs">Gavleborgs</option>
						<option value="Gotlands">Gotlands</option>
						<option value="Hallands">Hallands</option>
						<option value="Jamtlands">Jamtlands</option>
						<option value="Jonkopings">Jonkopings</option>
						<option value="Kalmar">Kalmar</option>
						<option value="Kronobergs">Kronobergs</option>
						<option value="Norrbottens">Norrbottens</option>
						<option value="Orebro">Orebro</option>
						<option value="Ostergotlands">Ostergotlands</option>
						<option value="Skane">Skane</option>
						<option value="Sodermanlands">Sodermanlands</option>
						<option value="Uppsala">Uppsala</option>
						<option value="Varmlands">Varmlands</option>
						<option value="Vasterbottens">Vasterbottens</option>
						<option value="Vasternorrlands">Vasternorrlands</option>
						<option value="Vastmanlands">Vastmanlands</option>
						<option value="Vastra Gotaland">Vastra Gotaland</option>
						<option value="Bern">Bern</option>
						<option value="Barking/Dagenham">Barking/Dagenham</option>
						<option value="Barnet">Barnet</option>
						<option value="Barnsley">Barnsley</option>
						<option value="Bath/North East Somerset">Bath/North East Somerset</option>
						<option value="Bedfordshire">Bedfordshire</option>
						<option value="Bexley">Bexley</option>
						<option value="Birmingham">Birmingham</option>
						<option value="Blackburn with Darwen">Blackburn with Darwen</option>
						<option value="Blackpool">Blackpool</option>
						<option value="Bolton">Bolton</option>
						<option value="Bournemouth">Bournemouth</option>
						<option value="Bracknell Forest">Bracknell Forest</option>
						<option value="Bradford">Bradford</option>
						<option value="Brent">Brent</option>
						<option value="Brighton/Hove">Brighton/Hove</option>
						<option value="City of Bristol">City of Bristol</option>
						<option value="Bromley">Bromley</option>
						<option value="Buckinghamshire">Buckinghamshire</option>
						<option value="Bury">Bury</option>
						<option value="Calderdale">Calderdale</option>
						<option value="Cambridgeshire">Cambridgeshire</option>
						<option value="Camden">Camden</option>
						<option value="Cheshire">Cheshire</option>
						<option value="Cornwall">Cornwall</option>
						<option value="Coventry">Coventry</option>
						<option value="Croydon">Croydon</option>
						<option value="Cumbria">Cumbria</option>
						<option value="Darlington">Darlington</option>
						<option value="Derby">Derby</option>
						<option value="Derbyshire">Derbyshire</option>
						<option value="Devon">Devon</option>
						<option value="Doncaster">Doncaster</option>
						<option value="Dorset">Dorset</option>
						<option value="Dudley">Dudley</option>
						<option value="Durham">Durham</option>
						<option value="Ealing">Ealing</option>
						<option value="East Riding of Yorkshire">East Riding of Yorkshire</option>
						<option value="East Sussex">East Sussex</option>
						<option value="Enfield">Enfield</option>
						<option value="Essex">Essex</option>
						<option value="Gateshead">Gateshead</option>
						<option value="Gloucestershire">Gloucestershire</option>
						<option value="Nicosia">Nicosia</option>
						<option value="Jerusalem">Jerusalem</option>
						<option value="Amman">Amman</option>
						<option value="Kuwait">Kuwait</option>
						<option value="Beirut">Beirut</option>
						<option value="Islamabad">Islamabad</option>
						<option value="Doha">Doha</option>
						<option value="Riyadh">Riyadh</option>
						<option value="Damascus">Damascus</option>
						<option value="Ankara">Ankara</option>
						<option value="Abu Dhabi">Abu Dhabi</option>
						<option value="Sanaa">Sanaa</option>
						<option value="Alabama">Alabama</option>
						<option value="Alaska">Alaska</option>
						<option value="Arizona">Arizona</option>
						<option value="Arkansas">Arkansas</option>
						<option value="Connecticut">Connecticut</option>
						<option value="Delaware">Delaware</option>
						<option value="Georgia">Georgia</option>
						<option value="Kentucky">Kentucky</option>
						<option value="Hawaii">Hawaii</option>
						<option value="Idaho">Idaho</option>
						<option value="Illinois">Illinois</option>
						<option value="Indiana">Indiana</option>
						<option value="Iowa">Iowa</option>
						<option value="Kansas">Kansas</option>
						<option value="Kentucky">Kentucky</option>
						<option value="Louisiana">Louisiana</option>
						<option value="Maine">Maine</option>
						<option value="Maryland">Maryland</option>
						<option value="Massachusets">Massachusets</option>
						<option value="Michigan">Michigan</option>
						<option value="Minnesota">Minnesota</option>
						<option value="Mississippi">Mississippi</option>
						<option value="Missouri">Missouri</option>
						<option value="Montana">Montana</option>
						<option value="Nebraska">Nebraska</option>
						<option value="Nevada">Nevada</option>
						<option value="New Hampshire">New Hampshire</option>
						<option value="New Jersey">New Jersey</option>
						<option value="New Mexico">New Mexico</option>
						<option value="North Carolina">North Carolina</option>
						<option value="North Dakota">North Dakota</option>
						<option value="Ohio">Ohio</option>
						<option value="Oklahoma">Oklahoma</option>
						<option value="Oregon">Oregon</option>
						<option value="Pennsylvania">Pennsylvania</option>
						<option value="Rhode Island">Rhode Island</option>
						<option value="South Carolina">South Carolina</option>
						<option value="South Dakota">South Dakota</option>
						<option value="Tennessee">Tennessee</option>
						<option value="Texas">Texas</option>
						<option value="Utah">Utah</option>
						<option value="Vermont">Vermont</option>
						<option value="Virginia">Virginia</option>
						<option value="Washington">Washington</option>
						<option value="West Virginia">West Virginia</option>
						<option value="Wisconsin">Wisconsin</option>
						<option value="Buenos Aires">Buenos Aires</option>
						<option value="La Paz">La Paz</option>
						<option value="Brasilia">Brasilia</option>
						<option value="Santiago">Santiago</option>
						<option value="Bogota">Bogota</option>
						<option value="Quito">Quito</option>
						<option value="Georgetown">Georgetown</option>
						<option value="Asuncion">Asuncion</option>
						<option value="Lima">Lima</option>
						<option value="Paramaribo">Paramaribo</option>
						<option value="Montevideo">Montevideo</option>
						<option value="Caracas">Caracas</option>
        </select>
      </form>
     		<button type="submit" class="btn btn-default" onClick="app.getWeather()">Submit</button>
    </div>
  </div>
</nav>



		<!-- Menu -->
		
		
		<!-- Weather information -->
		<div class="info col-md-10 col-md-offset-2">
			<ul>
				<li class="info-tab" style="display: list-item;">
					<ul class="info-meta">
						
						<li class="other currentDay">
							<h2><strong>New York</strong></h2>
							<span class="weather">
								<i class="wi wi-day-sunny condition"></i>
								<p class="currentTemp">10°</p>
							</span>
							<p class="hum humNow">Humidity<br><span class="icon Hum"><i class="wi wi-humidity"></i></span></i><span class="text">50 %</span></p>
							<p class="windy windNow">Wind<br><span class="icon Wind"><i class="wi wi-strong-wind"></i></span></i><span class="text">40 %</span></p>
							
								
							</span>
						</li>

						<li class="other">
							<h3>Tuesday</h3>
							
							<i class="wi wi-day-sunny condition"></i>
							<p class="temp"><span class="high">6°</span>/<span class="low">2°</span></p>
							<p class="hum"><span class="icon Hum"><i class="wi wi-humidity"></i></span></i><span class="text">50 %</span></p>
							<p class="windy"><span class="icon Wind"><i class="wi wi-strong-wind"></i></span></i><span class="text">40 %</span></p>
							
						</li>

						<li class="other">
							<h3>Tuesday</h3>
							
							<i class="wi wi-day-sunny condition"></i>
							<p class="temp"><span class="high">6°</span>/<span class="low">2°</span></p>
							<p class="hum"><span class="icon Hum"><i class="wi wi-humidity"></i></span></i><span class="text">50 %</span></p>
							<p class="windy"><span class="icon Wind"><i class="wi wi-strong-wind"></i></span></i><span class="text">40 %</span></p>
							
						</li>

						<li class="other">
							<h3>Tuesday</h3>
							
							<i class="wi wi-day-sunny condition"></i>
							<p class="temp"><span class="high">6°</span>/<span class="low">2°</span></p>
							<p class="hum"><span class="icon Hum"><i class="wi wi-humidity"></i></span></i><span class="text">50 %</span></p>
							<p class="windy"><span class="icon Wind"><i class="wi wi-strong-wind"></i></span></i><span class="text">40 %</span></p>
							
						</li>

						<li class="other">
							<h3>Tuesday</h3>
							
							<i class="wi wi-day-sunny condition"></i>
							<p class="temp"><span class="high">6°</span>/<span class="low">2°</span></p>
							<p class="hum"><span class="icon Hum"><i class="wi wi-humidity"></i></span></i><span class="text">50 %</span></p>
							<p class="windy"><span class="icon Wind"><i class="wi wi-strong-wind"></i></span></i><span class="text">40 %</span></p>
							
						</li>


						


						
					

					</ul>
				</li>


						
			</ul>			
		<!-- End of weather information -->
			</div>
			






<div class="clear"></div>  
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/selectize.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>