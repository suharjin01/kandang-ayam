<!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
 @props(['active' => false])
<a {{ $attributes }} class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium" aria-current="{{ $active ? 'page' : false }}>{{ $slot }}">{{ $slot }}</a>