<!DOCTYPE html>
<html>
    <head>
        <title>QR code Generator</title>
    </head>
<body>
    <div class="visible-print text-center">
        <h1>Scan Me</h1> 
        {!! QrCode::size(250)->generate('http://localhost:8000/shop_one_menu'); !!} 
    </div>
</body>
</html>