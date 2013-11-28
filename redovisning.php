<?php
//Min me-sida om mig själv 

include("config.php");

//Create the data array 

$data['title'] = "Redovisning av kursmomenten";
$data['meta_description'] = "Redovisningar för kursmomenten i kursen PHPMVC";
$data['main'] = <<<EOD
<h1>Redovisning</h1>
<h2>Kmom01: En boilerplate</h2> 
<p>Allt har gått väldigt bra i detta kursmomenten. Jag har aldrig hört talas om MVC och boilerplate förut så detta var första gång för mig att använda boilerplate. Jag tycker att konceptet med boilerplate är väldigt smidigt och intressant. 
Som en nybörjare så känns det väldigt smidigt med strukturen men det var mycket att sätta sig in, tycker jag.</p>
<p>Vad det gäller utvecklingsmiljön använder jag mig av Chrome som webbläsare, jEdit för att skriva koder och FileZilla för att ladda upp filerna på studentservern.</p>
<p>Eftersom detta var första gången jag fick testa boilerplate så började jag att läsa runt för att få mer förståelse av boilerplate och hur den var uppbyggd. Sedan började jag med att ladda hem zip-filen från html5boilerplate.com och gick igenom koderna för att studera hur allt är uppbyggt. Jag kikade även på mos-sida för att se hur han hade tänkt och sedan ändrade jag lite då och då för att anpassa till min me-sida. 
Min sida baserade till stor del på mos-koderna. Problem som jag har stött på var ju att index-sida visas inte. Detta löste jag snabbt genom att fråga i forumet där jag fick hjälp från mos då jag skulle ta bort tomma tecken i slutet på rad 10 och 20 i index.php.</p>
<p>Jag gjorde inte extrauppgiften då jag har lite tidsbrist.</p>
EOD;

include(__DIR__."/theme/template.php");
