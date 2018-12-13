<form 
    id="commentForm{{ $review->id }}"
    action="#"
    data-id="{{ $review->id }}"
    class="comment-form"
>
    <div class="form-group">
        <textarea 
            class="form-control comment-textarea comment-content{{ $review->id }}" 
            rows="1" 
            placeholder="Write a comment"
            data-id="{{ $review->id }}"
            name="content"
        ></textarea>
    </div>
</form>
