<?php

$word = $_GET['word'];


require_once __DIR__ . '/vendor/autoload.php';

use Cwin\BasicWord\WordProcessing\Source\Indonesia\WordFactoryIndonesia;
use Cwin\BasicWord\WordProcessing\Source\English\WordFactoryEnglish;

$wordSpelling = new Cwin\BasicWord\WordSpelling(new WordFactoryIndonesia);
$suggestion = new Cwin\Component\Suggestion\Suggestion();



$checkSpelling = $wordSpelling->checkSpelling($word);
$suggestion->setMaxListSuggestion(5);

foreach ($checkSpelling->spellingResult() as $spelling) {

	// echo '<span ' . $spelling->getBaseWord() . ' ' . ($spelling->hasError() ? 'class="error word"' : 'class="word"') . '>' . $spelling->getWord();

	if ($spelling->hasError()) {
		$array =  [
			"word" => $spelling->getWord(),
			"suggest" => $suggestion->setSpelling($spelling)->suggest()
		];
	}
	// echo '</span> ';
}

echo json_encode($array);
