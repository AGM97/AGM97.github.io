
<!DOCTYPE html>
<html>
    <title>FORMULARIO</title>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Una guía interactiva de primeros pasos para Brackets.">
        <link rel="stylesheet" href="cssformulario.css">
    </head>
    <body>
        <p>Hello man
            
        <?php $nombre = $_POST['firstname'];
            echo $nombre; ?>  
        <?php $nombre = $_POST['lastname'];
            echo $nombre; ?>. 
        <?php $nombre = $_POST['edad'];
            echo $nombre; ?>.</p>
        
   </body>
</html>
    