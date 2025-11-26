@props([
   'boxClass' => null
])

<div {{ $attributes->merge(['class' => "flex justify-center"]) }}>
   <div class="max-w-7xl flex-1 {{ $boxClass }}">
      {{ $slot }}
   </div>
</div>