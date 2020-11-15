<?php namespace App\Controllers;

class CharacterController extends BaseController
{

	public function characterGenerator()
	{

		$rollA = rand(1,6);
		$rollB = rand(1,6);
		$rollC = rand(1,6);
		$rollD = rand(1,6);
		$rollE = rand(1,6);
		$rollF = rand(1,6);

		$str = 13 + $rollA - $rollB;
		$dex = 13 + $rollB - $rollC;
		$con = 13 + $rollC - $rollD;
		$int = 13 + $rollD - $rollE;
		$wis = 13 + $rollE - $rollF;
		$cha = 13 + $rollF - $rollA;


		$raceArray = array(
			'darkelf' => array(
				'name' => 'Dark Elf',
				'bonus1' => 'charisma',
				'bonus2' => 'dexterity',
				'racialpower' => 'cruel'
			),
			'dragonspawn' => array(
				'name' => 'Dragonspawn',
				'bonus1' => 'charisma',
				'bonus2' => 'strenght',
				'racialpower' => 'breathweapon'
			),
			'dwarf' => array(
				'name' => 'Dwarf',
				'bonus1' => 'constitution',
				'bonus2' => 'wisdom',
				'racialpower' => 'bestshot'
			),
			'forgeborn' => array(
				'name' => 'Forgeborn',
				'bonus1' => 'charisma',
				'bonus2' => 'dexterity',
				'racialpower' => ''
			),
			'gnome' => array(
				'name' => 'Gnome',
				'bonus1' => 'charisma',
				'bonus2' => 'dexterity',
				'racialpower' => ''
			),
			'halfelf' => array(
				'name' => 'Half-Elf',
				'bonus1' => 'charisma',
				'bonus2' => 'dexterity',
				'racialpower' => ''
			),
			'halforc' => array(
				'name' => 'Half-orc',
				'bonus1' => 'charisma',
				'bonus2' => 'dexterity',
				'racialpower' => ''
			),
			'halfling' => array(
				'name' => 'Halfling',
				'bonus1' => 'charisma',
				'bonus2' => 'dexterity',
				'racialpower' => ''
			),
			'highelf' => array(
				'name' => 'High Elf',
				'bonus1' => 'charisma',
				'bonus2' => 'dexterity',
				'racialpower' => ''
			),
			'holyone' => array(
				'name' => 'Holy One',
				'bonus1' => 'charisma',
				'bonus2' => 'dexterity',
				'racialpower' => ''
			),
			'human' => array(
				'name' => 'Human',
				'bonus1' => 'charisma',
				'bonus2' => 'dexterity',
				'racialpower' => ''
			),
			'demontouched' => array(
				'name' => 'Demon-touched',
				'bonus1' => 'charisma',
				'bonus2' => 'dexterity',
				'racialpower' => ''
			),
			'woodelf' => array(
				'name' => 'Wood Elf',
				'bonus1' => 'charisma',
				'bonus2' => 'dexterity',
				'racialpower' => ''
			)
		);


		$classArray = array(
			'barbarian' => array(
				'name' => 'Barbarian',
				'bonus1' => 'charisma',
				'bonus2' => 'dexterity',
				'level1' => array(
					'level' => 1,
					'hitpoints-formula-1' => 7,
					'hitpoints-formula-2' => 3,
					'totalAdventureFeats' => 1,
					'totalChampionFeats' => 0,
					'totalEpicFeats' => 0,
					'totalAdventureClassTalent' => 3,
					'totalChampionClassTalent' => 0,
					'totalEpicClassTalent' => 0,
					'levelUpBonus' => 0,
					'damageBonusMultiplier' => 1,
					'armorClassBase' => 12,
					'physicalDefBase' => 12,
					'mentalDefBase' => 12,
					'recoveries' => 8
				)
			), 
			'bard' => array(
				'name' => 'Bard',
				'bonus1' => 'charisma',
				'bonus2' => 'dexterity',
				'level1' => array(
					'level' => 1,
					'hitpoints-formula-1' => 7,
					'hitpoints-formula-2' => 3,
					'totalAdventureFeats' => 1,
					'totalChampionFeats' => 0,
					'totalEpicFeats' => 0,
					'totalAdventureClassTalent' => 3,
					'totalChampionClassTalent' => 0,
					'totalEpicClassTalent' => 0,
					'levelUpBonus' => 0,
					'damageBonusMultiplier' => 1,
					'armorClassBase' => 12,
					'physicalDefBase' => 12,
					'mentalDefBase' => 12,
					'recoveries' => 8
				),
			), 
			'chaosmage' => array(
				'name' => 'Chaos Mage',
				'bonus1' => 'charisma',
				'bonus2' => 'dexterity',
				'level1' => array(
					'level' => 1,
					'hitpoints-formula-1' => 7,
					'hitpoints-formula-2' => 3,
					'totalAdventureFeats' => 1,
					'totalChampionFeats' => 0,
					'totalEpicFeats' => 0,
					'totalAdventureClassTalent' => 3,
					'totalChampionClassTalent' => 0,
					'totalEpicClassTalent' => 0,
					'levelUpBonus' => 0,
					'damageBonusMultiplier' => 1,
					'armorClassBase' => 12,
					'physicalDefBase' => 12,
					'mentalDefBase' => 12,
					'recoveries' => 8
				),
			), 
			'cleric' => array(
				'name' => 'Cleric',
				'bonus1' => 'charisma',
				'bonus2' => 'dexterity',
				'level1' => array(
					'level' => 1,
					'hitpoints-formula-1' => 7,
					'hitpoints-formula-2' => 3,
					'totalAdventureFeats' => 1,
					'totalChampionFeats' => 0,
					'totalEpicFeats' => 0,
					'totalAdventureClassTalent' => 3,
					'totalChampionClassTalent' => 0,
					'totalEpicClassTalent' => 0,
					'levelUpBonus' => 0,
					'damageBonusMultiplier' => 1,
					'armorClassBase' => 12,
					'physicalDefBase' => 12,
					'mentalDefBase' => 12,
					'recoveries' => 8
				),
			), 
			'commander' => array(
				'name' => 'Commander',
				'bonus1' => 'charisma',
				'bonus2' => 'dexterity',
				'level1' => array(
					'level' => 1,
					'hitpoints-formula-1' => 7,
					'hitpoints-formula-2' => 3,
					'totalAdventureFeats' => 1,
					'totalChampionFeats' => 0,
					'totalEpicFeats' => 0,
					'totalAdventureClassTalent' => 3,
					'totalChampionClassTalent' => 0,
					'totalEpicClassTalent' => 0,
					'levelUpBonus' => 0,
					'damageBonusMultiplier' => 1,
					'armorClassBase' => 12,
					'physicalDefBase' => 12,
					'mentalDefBase' => 12,
					'recoveries' => 8
				),
			), 
			'demonologist' => array(
				'name' => 'Demonologist',
				'bonus1' => 'charisma',
				'bonus2' => 'dexterity',
				'level1' => array(
					'level' => 1,
					'hitpoints-formula-1' => 7,
					'hitpoints-formula-2' => 3,
					'totalAdventureFeats' => 1,
					'totalChampionFeats' => 0,
					'totalEpicFeats' => 0,
					'totalAdventureClassTalent' => 3,
					'totalChampionClassTalent' => 0,
					'totalEpicClassTalent' => 0,
					'levelUpBonus' => 0,
					'damageBonusMultiplier' => 1,
					'armorClassBase' => 12,
					'physicalDefBase' => 12,
					'mentalDefBase' => 12,
					'recoveries' => 8
				),
			), 
			'druid' => array(
				'name' => 'Druid',
				'bonus1' => 'charisma',
				'bonus2' => 'dexterity',
				'level1' => array(
					'level' => 1,
					'hitpoints-formula-1' => 7,
					'hitpoints-formula-2' => 3,
					'totalAdventureFeats' => 1,
					'totalChampionFeats' => 0,
					'totalEpicFeats' => 0,
					'totalAdventureClassTalent' => 3,
					'totalChampionClassTalent' => 0,
					'totalEpicClassTalent' => 0,
					'levelUpBonus' => 0,
					'damageBonusMultiplier' => 1,
					'armorClassBase' => 12,
					'physicalDefBase' => 12,
					'mentalDefBase' => 12,
					'recoveries' => 8
				),
			), 
			'fighter' => array(
				'name' => 'Fighter',
				'bonus1' => 'charisma',
				'bonus2' => 'dexterity',
				'level1' => array(
					'level' => 1,
					'hitpoints-formula-1' => 7,
					'hitpoints-formula-2' => 3,
					'totalAdventureFeats' => 1,
					'totalChampionFeats' => 0,
					'totalEpicFeats' => 0,
					'totalAdventureClassTalent' => 3,
					'totalChampionClassTalent' => 0,
					'totalEpicClassTalent' => 0,
					'levelUpBonus' => 0,
					'damageBonusMultiplier' => 1,
					'armorClassBase' => 12,
					'physicalDefBase' => 12,
					'mentalDefBase' => 12,
					'recoveries' => 8
				),
			), 
			'monk' => array(
				'name' => 'Monk',
				'bonus1' => 'charisma',
				'bonus2' => 'dexterity',
				'level1' => array(
					'level' => 1,
					'hitpoints-formula-1' => 7,
					'hitpoints-formula-2' => 3,
					'totalAdventureFeats' => 1,
					'totalChampionFeats' => 0,
					'totalEpicFeats' => 0,
					'totalAdventureClassTalent' => 3,
					'totalChampionClassTalent' => 0,
					'totalEpicClassTalent' => 0,
					'levelUpBonus' => 0,
					'damageBonusMultiplier' => 1,
					'armorClassBase' => 12,
					'physicalDefBase' => 12,
					'mentalDefBase' => 12,
					'recoveries' => 8
				),
			), 
			'necromancer' => array(
				'name' => 'Necromancer',
				'bonus1' => 'charisma',
				'bonus2' => 'dexterity',
				'level1' => array(
					'level' => 1,
					'hitpoints-formula-1' => 7,
					'hitpoints-formula-2' => 3,
					'totalAdventureFeats' => 1,
					'totalChampionFeats' => 0,
					'totalEpicFeats' => 0,
					'totalAdventureClassTalent' => 3,
					'totalChampionClassTalent' => 0,
					'totalEpicClassTalent' => 0,
					'levelUpBonus' => 0,
					'damageBonusMultiplier' => 1,
					'armorClassBase' => 12,
					'physicalDefBase' => 12,
					'mentalDefBase' => 12,
					'recoveries' => 8
				),
			), 
			'occultist' => array(
				'name' => 'Occultist',
				'bonus1' => 'charisma',
				'bonus2' => 'dexterity',
				'level1' => array(
					'level' => 1,
					'hitpoints-formula-1' => 7,
					'hitpoints-formula-2' => 3,
					'totalAdventureFeats' => 1,
					'totalChampionFeats' => 0,
					'totalEpicFeats' => 0,
					'totalAdventureClassTalent' => 3,
					'totalChampionClassTalent' => 0,
					'totalEpicClassTalent' => 0,
					'levelUpBonus' => 0,
					'damageBonusMultiplier' => 1,
					'armorClassBase' => 12,
					'physicalDefBase' => 12,
					'mentalDefBase' => 12,
					'recoveries' => 8
				),
			), 
			'paladin' => array(
				'name' => 'Paladin',
				'bonus1' => 'charisma',
				'bonus2' => 'dexterity',
				'level1' => array(
					'level' => 1,
					'hitpoints-formula-1' => 7,
					'hitpoints-formula-2' => 3,
					'totalAdventureFeats' => 1,
					'totalChampionFeats' => 0,
					'totalEpicFeats' => 0,
					'totalAdventureClassTalent' => 3,
					'totalChampionClassTalent' => 0,
					'totalEpicClassTalent' => 0,
					'levelUpBonus' => 0,
					'damageBonusMultiplier' => 1,
					'armorClassBase' => 12,
					'physicalDefBase' => 12,
					'mentalDefBase' => 12,
					'recoveries' => 8
				),
			), 
			'ranger' => array(
				'name' => 'Ranger',
				'bonus1' => 'charisma',
				'bonus2' => 'dexterity',
				'level1' => array(
					'level' => 1,
					'hitpoints-formula-1' => 7,
					'hitpoints-formula-2' => 3,
					'totalAdventureFeats' => 1,
					'totalChampionFeats' => 0,
					'totalEpicFeats' => 0,
					'totalAdventureClassTalent' => 3,
					'totalChampionClassTalent' => 0,
					'totalEpicClassTalent' => 0,
					'levelUpBonus' => 0,
					'damageBonusMultiplier' => 1,
					'armorClassBase' => 12,
					'physicalDefBase' => 12,
					'mentalDefBase' => 12,
					'recoveries' => 8
				),
			), 
			'rogue' => array(
				'name' => 'Rogue',
				'bonus1' => 'charisma',
				'bonus2' => 'dexterity',
				'level1' => array(
					'level' => 1,
					'hitpoints-formula-1' => 7,
					'hitpoints-formula-2' => 3,
					'totalAdventureFeats' => 1,
					'totalChampionFeats' => 0,
					'totalEpicFeats' => 0,
					'totalAdventureClassTalent' => 3,
					'totalChampionClassTalent' => 0,
					'totalEpicClassTalent' => 0,
					'levelUpBonus' => 0,
					'damageBonusMultiplier' => 1,
					'armorClassBase' => 12,
					'physicalDefBase' => 12,
					'mentalDefBase' => 12,
					'recoveries' => 8
				),
			), 
			'sorcerer' => array(
				'name' => 'Sorcerer',
				'bonus1' => 'charisma',
				'bonus2' => 'dexterity',
				'level1' => array(
					'level' => 1,
					'hitpoints-formula-1' => 7,
					'hitpoints-formula-2' => 3,
					'totalAdventureFeats' => 1,
					'totalChampionFeats' => 0,
					'totalEpicFeats' => 0,
					'totalAdventureClassTalent' => 3,
					'totalChampionClassTalent' => 0,
					'totalEpicClassTalent' => 0,
					'levelUpBonus' => 0,
					'damageBonusMultiplier' => 1,
					'armorClassBase' => 12,
					'physicalDefBase' => 12,
					'mentalDefBase' => 12,
					'recoveries' => 8
				),
			), 
			'wizard' => array(
				'name' => 'Wizard',
				'bonus1' => 'charisma',
				'bonus2' => 'dexterity',
				'level1' => array(
					'level' => 1,
					'hitpoints-formula-1' => 7,
					'hitpoints-formula-2' => 3,
					'totalAdventureFeats' => 1,
					'totalChampionFeats' => 0,
					'totalEpicFeats' => 0,
					'totalAdventureClassTalent' => 3,
					'totalChampionClassTalent' => 0,
					'totalEpicClassTalent' => 0,
					'levelUpBonus' => 0,
					'damageBonusMultiplier' => 1,
					'armorClassBase' => 12,
					'physicalDefBase' => 12,
					'mentalDefBase' => 12,
					'recoveries' => 8
				),
			),
		);

		$name = '';
		$randomRace = array_rand($raceArray, 1);
		$race = $raceArray[$randomRace]['name'];
		$randomClass = array_rand($classArray, 1);
		$class = $classArray[$randomClass]['name'];

		#Choose Race Bonus 1 or 2
		$raceBonusRandom = rand(1,2); // 1 = Bonus 1, 2 = Bonus 2
		$raceBonus = $raceArray[$randomRace]['bonus'.$raceBonusRandom];

		#Choose Class Bonus
		$classBonusRandom = rand(1,2); // 1 = Bonus 1, 2 = Bonus 2
		$classBonus = $classArray[$randomClass]['bonus'.$classBonusRandom];

		#If Race Bonus same as Class Bonus use the alternate Bonus
		if ($classBonusRandom == 1) {
			if ($classBonus == $raceBonus) {
				$classBonus = $classArray[$randomClass]['bonus2'];
			}
		}

		if ($classBonusRandom == 2) {
			if ($classBonus == $raceBonus) {
				$classBonus = $classArray[$randomClass]['bonus1'];
			}
		}

		#Add Class Bonus
		switch ($classBonus) {
			case 'strenght':
				$str = $str +2;
			break;
			case 'dexterity':
				$dex = $dex +2;
			break;
			case 'constitution':
				$con = $con +2;
			break;
			case 'intelligence':
				$int = $int +2;
			break;
			case 'wisdom':
				$wis = $wis +2;
			break;
			case 'charisma':
				$char = $char +2;
			break;
		}

		#Add Race Bonus
		switch ($raceBonus) {
			case 'strenght':
				$str = $str +2;
			break;
			case 'dexterity':
				$dex = $dex +2;
			break;
			case 'constitution':
				$con = $con +2;
			break;
			case 'intelligence':
				$int = $int +2;
			break;
			case 'wisdom':
				$wis = $wis +2;
			break;
			case 'charisma':
				$char = $char +2;
			break;
		}

		$strMod = floor(($str - 10)/2);
		$dexMod = floor(($dex - 10)/2);
		$conMod = floor(($con - 10)/2);
		$intMod = floor(($int - 10)/2);
		$wisMod = floor(($wis - 10)/2);		
		$chaMod = floor(($cha - 10)/2);

		$level = 1;
		$hitPoints = 0;
		$armorClass = 0;
		$physicalDef  = 0;
		$mentalDef = 0;
		$intiativeBonus = 0;
		$recoveries = 0;
		$recoveryDice = 0;

		$hitPoints = ($classArray[$randomClass]['level1']['hitpoints-formula-1']+$conMod)*$classArray[$randomClass]['level1']['hitpoints-formula-2'];
		$totalAdventureFeats = $classArray[$randomClass]['level1']['totalAdventureFeats'];
		$totalChampionFeats = $classArray[$randomClass]['level1']['totalChampionFeats'];
		$totalEpicFeats = $classArray[$randomClass]['level1']['totalEpicFeats'];
		$totalAdventureClassTalent = $classArray[$randomClass]['level1']['totalAdventureClassTalent'];
		$totalChampionClassTalent = $classArray[$randomClass]['level1']['totalChampionClassTalent'];
		$totalEpicClassTalent = $classArray[$randomClass]['level1']['totalEpicClassTalent'];


		$output = array(
			'strenght' => $str, 
			'strenghtModifier' => $strMod, 
			'dexterity' => $dex, 
			'dexterityModifier' => $dexMod, 
			'constitution' => $con, 
			'constitutionModifier' => $conMod, 
			'intelligence' => $int, 
			'intelligenceModifier' => $intMod, 
			'wisdom' => $wis, 
			'wisdomModifier' => $wisMod, 
			'charisma' => $cha, 
			'charismaModifier' => $chaMod, 
			'race' => $race, 
			'class' => $class, 
			'raceBonus' => $raceBonus,
			'classBonus' => $classBonus,
			'level' => $level,
			'totalAdventureFeats' => $totalAdventureFeats,
			'totalChampionFeats' => $totalChampionFeats,
			'totalEpicFeats' => $totalEpicFeats,
			'totalAdventureClassTalent' => $totalAdventureClassTalent,
			'totalChampionClassTalent' => $totalChampionClassTalent,
			'totalEpicClassTalent' => $totalEpicClassTalent,
			'hitPoints' => $hitPoints,
		);

		echo json_encode($output);
	}

	//--------------------------------------------------------------------

}
