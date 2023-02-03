<div class="{{ $attributes->get('class')}}">
    <label for="{{$name}}" class="dc-label">{{$label}}</label>
    @if ($type == 'select')
        <select id="countries" name="{{$name}}" class="dc-input">
            {{$slot}}
        </select>
    @else
    <input type="{{$type}}" id="{{$name}}" name="{{$name}}" class="dc-input" placeholder="{{$placeholder}}" {{$required}}>
    @endif
    @error($name)
    <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
    @enderror
</div>
