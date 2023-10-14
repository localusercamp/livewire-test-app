<div class="flex flex-col">
    <h1 class="font-bold text-3xl mb-6">Tasks</h1>

    <ul class="flex gap-6">
        @foreach ($boards as $board) <livewire:components.tracker.board
            :key="$board->getKey()"
            :board="$board"
        /> @endforeach
    </ul>
</div>

<script>
// window.Echo.private('test-channel').listen('test-channel-event', e => {
//     console.log('FROM CHANNEL');
//     console.log({ e });
// });

// console.log({ window })
</script>
