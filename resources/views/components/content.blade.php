<main class="content container">
    @foreach ($comments as $comment)
        <x-comment :comment="$comment"/>
    @endforeach
    <x-form/>
</main>
