<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciaran Office</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
<?php    
    $content = (string) $_POST['ciaran'];    
    $content = filter_var($content, FILTER_SANITIZE_STRING);

    if($content === "") {
        echo "<script>window.alert('Erro! Não foi possível salvar o arquivo'); window.location.href='../index.html';</script>";
    } else {        
        $file = fopen("../Documents/Documento.rtf", "w+");
        fwrite($file, $content);
        fclose($file);                           
        echo "<script>window.alert('Documento foi salvo com sucesso!');</script>";       
    }          
?>
<center><a href="../Documents/Documento.rtf" class="btn-download" download>Salvar como...</a></center>
</body>
</html> 

