<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentários</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="container">
        
        <form action="index.php" method="post" class="ipts-form">
            <input type="text" name="ipt-autor" id="">
            <input type="text" name="ipt-text" id="">
            <input type="submit" name="submit" value="Enviar">
        </form>
        <div class="title">
            <h1>Comentários</h1>
        </div>
        <div class="comments">
    
            <?php
                include('config.php');
                if(isset($_POST["submit"])){
                    $autor = $_POST["ipt-autor"];
                    $text = $_POST["ipt-text"];
                    
                    // echo $autor."<br>".$text;

                    $sql = "INSERT INTO comentarios(autor, comentario) VALUES ('$autor', '$text')";

                    $resp = $conexao->query($sql);

                }

                include('listar-comentarios.php')
            ?>

            
        </div>
    </div>

   
</body>
</html>