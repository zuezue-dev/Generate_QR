<!DOCTYPE html>
<html>
<head>
    <title>QR code Generator</title>

    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/qr.css">
</head>
<body style="background-color:  #E0FFFF; margin-top:2rem">
    <div class="layout">
        <div></div>

        <div>
            <p class="text-center">Always scan to test that your QR works, a lighter background colour is the best!</p>
            <div class="box">
                <div class="background text-center">
                    {!! QrCode::size(350)->generate($url_or_text); !!} 
                </div>
            </div>
            <div class="btn-layout">
                <a href="{{route('download.svg')}}" class="btn btn-success">Download Svg (print quality)</a>
                <a href="{{route('download.png')}}" class="btn btn-success" >Download PNG</a>
            </div>
        </div>
        
        <div></div>
    </div>
</body>
</html>