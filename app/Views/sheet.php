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
  <div class="row d-flex align-items-center justify-content-center">
  	<div class="col-lg-4">
      <div class="row">
        <div class="col-lg-5">
          <img src="/assets/images/13th.jpg" width="100px;">
        </div>
        <div class="col-lg-7">
      		<div class="row"><h3 class="h3-overwrite"><strong>Name:</strong> <input class="inputDetails" id="strengthValue" type="text" value="<?= $name ?>"> </h3></div>
      		<div class="row"><h3 class="h3-overwrite"><strong>Race:</strong> <input class="inputDetails" id="strengthValue" type="text" value="<?= $race ?>"> </h3></div>
      		<div class="row"><h3 class="h3-overwrite"><strong>Class:</strong> <input class="inputDetails" id="strengthValue" type="text" value="<?= $class ?>"></h3></div>
      		<div class="row"><h3 class="h3-overwrite"><strong>Player:</strong> <input class="inputDetails" id="strengthValue" type="text" value="<?= $player ?>"> </h3></div>
        </div>
      </div>
  	</div>
  	<div class="col-lg-3">
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
  	<div class="col-lg-3">
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
  	<div class="col-lg-2">
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
  	<div class="col-lg-4">
  		<span class="levelBonus"><strong>Level:</strong> <?= $level ?></span>
      <span class="levelBonus"><strong>Initiative:</strong> <?= $intiativeBonus ?></span>
  	</div>
  	<div class="col-lg-4">
  		<span class="levelBonus"><strong>Recoveries:</strong> <?= $level ?>d<?= $hitPointsFormula1 ?> + <?= $constitutionModifier ?></span>
  	</div>
  	<div class="col-lg-4">
      <span class="levelBonus"><strong>Hit Points:</strong> <?= $hitPoints ?></span>
      <span class="levelBonus"><strong>Staggered:</strong> <?= $staggered ?></span>
  	</div>
  </div>
  
  <div class="padding-row-quater"></div>
  
  <div class="row">
        <div class="col-lg-4 collumSeperator">
          
            <div class="row marginauto">
              <h2 class="h2-overwrite">One Unique Thing</h2>
            </div>
            <div class="row marginauto">
              <textarea name="" rows="3" cols="55" class="textareaBackgrounds"> </textarea>
            </div>

            <div class="row marginauto">
              <h2 class="h2-overwrite">Icon Relationship</h2>
            </div>
            <div class="row marginauto">
              <textarea name="" rows="3" cols="55" class="textareaBackgrounds"> </textarea>
            </div>
      

            <div class="row marginauto">
              <h2 class="h2-overwrite">Backgrounds</h2>
            </div>
            <div class="row marginauto">
              <textarea name="" rows="3" cols="55" class="textareaBackgrounds"> </textarea>
            </div>

             <div class="padding-row-quater"></div>


              <div class="row marginauto">
                <div class="col-12">
                  <h2 class="h2-overwrite">Class Features</h2>
                </div>
                <div class="col-12">
                  <h4 class="h5-overwrite">Every <?= $class ?> has accessed to the following: </h2>
                </div>
              </div>
            <?php foreach ($classFeatures as $key): ?>
            <div class="row featsBox">
              <div class="col-lg-7">
              <strong><?= $key['name'] ?></strong>
              </div>
              <div class="col-lg-5">
              <strong>Recharge: <?= $key['recharge'] ?></strong>
              </div>
              <div class="col-lg-12">
                <strong><?= $key['action'] ?> Action</strong>
              </div>
              <div class="col-lg-12">
              <strong>Trigger: </strong><?= $key['trigger'] ?>
              </div>
              <div class="col-lg-12">
              <strong>Effect: </strong><?= $key['effect'] ?>
              </div>
            </div>
            <?php endforeach ?>

        </div>

        <div class="col-lg-4 collumSeperator">
          <div class="row marginauto">
            <h2 class="h2-overwrite">Weapon Attack</h2>
          </div>
          <div class="row featsBox">
            <div class="col-lg-7">
            <strong><?= $meleeWeapon['name'] ?></strong> <?= $meleeWeapon['type'] ?>
            </div>
            <div class="col-lg-5">
            <strong>At-Will</strong>
            </div>
            <div class="col-lg-7">
            Standard Action  
            </div>
            <div class="col-lg-5">
            Melee Basic Attack
            </div>
            <div class="col-lg-7">
            <strong>Target: </strong>One creature 
            </div>
            <div class="col-lg-5">
            <strong>Attack: </strong>+<?= $strPlusLevel ?> vs AC
            </div>
            <div class="col-lg-12">
            <strong>Hit: </strong>  
            <?= $level.$meleeWeapon['damage'] ?> + <?= $strengthModifier ?> 
            </div>
            <div class="col-lg-12">
            <strong>Miss: </strong>Damage equal to level (<?= $level ?>)
            </div>
          </div>

          <div class="row featsBox">
            <div class="col-lg-7">
            <strong><?= $rangedWeapon['name'] ?></strong> <?= $rangedWeapon['type'] ?>
            </div>
            <div class="col-lg-5">
            <strong>At-Will</strong>
            </div>
            <div class="col-lg-7">
            Standard Action  
            </div>
            <div class="col-lg-5">
            Ranged Basic Attack
            </div>
            <div class="col-lg-7">
            <strong>Target: </strong>One creature 
            </div>
            <div class="col-lg-5">
            <strong>Attack: </strong>+<?= $strPlusLevel ?> vs AC
            </div>
            <div class="col-lg-12">
            <strong>Hit: </strong>  
            <?= $level.$rangedWeapon['damage'] ?> + <?= $dexterityModifier ?> 
            </div>
            <div class="col-lg-12">
            <strong>Miss: </strong>Damage equal to level (<?= $level ?>)
            </div>
          </div>

           <div class="row marginauto">
            <h2 class="h2-overwrite">Racial Power</h2>
          </div>

          <div class="row featsBox">
            <div class="col-lg-7">
            <strong><?= $racialPower['name'] ?></strong>
            </div>
            <div class="col-lg-5">
            <strong><?= $race ?></strong>
            </div>
            <div class="col-lg-12">
            <strong>Trigger: </strong><?= $racialPower['trigger'] ?>
            </div>
            <div class="col-lg-12">
            <strong>Effect: </strong><?= $racialPower['effect'] ?>
            </div>
          </div>

        </div>

        <div class="col-lg-4 collumSeperator">
           <div class="row marginauto">
                <div class="col-12">
                  <h2 class="h2-overwrite">Class Talents</h2>
                </div>
            </div>

          <?php foreach ($classAdventureTalents as $key): ?>
          <div class="row featsBox">
            <div class="col-lg-7">
            <strong><?= $key['name'] ?></strong>
            </div>
            <div class="col-lg-5">
            <strong><?= $class ?></strong>
            </div>
            <div class="col-lg-12">
            <strong>Trigger: </strong><?= $key['trigger'] ?>
            </div>
            <div class="col-lg-12">
            <strong>Effect: </strong><?= $key['effect'] ?>
            </div>
          </div>
          <?php endforeach ?>

        </div>
  </div>

  	</div>
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>