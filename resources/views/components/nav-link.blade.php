@props(['active','imageUrl'])

@php
$classes = ($active ?? false)
            ? 'flex text-blue-600 font-bold items-center gap-2'
            : 'flex text-gray-300 items-center gap-2';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
     <span><img src="{{$imageUrl}}"
                alt=""></span>
    {{ $slot }}
</a>
