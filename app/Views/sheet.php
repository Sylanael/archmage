<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">
    <title>Project Shadow</title>

    <!-- CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/shadow.css" rel="stylesheet">
  </head>

  <body>
  <div class="container">
  <!-- Main Attributes -->
  <div class="row">
  	<div class="col-4">
      <div class="row">
        <div class="col-5">
          <img src="/assets/images/13th.jpg" width="100px;">
        </div>
        <div class="col-7">
      		<div class="row"><h3 class="h3-overwrite"><strong>Name:</strong> <input class="inputDetails" id="strengthValue" type="text" value="<?= $name ?>"> </h3></div>
      		<div class="row"><h3 class="h3-overwrite"><strong>Race:</strong> <input class="inputDetails" id="strengthValue" type="text" value="<?= $race ?>"> </h3></div>
      		<div class="row"><h3 class="h3-overwrite"><strong>Class:</strong> <input class="inputDetails" id="strengthValue" type="text" value="<?= $class ?>"></h3></div>
      		<div class="row"><h3 class="h3-overwrite"><strong>Player:</strong> <input class="inputDetails" id="strengthValue" type="text" value="<?= $player ?>"> </h3></div>
        </div>
      </div>
  	</div>
  	<div class="col-3">
  		<div class="row">
  			<span class="attributesBorder">
          <input class="inputAttributes" id="strengthValue" type="text" value="<?= $strength ?>"> 
        </span>
  			<span class="attributesName">Strength</span>
  			<span class="attributesBonus"><?= $strengthModifier ?></span>
  		</div>
  		<div class="row">
  			<span class="attributesBorder">
          <input class="inputAttributes" id="constitutionValue" type="text" value="<?= $constitution ?>"> 
        </span>
        <span class="attributesName">Constitution</span>
        <span class="attributesBonus"><?= $constitutionModifier ?></span>
  		</div>
  		<div class="row">
  			<span class="attributesBorder">
          <input class="inputAttributes" id="dexterityValue" type="text" value="<?= $dexterity ?>"> 
        </span>
        <span class="attributesName">Dexterity</span>
        <span class="attributesBonus"><?= $dexterityModifier ?></span>
  		</div>
  	</div>
  	<div class="col-3">
  		<div class="row">
  			<span class="attributesBorder">
          <input class="inputAttributes" id="intelligenceValue" type="text" value="<?= $intelligence ?>"> 
        </span>
        <span class="attributesName">Intelligence</span>
        <span class="attributesBonus"><?= $intelligenceModifier ?></span>
  		</div>
  		<div class="row">
  			<span class="attributesBorder">
          <input class="inputAttributes" id="wisdomValue" type="text" value="<?= $wisdom ?>"> 
        </span>
        <span class="attributesName">Wisdom</span>
        <span class="attributesBonus"><?= $wisdomModifier ?></span>
  		</div>
  		<div class="row">
  			<span class="attributesBorder">
          <input class="inputAttributes" id="charismaValue" type="text" value="<?= $charisma ?>"> 
        </span>
        <span class="attributesName">Charisma</span>
        <span class="attributesBonus"><?= $charismaModifier ?></span>
  		</div>
  	</div>
  	<div class="col-2">
  		<div class="row">
  			<span class="attributesName">Armor Class</span>
  			<span class="attributesBonus"><?= $armorClass ?></span>
  		</div>
  		<div class="row">
  			<span class="attributesName">Physical Defence</span>
  			<span class="attributesBonus"><?= $physicalDef ?></span>
  		</div>
  		<div class="row">
  			<span class="attributesName">Mental Defence</span>
  			<span class="attributesBonus"><?= $mentalDef ?></span>
  		</div>
  	</div>
  </div>

  <div class="padding-row-quater"></div>
  <div class="row">
  	<div class="col-3">
  		<span class="levelBonus">Level: <?= $level ?></span>
      <span class="levelBonus">Initiative: <?= $intiativeBonus ?></span>
  	</div>
  	<div class="col-5">
  		<span class="levelBonus">Recoveries: <?= $recoveries ?> + <?= $constitutionModifier ?></span>
  	</div>
  	<div class="col-4">
      <span class="levelBonus">Hit Points: <?= $hitPoints ?></span>
      <span class="levelBonus">Staggered: <?= $staggered ?></span>
  		
  	</div>
  </div>
  
  	</div>
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>