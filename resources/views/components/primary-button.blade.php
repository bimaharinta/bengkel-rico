<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-6 py-3 bg-accent border border-transparent rounded-lg font-bold text-xs text-white uppercase tracking-wider hover:bg-red-800 focus:bg-red-800 active:bg-red-900 focus:outline-none focus:ring-2 focus:ring-accent focus:ring-offset-2 transition ease-in-out duration-150 shadow-md shadow-red-500/30']) }}>
    {{ $slot }}
</button>
