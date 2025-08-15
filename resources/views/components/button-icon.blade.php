<a 
    href="{{ $url }}" 
    class="inline-flex items-center gap-2 px-4 py-2 rounded transition
           {{ $bg }} {{ $color }}"
>
    @if(!empty($icon))
        <i class="{{ $icon }}"></i>
    @endif

    {{-- Gunakan properti text kalau ada, kalau kosong fallback ke slot --}}
    {{ $text ?: $slot }}
</a>
