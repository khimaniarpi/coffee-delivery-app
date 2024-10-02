<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn border border-secondary rounded-pill px-4 py-2 mb-4 text-primary']) }}>
    {{ $slot }}
</button>