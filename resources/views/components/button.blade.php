<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-indigo-500 text-black-100 p-4 w-full rounded-full tracking-wide font-semibold font-display focus:outline-none focus:shadow-outline hover:bg-indigo-600 shadow-lg']) }}>
    {{ $slot }}
</button>
