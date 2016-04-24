<h3>Vali oma lemmik :)</h3>
<form action="?page=tulemus" method="POST">
    <?php foreach ($pildid as $pilt): ?>
        <p>
            <label for="<?php echo $pilt["label"];?>">
                <img src="<?php echo $pilt["src"];?>" alt="<?php echo $pilt["alt"] ?>" height="100"/>
            </label>
            <input type="radio" value="<?php echo $pilt["value"] ?>" id="<?php echo $pilt["label"] ?>" name="pilt">
        </p>
    <?php endforeach; ?>

	<br/>
	<input type="submit" value="Valin!"/>
</form>
<p>Oled juba valiku teinud</p>
