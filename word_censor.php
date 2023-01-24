<?php
$input_text = $_POST["input_text"];
$censored_word = $_POST["censored_word"];

echo "Entered text: " . $input_text . "<br>";

echo "The length of the entered text is: " . strlen($input_text) . "characters" . "<br>";

$censored_text = str_replace($censored_word, "***", $input_text) . "<br>";

echo "Censored text: " . $censored_text . "<br>";
echo "The length of the entered censored text is: " . strlen($censored_text) . "characters" . "<br>";
