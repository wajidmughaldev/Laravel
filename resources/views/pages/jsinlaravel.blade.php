@php

    $username = "admin";
    $fruits = ['mango','orange','cherry']

@endphp

<script>
    // var fruits = @json($fruits);
    // alert(fruits)

    // or

    var fruits = {{Js::from($fruits)}};
    alert(fruits)

</script>