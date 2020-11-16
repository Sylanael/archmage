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

		#Get Data From JSON files
		$raceArray = json_decode(file_get_contents(base_url(). "/assets/json/races.json"), true);
		$classArray = json_decode(file_get_contents(base_url(). "/assets/json/classes.json"), true);
		$featsArray = json_decode(file_get_contents(base_url(). "/assets/json/feats.json"), true);
		$raceFeatureArray = json_decode(file_get_contents(base_url(). "/assets/json/raceFeatures.json"), true);
		$classTalentArray = json_decode(file_get_contents(base_url(). "/assets/json/classTalents.json"), true);

		$name = 'Character Name';
		$player = 'Player Name';
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
			case 'strength':
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
			case 'strength':
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
		$staggered = floor($hitPoints/2);
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
			'strength' => $str, 
			'strengthModifier' => $strMod, 
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
			'name' => $name, 
			'player' => $player, 
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
			'staggered' => $staggered,
			'armorClass' => $armorClass,
			'physicalDef' => $physicalDef,
			'mentalDef' => $mentalDef,
			'intiativeBonus' => $intiativeBonus,
			'recoveries' => $recoveries,
			'recoveryDice' => $recoveryDice,
		);

		return view('sheet', $output);
	}

	//--------------------------------------------------------------------

}
