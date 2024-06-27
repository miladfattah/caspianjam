@props(['active' , 'icon'])

@php
$classes = ($active ?? false)
            ? 'hovered' 
            : ''
@endphp

<li {{ $attributes->merge(['class' => $classes]) }}>
    <a href="#">
        <span class="icon">
            <ion-icon name="{{$icon}}"></ion-icon>
        </span>
        <span class="title">{{$slot}}</span>
    </a>
</li>
