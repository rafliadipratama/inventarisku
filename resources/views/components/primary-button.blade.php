<button {{ $attributes->merge(['class' => 'bg-primary hover:bg-primary-dark text-white px-4 py-2 rounded-md font-semibold transition']) }}>
    {{ $slot }}
</button>
