<?
$Mustache = new Mustache_Engine;
echo $Mustache->render('{{ test }}', array("test" => "w"));
?>