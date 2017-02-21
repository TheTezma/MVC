<?
$Mustache = new Mustache_Engine;
?>
<div class="columns">
	<div class="two-thirds column">
		<div class="blankslate">
			<?= $Mustache->render('{{ test }}', array("test" => "w")); ?>
		</div>
	</div>
	<div class="one-third column">

	</div>
</div>
