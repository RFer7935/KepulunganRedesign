@props([
   "url",
   "alt",
   "title",
   "subtitle",
   "price",
   "link" => null,
])

<div {{ $attributes->merge(["class" => "bg-white border border-gray-300 rounded-xl shadow relative overflow-hidden"]) }}>
   <img src="{{ asset($url) }}" alt="{{ $alt }}" class="w-full aspect-4/3 object-cover object-center" />
   <div class="p-3 flex">
      <div class="flex-1">
         <p class="font-medium text-sm">{{ $title }}</p>
         <p class="text-xs text-gray-500">
            {{ $subtitle }}
         </p>
      </div>
      <p class="text-orange-500 font-bold text-xl">
         {{ $price }}
      </p>
   </div>
   @if ($link)
      <a href="{{ $link }}" class="absolute block left-0 right-0 bottom-0 top-0" wire:navigate></a>
   @endif
</div>