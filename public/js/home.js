$(document).ready(function() {
	var showChar = 300;
	var ellipsestext = "...";
	var moretext = "Show more";
    var lesstext = "less";
    
	$('.more').each(function() {
		var content = $(this).html();

		if(content.length > showChar) {

			var c = content.substr(0, showChar);
			var h = content.substr(showChar-1, content.length - showChar);

			var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<br><a href="" class="morelink">' + moretext + '</a></span>';

			$(this).html(html);
		}

	});

	$(".morelink").click(function(){
		if($(this).hasClass("less")) {
			$(this).removeClass("less");
			$(this).html(moretext);
		} else {
			$(this).addClass("less");
			$(this).html(lesstext);
		}
		$(this).parent().prev().toggle();
		$(this).prev().toggle();
		return false;
    });
            
    $("#like-btn").click(function() {
        if ($(this).get(0).style.color == 'red') {
            $(this).css('color', 'black');
            alert('dislike');
        } else {
            // $(this).get(0).style.color = "red";
            $(this).css('color', 'red');
            alert('like');
        }
    })
    
    $("#comment-btn").click(function() {
        $("#comment-content").focus();
    })

	$("#comment-content").keypress(function (e) {
		if(e.which == 13 && !e.shiftKey) {        
			$("commentForm").submit();
			alert('You submitted successfully!');
			// e.preventDefault();
			return false;
		}
    });

	$("#review-content").click(function(){
        $("#formModal").modal();
    });

    $("#add-review").click(function(){
        $("#formModal").modal();
    });
});
