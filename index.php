<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test php</title>
</head>
<body>
    <?php
        $censure = $_GET['word'];
        $testo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum nesciunt nam consequatur laboriosam delectus exercitationem blanditiis mollitia autem voluptatibus? Dolorem obcaecati ea quo est repudiandae temporibus? Quo cum quas fugiat.';
        echo $testo;
        echo '<br>';
        echo $censure;
        echo '<br>';
        echo strlen($testo);
        echo '<br>';
        echo str_replace($censure, '***', $testo );
    ?>
</body>
</html>