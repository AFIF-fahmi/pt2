<a 
    href="{{ $url }}" 
    class="group inline-flex items-center shadow-2xl pl-8 pt-3 pb-3 pr-1 hover:scale-105 hover:pr-5 font-semibold rounded-lg transition-all duration-300
           {{ $bg }} {{ $color }}">

    {{ $text ?: $slot }}
    
    @if(!empty($icon))
        <i class="{{ $icon }} w-5 h-5 ml-2 opacity-0 translate-x-8 transition duration-300 group-hover:translate-x-0 group-hover:opacity-100"></i>
    @endif

</a>
