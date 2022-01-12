<div class="form">
    <h2 class="form-title">Submit comment</h2>
    <form method="POST" action="<?php echo route('create'); ?>">
        @csrf
        <label for="name">Your name</label>
        <input id="name" name="name" type="text" placeholder="John">
        <label for="message">Your message</label>
        <textarea id="message" name="message"></textarea>
        <button type="submit">Submit</button>
    </form>
    @if($errors->any())
        <ul class="errors">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
</div>
