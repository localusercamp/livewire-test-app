<li class="text-stone-500 hover:text-primary-500">
    <a
        wire:navigate
        href="{{ $to }}"
        class="flex items-center text-xl gap-2"
    >
        <x-dynamic-component :component="$icon" class="w-8 h-8 shrink-0 transition-colors duration-200" />

        <p
            x-show="hovered"
            x-transition:enter="transition ease-out duration-500"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-0"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="shrink-0"
        >
            <span class="duration-200">
                {{ $title }}
            </span>
        </p>
    </a>
</li>
