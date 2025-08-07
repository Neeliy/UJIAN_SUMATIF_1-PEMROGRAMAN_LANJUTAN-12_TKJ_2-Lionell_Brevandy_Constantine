<div>
    <button {{ $attributes->merge(['class' => 'px-6 py-2 rounded bg-gray-300 text-gray-800 font-medium hover:bg-gray-400 transition']) }}>
        {{ $slot }}
    </button>
</div>