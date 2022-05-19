<?php

$paragrafo = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum vel molestias quibusdam assumenda aliquam incidunt sapiente, veritatis enim adipisci ad ratione eos aliquid tempore? Blanditiis ipsum fugit esse quibusdam itaque recusandae ea ipsa. Fuga illo consequuntur ratione ullam. Perferendis at architecto ipsa corrupti explicabo eos nostrum aliquid. Maxime reiciendis sapiente dolore quod omnis ullam modi? Numquam cum veniam ad voluptatem autem? Harum iure illo laboriosam architecto neque itaque? Maxime debitis vitae recusandae quasi hic illo fugiat eos saepe, amet rerum officiis atque tenetur repellat. Laudantium sint quae soluta omnis reiciendis vel delectus quisquam alias, voluptate ipsa assumenda consequatur, atque hic?";

echo ($paragrafo);

echo("<br>");
echo("<br>");
echo("<br>");

$censured = $_GET['censured'];

$censuredParagraph = str_replace($censured, '***', $paragrafo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>censura testi</title>
</head>
<body>
    <h1>inserisci nome da censurare</h1>
    
    <form action="index.php" method="get">
        <label for="censured">parola censurata:</label><br>
        <input type="text" id="censured" name="censured"><br>
        <input type="submit" value="Submit">
    </form>

    <?php 
        
    echo ($censuredParagraph);

    ?>

    

</body>
</html>