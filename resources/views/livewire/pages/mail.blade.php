<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Campanha Heineken: contato</title>
</head>
<body style="margin: 0;
            padding:0px;
            box-sizing:border-box; 
            background: #022E03;">
    
    <div class="container-mail" style=" 
    height: 100%; 
    width: 700px; 
    min-height: 1250px;
    position: relative;
   
    margin: 30px auto; 
    background-image:url({{ asset('images/email_clientes_livinghnk.png') }}); 
    background-size:cover">
    
        <div style="padding-top: 760px; padding-left: 310px">
            <img src="{{ asset("uploads/qrcode/".$qrUidd[0]->uuid.".png") }}" class="img-qr-code-move" style="width: 100%; max-width: 200px; border-radius: 7px" alt="qrcode item">
        </div>
    </div>
</body>
</html>
