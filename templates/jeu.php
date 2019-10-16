<?php $aDeviner = 150; ?>

<pre><?php var_dump($_GET); ?></pre>

<?php if (isset($_GET['chiffre'])): ?>
	<?php if ($_GET['chiffre'] > $aDeviner): ?>
		Votre chiffre est trop grand
	<?php elseif ($_GET['chiffre'] < $aDeviner): ?>
		Votre chiffre est trop petit
	<?php else: ?>
		Bravo, <?= $aDeviner ?> est bien le chiffre 
	<?php endif ?>
<?php endif ?>


<form action="/templates/jeu.php" method="GET">
	<input type="number" name="chiffre" placeholder="Entre 0 et 1000" value="<?= htmlentities($_GET['chiffre']) ?>">
	<input type="text" name="demo" value="test">
	<button type="submit">Deviner</button>
</form>
