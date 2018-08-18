<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> Recursos úteis em PHP</h1>
    <?php 
        $texto="World";
        print "<p>Hello $texto</p>";
        $texto = 234;
        print "<p> Agora: $texto</p>";
        $userAgent= $_SERVER["HTTP_USER_AGENT"];
        print"<p> Seu navegador: $userAgent</p>";

        require_once "teste.php";
        doSomething();
        print "<p> x: $x</p>";

        ?>

</body>
</html>