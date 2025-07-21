<button {{ $attributes->merge(['class' => 'bg-secondary hover:bg-secondary-dark text-white px-4 py-2 rounded-md font-semibold transition']) }}>
    {{ $slot }}
</button>
