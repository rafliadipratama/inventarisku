<button {{ $attributes->merge(['class' => 'bg-danger hover:bg-danger-dark text-white px-4 py-2 rounded-md font-semibold transition']) }}>
    {{ $slot }}
</button>
