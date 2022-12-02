<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="display-flex column">

        <div class="container">
            <h1>
                Welcome ,
                {{$name ?? "Guest"}}

            </h1>
            @unless($name =="ss")
            The name is not valid
            @endunless

        </div>

        --------FOR lOOP-------
        <div class="container">
            @for($i=1; $i<4;$i++) <h2>{{$i}}. "forloop"</h2>
                @endfor
        </div>
        --------While---------
        <div>
            @php
            $j=1;
            @endphp
            @while ($j<=4) <h4>{{$j}} While loop</h4>
                @php $j++; @endphp
                @endwhile
        </div>
        ---------FOR EACH--------
        @php
        $k=1;
        $arr=["sumit","ankesh","vishal","deepak"];
        @endphp
        
        @foreach ($arr as $i)
        <h2>{{$k}}-{{$i}}</h2>
        @php $k++; @endphp
        @endforeach
    </div>
</body>

</html>