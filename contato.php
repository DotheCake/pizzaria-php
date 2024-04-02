<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include ("cabecalho.php")?>
<?php include ("menu.php")?>
    <main class="bg-light row pe-3 ps-3">
        <div class="row column-gap-3">
            <h2 class="pt-3">Entre em contato</h2>
            <hr>
        
                <div class="col-5">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="nome" id="nome" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="e-mail" class="form-label">E-mail</label>
                        <input type="e-mail" id="e-mail" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="assunto" class="form-label">Assunto</label>
                        <input type="assunto" id="assunto" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="mensagem" class="form-label">Mensagem</label>
                        <textarea class="form-control" id="mensagem" rows="3"></textarea>
                    </div>
                    <button type="enviar" class="btn btn-primary">Enviar</button>
                </div><!-- coluna -->
                <div class="col text-end">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7358.59968394902!2d-47.3377945!3d-22.7542512!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8998174c896b9%3A0x739b7f99b3323574!2sSenac%20Americana!5e0!3m2!1spt-BR!2sbr!4v1712018723432!5m2!1spt-BR!2sbr" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
        </div>

    </main>
<?php include ("rodape.php")?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>