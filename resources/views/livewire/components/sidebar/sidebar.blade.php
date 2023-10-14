<nav
    x-data="{ hovered: false }"
    x-on:mouseover="hovered = true"
    x-on:mouseover.away="hovered = false"
    x-bind:class="{ 'w-60': hovered }"
    class="z-40 w-20 min-h-screen absolute p-2 transition-all duration-200"
>
    <div class="min-h-[calc(100vh-16px)] rounded-lg bg-stone-100 flex flex-col justify-between gap-4 border border-stone-200">
        <ul class="p-4 space-y-4">
            @foreach ($links as $link) <livewire:components.sidebar.sidebar-link
                :key="$link['to']"
                :title="$link['title']"
                :to="$link['to']"
                :icon="$link['icon']"
            />@endforeach
        </ul>

        <ul class="p-4">
            <livewire:components.sidebar.sidebar-link to="/settings" title="Settings" icon="heroicon-o-cog-6-tooth" />
        </div>
    </div>
</nav>
