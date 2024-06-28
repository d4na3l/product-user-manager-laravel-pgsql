<a {{ $attributes->merge([
    'class' => 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-slate-200 hover:text-black focus:outline-none focus:text-gray-700 transition duration-150 ease-in-out'
    ]) }}>
    {{ $slot }}
</a>
