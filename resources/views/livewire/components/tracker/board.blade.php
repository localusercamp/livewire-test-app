<section
    class="border border-stone-200 rounded-lg px-6 py-5"
>
    <h2 class="font-medium text-xl mb-1">{{ $board->title }}</h2>

    <hr class="mb-4">

    <ul class="space-y-4">
        @foreach ($board->tasks as $task) <livewire:components.tracker.task
            :task="$task"
        /> @endforeach
    </ul>
</section>
