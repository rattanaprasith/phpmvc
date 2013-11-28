<?php
//Min me-sida om mig själv 

include("config.php");

//Create the data array 

$data['title'] = "Min me-sida med HTML5Boilerplate";
$data['meta_description'] = "Min egna me-sida, skapad för kursen phpmvc med HTML5Boilerplate.";
$data['main'] = <<<EOD
<h1>Om mig</h1> 
<figure class="right top"><img src="img/rattana.jpg" alt="Rattana Prasith"></figure> 
<p>Mitt namn är Rattana Prasith, jag är 25 år och bor i Örnsköldsvik. Jag föddes och växte upp i Kambodja men flyttade till Sverige för åtta år sedan.
Jag läser femte terminen på Systemvetenskapliga programmet i Umeå universitet 
och denna termin har jag en valfritt termin då jag kan välja läsa vilka kurser som helst. 
Tidigare i utbildningen har jag läst grunden inom programmering och databaser vilket jag tycker att det var jätte roligt och därför valde jag och läsa kurspaketet Databaser, HTML, CSS, JavaScript och PHP då jag vill fortsätta med samma inriktning. 
Jag vill dessutom förbättra mina kunskaper inom det området, få en förståelse om de teknikerna såsom CSS, JavaScript och PHP och framförallt 
om hur man bygger en webbsida. </p> 
<p>Jag läser kurspaketet på heltid och jag är säker på att det kommer att bli väldigt kul och lära sig. </p>
EOD;

include(__DIR__."/theme/template.php");
