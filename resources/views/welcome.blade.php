<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        {{-- @php
        $username = "wajid";

        @endphp

        @if($username)
            <h1>{{$username}}</h1>
        @else
            <h1>No Username Found</h1>
        @endif --}}

        {{-- for loop --}}

        {{-- @for($i=1;$i<=10;$i++)
           <h1> {{$i}}</h1>
        @endfor --}}

        {{-- foreach --}}
    @php
        $fruits=['mango','orange','cherry'];
    @endphp
    
    @foreach ($fruits as $fruit)
    {{$loop->index}}{{$fruit}}
    @endforeach

    {{-- <h1>welcome {{$username}}</h1> --}}
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis velit consequuntur iure recusandae doloremque suscipit ad, accusamus architecto nisi corporis impedit excepturi officia, consequatur ipsam maiores totam deserunt laborum quidem!</p>
</body>
</html>


