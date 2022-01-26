<?php
session_start();

    require_once('php/level.php');
    require_once('php/get_table.php');
    require_once('php/get_Info.php');

?>
<!DOCTYPE html>
<html>
<head>
    <title>Города</title>
    <link href="https://fonts.googleapis.com/css2?Montserrat:wght@600&family=Roboto:wght@400&display=swap" rel="stylesheet">
    <link href = "https: //fonts.googleapis.com/css2? family = Open + Sans: wdth, wght @ 91.8,300 & display = swap "rel =" stylesheet ">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/page.css">
    <link rel="stylesheet" type="text/css" href="css/forms.css">
</head>
</head>
<body>
<main>
    <!--img class="townImg" alt="#" src="imajens/Без%20названия.jpg"/-->
    <div class = "townImg" style="background-image: url(https://upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Istanbul_Montage_2016.png/435px-Istanbul_Montage_2016.png);">
        <form class="level" method="get">
            <label class="textLevel">Уровень:</label>
            <label class="rbat light"><input id="lgt"  type="radio" name="level" <?php echo ($_SESSION['check']=='light')?'checked':''; ?> value="light"/><span></span></label>
            <label class = "rbat middle"><input  id = "mdd" type="radio" name="level" <?php echo ($_SESSION['check']=='middle')?'checked':''; ?> value="middle"><span></span></label>
            <label class="rbat hard"><input id="hrt" type="radio" name="level" <?php echo ($_SESSION['check']=='hard')?'checked':''; ?> value="hard"><span></span></label>
            <button class="butLevel" value="Применить">Да</button>
        </form>

        <div class="container">

        <p class="time">11</p>
        <p class="answer">Ответ: <?= isset($_SESSION['town'])?$_SESSION['town']:$_SESSION['town']='Киев';?></p>
            <span class="lastAnswer">Ваш ответ: <?= isset($_SESSION['last'])?$_SESSION['last']:'';?></span>
        </div>
    </div>

    <form method="post" class="inputClass" action="php/town.php">
        <input class = "inputText" type="text" name="town" placeholder="Введите свой город">
        <button class="batText">Готово</button>
    </form>

    <form method="post"  action="php/destroy.php" class="inputClass">
        <button class="batText clean">Очистить</button>
    </form>

    <div class="information">

        <?php
       // echo $_SESSION['first'];
       // echo $_SESSION['second'];
          getInfo();
        ?>

    </div>

    <div class="tbRes">
        <table class="_table">
            <tr>
                <th class="tableHeaDER">Ввод</th>
                <th class="tableHeaDER">Ответ</th>
            </tr>
            <?php
             crateTb();
             getTable('table');
            ?>
        </table>

    </div>

    <article>
        <p class="rools">Правила: Для начала игры выберите уровень сложности, нажмите кнопку старт и введите любое название города до истечения времени.
            Вы вводите город в базе данных ищется навание города, что начинается на последнюю букву вашего города, вы должны будете ввести название города на букву, на которую заканчивается названия города в ответе
        Игра считается закончениой: вы не вложились во время - победа бота, в базе данных не было соответствия на ваш запрос - выша победа.</p>
    </article>


</main>
<footer>
    &copy; <?=date("Y") ;?> Towns
    <div class="footer-data">
        <a class="footerColl" href="mailto:valerysik05@gmail.com"><img class="img-footer" src="img/email.png"></a>
        <a class="footerColl" href="#"><img class="img-footer" src="img/telega.png"></a>
        <a class="footerColl" href="#"><img class="img-footer" src="img/instagram.png"></a>
    </div>
</footer>
</body>
</html>