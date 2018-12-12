<!DOCTYPE html>
<html>
<title>Film Review Network</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Noto+Serif+TC" rel="stylesheet">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: 'Noto Serif TC', serif}
a:hover {
	background-color: #435761 !important;
	border: none !important;
}
.w3-button:hover {
	background-color: transparent !important;
}

.w3-review{
	margin: 5px;
}
.row-film {
	border: 2px solid gray;
}
.stars {
	color: coral
}

::placeholder {
	font-style: italic;
	color: darkslategray;
}

a.morelink {
	text-decoration:none;
	outline: none;
}

.morecontent span {
	display: none;
}
.input-container {
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: #4d636f;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid #4d636f;
}

/* Set a style for the submit button */
.btn {
  background-color: #4d636f;
  color: white;
  padding: 15px 20px;
  margin: 10px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}

.rating {
    overflow: hidden;
    display: inline-block;
    font-size: 0;
    position: relative;
}
.rating-input {
    float: right;
    width: 16px;
    height: 16px;
    padding: 0;
    margin: 0 0 0 -16px;
    opacity: 0;
}
.rating:hover .rating-star:hover,
.rating:hover .rating-star:hover ~ .rating-star,
.rating-input:checked ~ .rating-star {
    background-position: 0 0;
}
.rating-star,
.rating:hover .rating-star {
    position: relative;
    float: right;
    display: block;
    width: 16px;
    height: 16px;
    background: url('https://home.et.utwente.nl/slootenvanf/wp-content/plugins/fvs-peer-review/img/star.png') 0 -16px;
}


</style>
<body class="w3-theme-l5">

<!-- Navbar -->
<div class="w3-top  w3-theme-d2">
 <div class="w3-bar w3-justify w3-large" style="max-width: 60%; margin: 0 23%;">
	<a href="#" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Logo</a>
	<div class="w3-dropdown-hover w3-hide-small w3-right">
		<button style="padding: 8px 5px !important;" class="w3-button" title="Notifications">
			<img src="https://www.w3schools.com/w3images/avatar2.png" class="w3-circle" style="height:23px;width:23px" alt="Avatar">
		</button>     
		<div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:100px">
			<a href="#" class="w3-bar-item w3-button">Log out</a>
			<a href="#" class="w3-bar-item w3-button">My profile</a>
		</div>
	</div>
	<div class="w3-dropdown-hover w3-hide-small w3-right">
		<button style="padding: 8px 5px !important;" class="w3-button" title="Notifications"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">3</span></button>     
		<div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:250px">
			<a href="#" class="w3-bar-item w3-button">One new friend request</a>
			<a href="#" class="w3-bar-item w3-button">John Doe posted on your wall</a>
			<a href="#" class="w3-bar-item w3-button">Jane likes your post</a>
		</div>
	</div>
</div>
</div>

<!-- Page Container -->
<div style="max-width:1400px; margin-top:80px">    
	<div class="row" style="border-radius: 10px; margin: 0px 19% 20px 27%; background-color: #4d636f;">
		<ul class="nav nav-pills nav-justified" role="tablist">
			<li style="border-right: 3px solid #435761;">
				<a style="border-radius: 10px; font-size: 1.25em; color: white" href={{ route('home') }}>
					<i style="font-size: 1.5em; padding-right: 15px" class="fa fa-home" aria-hidden="true"></i>Home
				</a>
			</li>
			<li>
				<a style="border-radius: 10px; font-size: 1.25em; color: white" href={{ route('factory') }}>
					<i style="font-size: 1.2em; padding-right: 15px" class="fa fa-video-camera" aria-hidden="true"></i>Factory
				</a>
			</li>
			<li style="border-left: 3px solid #435761;">
				<a style="border-radius: 10px; font-size: 1.25em; color: white" href="#">
					<i style="font-size: 1.2em; padding-right: 15px" class="fa fa-users" aria-hidden="true"></i>Connect
				</a>
			</li>
		</ul>
	</div>
	<div class="w3-row">
		<div class="w3-col m3">
			<div class="w3-card w3-round w3-white">
					<div class="w3-container w3-center" style="padding: 20px;">
						<p class="w3-center"><img src="https://www.w3schools.com/w3images/avatar2.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
						<hr>
						<p style="text-align: center"><i class="fa fa-home fa-fw w3-text-theme"></i> London, UK</p>
						<p style="text-align: center"><i class="fa fa-birthday-cake fa-fw w3-text-theme"></i> April 1, 1988</p>
						<a style="w3-center" href="#">Update my profile</a>
					</div>
				</div>
			<br>
			
			<div class="w3-card w3-round">
				<div class="panel panel-default" style="margin-bottom:0; border: none">
					<div class="panel-heading" style="background-color: #7d97a5;"><i class="fa fa-play" aria-hidden="true"></i> My Favorite Film</div>
					<div class="panel-body">Panel Content</div>
				</div>
				<div class="panel panel-default" style="margin-bottom:0; border: none">
					<div class="panel-heading" style="background-color: #7d97a5;"><i class="fa fa-user" aria-hidden="true"></i> My Favorite Character</div>
					<div class="panel-body">Panel Content</div>
				</div>
				<div class="panel panel-default" style="margin-bottom:0; border: none">
					<div class="panel-heading" style="background-color: #7d97a5;"><i class="fa fa-film" aria-hidden="true"></i> My Favorite Genre</div>
					<div class="panel-body">Panel Content</div>
				</div>
				<div class="panel panel-default" style="margin-bottom:0; border: none">
					<div class="panel-heading" style="background-color: #7d97a5;"><i class="fa fa-smile-o" aria-hidden="true"></i> My Feeling</div>
					<div class="panel-body">Panel Content</div>
				</div>
			</div>
			<br>
			
			<br>
		<!-- End Left Column -->
		</div>
		
		<!-- Middle Column -->
		<div class="w3-col m7">
			<div class="w3-row-padding">
				<div class="w3-col m12">
					<div class="w3-card w3-round w3-white">
						<div class="w3-container w3-padding">
							<div class="row" style="margin: 0.5em">
								<div class="col-sm-11">
									<textarea
										class="form-control"
										rows="3" id="review-content"
										placeholder="I am sure you has enjoyed a good film. Do you want to share that?"
									></textarea>
									<div class="modal fade" id="formModal" style="margin-top: 50px">
										<form action="/action_page.php" style="max-width: 40%; margin:auto; background-color: white; padding: 1em 2em;">
											<h4><i class="fa fa-pencil" aria-hidden="true"></i> Make review</h4>
											<div class="input-container">
												<i class="fa fa-film icon"></i>
												<input class="input-field" type="text" placeholder="What's the name of film?" name="name">
											</div>
											
											<div class="input-container">
												<i class="fa fa-user icon"></i>
												<input class="input-field" type="text" placeholder="What are the characters of film?" name="character">
											</div>

											<div class="input-container">
												<i class="fa fa-book icon" aria-hidden="true"></i>
												<input class="input-field" type="text" placeholder="What's the main content of film?" name="content">
											</div>

											<div class="input-container">
												<i class="fa fa-image icon"></i>
												<input class="input-field" type="file" placeholder="What's the poster of film?" name="character">
											</div>

											<div class="input-container">
												<span style="margin-right: 0.75em; font-size: 1em;">Your rating: </span>
												<span class="rating">
													<input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1"/>
													<label for="rating-input-1-5" class="rating-star"></label>
													<input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1"/>
													<label for="rating-input-1-4" class="rating-star"></label>
													<input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1"/>
													<label for="rating-input-1-3" class="rating-star"></label>
													<input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1"/>
													<label for="rating-input-1-2" class="rating-star"></label>
													<input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1"/>
													<label for="rating-input-1-1" class="rating-star"></label>
												</span>
											</div>
											<textarea style="width: 100%" name="" id="" rows="3" placeholder="Your feeling is ..."></textarea>
											
											<button type="submit" class="btn">Post</button>
										</form>
									</div>
								</div>
								<div class="col-sm-1" style="padding: 10px 0">
									<button
										style="border: 2px solid darkslategray; border-radius: 50%; background-color: transparent !important;"
										type="button" class="w3-button w3-theme"
									>
										<i style="font-size: 2em; color: darkslategray" class="fa fa-plus"></i>
									</button> 
								</div>
								<div class="modal fade" id="myModal" role="dialog" style="background-color: white">
									<div class="modal-dialog">
									  	<div class="modal-content">
											<div class="modal-header">
										  		<button type="button" class="close" data-dismiss="modal">&times;</button>
										  		<h4 class="modal-title">Modal Header</h4>
											</div>
											<div class="modal-body">
												<p>Some text in the modal.</p>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											</div>
									  </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="w3-container w3-card w3-white w3-round w3-margin"><br>
				<img
					src="https://www.w3schools.com/w3images/avatar2.png"
					alt="Avatar" class="w3-left w3-circle w3-margin-right"
					style="width:60px"
				>
				<span class="w3-right w3-opacity">1 min</span>
				<h4>John Doe</h4><br>
				<hr class="w3-clear">
				<div
					class="row row-film"
					style="margin: 10px; border: 1px solid #ddd; border-radius: 4px; background-color: #ddd"
				>
						<div class="col-sm-6" style="padding: 0;">
							<img style="width: 100%; height: 200px;" src="image/try1.jpg" />
						</div>
						<div class="col-sm-6">
							<h3 style="margin: 5px 0; padding: 5px 0; font-style: italic">Cô Ba Sài Gòn</h3>
							<hr class="w3-review">
							<h5 style="margin: 0; font-style: italic">Actor/Actress</h5>
							<p>Do you want to share that</p>
							<hr class="w3-review">
							<h5 style="margin: 0; font-style: italic">Main Content</h5>
							<p>Do you want to share that</p>
							<hr class="w3-review">
							<h5 style="margin: 0; font-style: italic">My Rating</h5>
							{{ showRate(3.5) }}
						</div>
				</div>
				{{-- <div class="row" style="margin: 10px;">
					<p class="text-justify">Laravel cung cấp sẵn rất nhiều helper function tuyệt vời và rất tiện lợi cho bạn làm việc với arrays, file paths, strings, và routes, đặc biệt là hàm dd(). Bạn cũng có thể tự viết cho mình các helper function for project Laravel và các packages PHP bằng cách sử dụng Composer để import một cách tự động.</p>
				</div> --}}
				<div class="row" style="margin: 10px;">
					<div>
						<div class="comment more text-justify">
							Phim có buổi công chiếu đầu tiên trên toàn thế giới vào ngày 14 tháng 10 năm 2017 
							tại Liên hoan phim quốc tế Busan lần thứ 22 ở Hàn Quốc trước khi ra mắt công chúng Việt Nam 
							vào ngày 10 tháng 11 cùng năm. Sau gần một tháng công chiếu, phim thu về hơn 60 tỷ đồng. 
							Tại Liên hoan phim Việt Nam lần thứ 20, Cô Ba Sài Gòn giành hai giải, bao gồm Giải thưởng của Ban giám khảo.
						</div>
					</div>
					<br>
					<i class="fa fa-heart-o" style="font-size: 1.5em; padding: 0.25em;" aria-hidden="true"></i> 25
					<i class="fa fa-comment-o" style="font-size: 1.5em; padding: 0.25em;" aria-hidden="true"></i> 10
					<hr class="w3-review">
					<div class="row">
						<div class="col-sm-6 w3-center">
							<button
								type="button" class="w3-button" onclick="like()"
							>
								<i id="like" style="font-size: 1.5em;" class="fa fa-thumbs-up"></i> Like
							</button> 
						</div>
						<div class="col-sm-6 w3-center">
							<button
								type="button" class="w3-button" onclick="comment()"
							>
								<i style="font-size: 1.5em;" class="fa fa-comment-o"></i> Comment
							</button>
						</div>
					</div>
					<hr class="w3-review">
					<div id="comment" style="margin-top: 15px">
						<div class="row">
							<div class="col-sm-1">
								<img
									src="https://www.w3schools.com/w3images/avatar2.png"
									alt="Avatar" class="w3-left w3-circle w3-margin-right"
									style="width: 50px; padding-left: 5px"
								>
							</div>
							<div class="col-sm-11">
								<span style="font-weight: bolder; padding-right: 3px;">Hello</span>
								Phim có buổi công chiếu đầu tiên trên toàn thế giới vào ngày 14 tháng 10 năm 2017
							</div>
						</div>
					</div>
					<br>
					<form id="commentForm" action="#">
						<div class="form-group">
							<textarea class="form-control" rows="1" id="comment-content" placeholder="Write a comment"></textarea>
						</div>
					</form>
				</div>
			</div>
			
		<!-- End Middle Column -->
		</div>
		<script>
			function comment() {
				document.getElementById('comment-content').focus();
			}

			function like() {
				if (document.getElementById('like').style.color == "red") {
					document.getElementById('like').style.color = "black";
				} else {
					document.getElementById('like').style.color = "red";
				}
				
			}
		</script>
		
		<!-- Right Column -->
		<div class="w3-col m2">
			<h4 style="font-weight: bold; text-align: center; margin-bottom: 5px;">New Request</h4>
			<hr style="margin: 10px 0">
			<div class="w3-card w3-round w3-white w3-center" style="padding: 20px 10px">
				<div class="w3-container">
					<img src="https://www.w3schools.com/w3images/avatar2.png" alt="Avatar" style="width:50%"><br>
					<p>Jane Doe</p>
					<p><a href="">View Profile</a></p>
					<div class="w3-row w3-opacity">
						<div class="w3-half">
							<button class="w3-button w3-block w3-green w3-section" title="Accept"><i class="fa fa-check"></i></button>
						</div>
						<div class="w3-half">
							<button class="w3-button w3-block w3-red w3-section" title="Decline"><i class="fa fa-remove"></i></button>
						</div>
					</div>
				</div>
			</div>
			<br>
			<h4 style="font-weight: bold; text-align: center; margin-bottom: 5px;">Friend suggestions</h4>
			<hr style="margin: 10px 0">
			<div class="w3-card w3-round w3-white w3-center" style="padding: 20px 10px">
				<div class="w3-container">
					<img src="https://www.w3schools.com/w3images/avatar2.png" alt="Avatar" style="width:50%"><br>
					<p>Jane Doe</p>
					<p><a href="">View Profile</a></p>
					<div class="w3-row w3-opacity">
						<div class="w3-half">
							<button style="margin: 0 40px" class="w3-button w3-block w3-green w3-section" title="Contact">Contact</button>
						</div>
					</div>
				</div>
			</div>
			<br>
		<!-- End Right Column -->
		</div>
		
	<!-- End Grid -->
	</div>
	
<!-- End Page Container -->
</div>
<br>

<!-- Footer -->
<footer class="w3-container w3-theme-d3 w3-padding-16">
	<h5>Footer</h5>
</footer>

<footer class="w3-container w3-theme-d5">
	<p>Powered by <a href="#" target="_blank">PHD</a></p>
</footer>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
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
});
</script>
</body>
</html> 
