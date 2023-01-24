<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>
    <main>
        <form action="word_censor" method="post">
            <label for="input_text">Enter some text</label>
            <textarea type="text" name="text" cols="30" rows="5"></textarea>
            <label for="censored-word">Enter the word to censor</label>
            <input type="text" name="censored_word">
            <button type="submit">Send</button>
        </form>
    </main>
</body>

</html>