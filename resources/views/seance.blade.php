@php
    $lar = "epg";
@endphp
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laravel / Séance 1</title>
    </head>
    <body>
        <h1>Hello {{ $lar }}</h1>
        @if( $lar == "epg" )
            Oui
        @else 
            Non
        @endif

        <ul>
            @for( $i = 1; $i < 11; $i++ )
            <li>{{ $i }}</li>
            @endfor
        </ul>
        
        <!--
        if( $lar == "epg" ){
            echo "Oui";
        }   else {
            echo "Non";
        }

        for( $i = 1; $i < 11; $i++ ){
            echo "<li>{$i}</li>";
        }
        -->
    </body>
</html>