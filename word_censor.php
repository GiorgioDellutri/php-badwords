<?php
$input_text = $POST["input-text"];
$censored_word = $POST["censored_word"];

echo "Entered text" . $input_text;

echo "The length of the entered text is" . strlen($input_text) . "characters";
