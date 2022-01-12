<section class="comment">
    <div class="comment-meta">
        <span class="comment-name">{{ $comment->name }}</span>
        <span class="comment-date">{{ $comment->created_at }}</span>
    </div>
    <p class="comment-text">{{ $comment->text }}</p>
</section>
