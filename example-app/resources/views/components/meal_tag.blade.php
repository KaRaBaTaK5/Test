@props(['tags_csv'])

@php
    $tags = explode(',', $tags_csv);
@endphp

<ul>
    @foreach($tags as $tag)
    <li>
        {{$tag}}
    </li>
    @endforeach
</ul>