<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <!--Esse css e para as demais paginas-->
    <link href="../css/bootstrap.min.css" rel="stylesheet" >
    <link href="../css/stylus.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;400;700&family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">
    <!--Esse css e para a pagina index-->
    <link rel="shortcut icon" <?php if($page == 'home')
    {
        echo' href="imagem/favicon.ico"';
    }
    if ($page != 'home')
    {
        echo' href="../imagem/favicon.ico"';
    }
    ?> />
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <link href="css/stylus.css" rel="stylesheet">
    <title>Pixels</title>
</head>