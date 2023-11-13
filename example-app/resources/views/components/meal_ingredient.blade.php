@props(['ingredients_csv'])

@php
    $ingredients = explode(',', $ingredients_csv);
@endphp

<ul>
    @foreach($ingredients as $ingredient)
    <li>
        {{$ingredient}}
    </li>
    @endforeach
</ul>