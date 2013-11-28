<?php
/**
 * An page to display the sourcecode.
 */
include("config.php");

// Create the data array which is to be used in the template file.
$data['title'] = "Visa källkoden";
$data['meta_description'] = "Visa källkoden för alla filer i katalogen.";
$data['main'] = <<<EOD
<h1>Källkod</h1>

<p>Här visas sidornas källkod.</p>

EOD;

// User src/source.php to display the source of the files
$sourceBasedir=__DIR__;
$sourceNoEcho=true;
include(__DIR__."/src/source.php");
$data['style'] = $sourceStyle;
$data['main']  = $sourceBody;


// Hand over to the template engine.
include(__DIR__."/theme/template.php");
