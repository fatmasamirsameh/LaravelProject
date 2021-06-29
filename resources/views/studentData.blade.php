<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    
{{$id}} - {{$age}} - {{$level}}
 <br>
    @if($age > 18)
  {{'>18'}}
    @endif
</body>
</html>