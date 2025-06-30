<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include('pages.header',['name'=>'bilsign'])
    
    <h1>home Page</h1>
    @include('pages.footer')
    {{-- @includeif('pages.content') --}}
    @includewhen(10==20,'pages.content')
</body>
</html>


