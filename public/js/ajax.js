$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.like').click(function() {
        reviewId = $(this).attr('data-id');
        likeCount = parseInt($('#like-count' + reviewId).html());
        $.ajax({
            context: this,
            url: '/review/likes',
            type: 'POST',
            data: {
                reviewId: reviewId,
            },
            success: function success(data) {
                if ($(this).get(0).style.color == 'red') {
                    $(this).css('color', 'black');
                    $('#like-count' + reviewId).html(likeCount - 1);
                    // alert('unlike successfully');
                } else {
                    $(this).css('color', 'red');
                    $('#like-count' + reviewId).html(likeCount + 1);
                    // alert('like successfully');
                }
                
            },
        });
    });

    $('.comment-form').submit(function(event) {
        event.preventDefault();
        reviewId = $(this).attr('data-id');
        content = $('.comment-content'+reviewId).val();
        commentCount = parseInt($('#comment-count' + reviewId).html());

        $.ajax({
            context: this,
            url: 'review/comments',
            type: 'POST',
            data: {
                reviewId: reviewId,
                content: content,
            }
        }).done(function (data) {
            $('#comment-count' + reviewId).html(commentCount + 1);
            $('#commentList'+reviewId).html(data);
            $('#commentForm'+reviewId)[0].reset();
        });

        return false;
    });

    $('.contact-button').click(function() {
        toId = $(this).attr('data-id');
        $.ajax({
            context: this,
            url: '/connects',
            type: 'POST',
            data: {
                toId: toId,
            },
            success: function success(data) {
               $('#contact'+toId).attr('disabled', 'disabled');
            }
        });
    })

    $('.reject-button').click(function() {
        requestId = $(this).attr('data-id');
        $.ajax({
            url: '/connects/'.concat(requestId),
            type: 'DELETE',
            data: {
                requestId: requestId,
            }
        }).done(function(data) {
            $('#right-side').html(data);
        });
    });

    $('.reject-button').click(function() {
        requestId = $(this).attr('data-id');
        $.ajax({
            url: '/connect/accept',
            type: 'POST',
            data: {
                requestId: requestId,
            }
        }).done(function(data) {
            $('#right-side').html(data);
        });
    });
});
