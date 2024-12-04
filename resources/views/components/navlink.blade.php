<a {{ $attributes }}
class="{{ $active ? 'text-yellow-300 underline decoration-2 underline-offset-[10px]' : ''}}
transition-all duration-200 hover:text-yellow-300 hover:underline hover:decoration-2 hover:underline-offset-[10px] " aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>