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
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
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

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
	<a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
	<a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
	<a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
	<a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
	<!-- The Grid -->
	<div class="row" style="margin: 0px 19% 20px 27%; background-color: darkgrey; border-radius: 10px;">
		<ul class="nav nav-pills nav-justified" role="tablist">
			<li style="border-right: 3px solid gray;">
				<a style="font-size: 1.5em; font-style: bold; font-weight: bold; color: black" href={{ route('home') }}>
					<i style="font-size: 1.5em; padding-right: 15px" class="fa fa-home" aria-hidden="true"></i>Home
				</a>
			</li>
			<li>
				<a style="font-size: 1.5em; font-style: bold; font-weight: bold; color: black" href={{ route('factory') }}>
					<i style="font-size: 1.4em; padding-right: 15px" class="fa fa-video-camera" aria-hidden="true"></i>Factory
				</a>
			</li>
			<li style="border-left: 3px solid gray;">
				<a style="font-size: 1.5em; font-style: bold; font-weight: bold; color: black" href="#">
					<i style="font-size: 1.4em; padding-right: 15px" class="fa fa-users" aria-hidden="true"></i>Connect
				</a>
			</li>
		</ul>
	</div>
	<div class="w3-row">
		<!-- Left Column -->
		<div class="w3-col m3">
			<!-- Profile -->
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
			
			<!-- Accordion -->
			<div class="w3-card w3-round">
				<div class="w3-white">
					<button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-play" aria-hidden="true"></i> My Favorite Film</button>
					<div id="Demo1" class="w3-hide w3-container">
						<p>Some text..</p>
					</div>
					<button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-user" aria-hidden="true"></i> My Favorite Character</button>
					<div id="Demo2" class="w3-hide w3-container">
						<p>Some other text..</p>
					</div>
					<button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-film" aria-hidden="true"></i> My Favorite Genre</button>
					<div id="Demo3" class="w3-hide w3-container">
						<p>Some other text..</p>
					</div>
					<button onclick="myFunction('Demo4')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-smile-o" aria-hidden="true"></i> My Feeling</button>
					<div id="Demo4" class="w3-hide w3-container">
						<p>Some other text..</p>
					</div>
					<button onclick="myFunction('Demo5')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-smile-o" aria-hidden="true"></i> My Feeling</button>
					<div id="Demo5" class="w3-hide w3-container">
						<div class="w3-row-padding">
							<br>
							<div class="w3-half">
								<img src="/w3images/lights.jpg" style="width:100%" class="w3-margin-bottom">
							</div>
							<div class="w3-half">
								<img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
							</div>
							<div class="w3-half">
								<img src="/w3images/mountains.jpg" style="width:100%" class="w3-margin-bottom">
							</div>
							<div class="w3-half">
								<img src="/w3images/forest.jpg" style="width:100%" class="w3-margin-bottom">
							</div>
							<div class="w3-half">
								<img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
							</div>
							<div class="w3-half">
								<img src="/w3images/snow.jpg" style="width:100%" class="w3-margin-bottom">
							</div>
						</div>
					</div>
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
										rows="3" id="comment"
										placeholder="I am sure you has enjoyed a good film. Do you want to share that?"
									></textarea>
								</div>
								<div class="col-sm-1" style="padding: 10px 0">
									<button
										style="border: 2px solid darkslategray; border-radius: 50%; background-color: transparent !important;"
										type="button" class="w3-button w3-theme"
									>
										<i style="font-size: 2em; color: darkslategray" class="fa fa-plus"></i>
									</button> 
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
                
                <div class="w3-dropdown-hover w3-hide-small w3-right">
                    <button style="padding: 8px 5px !important;" class="w3-button" title="Notifications"><i class="fa fa-align-right" aria-hidden="true"></i></span></button>     
                    <div style="right: 0; left: auto;" class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:250px">
                        <a href="#" class="w3-bar-item w3-button">Edit my review</a>
                        <a href="#" class="w3-bar-item w3-button">Delete my review</a>
                    </div>
                </div>
                <h4>John Doe</h4>
                <span class="w3-opacity">1 min</span>
				
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
					<hr class="w3-review">
					<i class="fa fa-heart" style="font-size: 1.5em; padding: 0.25em;" aria-hidden="true"></i> 25
					<i class="fa fa-comment" style="font-size: 1.5em; padding: 0.25em;" aria-hidden="true"></i> 10
				</div>
			</div>
			
		<!-- End Middle Column -->
		</div>
		
		<!-- Right Column -->
		<div class="w3-col m2">
			<h4 style="font-weight: bold; text-align: center; margin-bottom: 5px;">New Request</h4>
			<hr style="margin: 10px 0">
			<div class="w3-card w3-round w3-white w3-center">
				<div class="w3-container">
					<p>Friend Request</p>
					<img src="https://www.w3schools.com/w3images/avatar2.png" alt="Avatar" style="width:50%"><br>
					<span>Jane Doe</span>
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
			<div class="w3-card w3-round w3-white w3-center">
				<div class="w3-container">
					<p>Friend Request</p>
					<img src="https://www.w3schools.com/w3images/avatar2.png" alt="Avatar" style="width:50%"><br>
					<span>Jane Doe</span>
					<div class="w3-row w3-opacity">
						<div class="w3-half">
							<button style="margin: 0 50px" class="w3-button w3-block w3-green w3-section" title="Contact">Contact</button>
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
});
</script>
<script>
function myFunction(id) {
		var x = document.getElementById(id);
		if (x.className.indexOf("w3-show") == -1) {
				x.className += " w3-show";
				x.previousElementSibling.className += " w3-theme-d1";
		} else { 
				x.className = x.className.replace("w3-show", "");
				x.previousElementSibling.className = 
				x.previousElementSibling.className.replace(" w3-theme-d1", "");
		}
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
		var x = document.getElementById("navDemo");
		if (x.className.indexOf("w3-show") == -1) {
				x.className += " w3-show";
		} else { 
				x.className = x.className.replace(" w3-show", "");
		}
}
</script>

</body>
</html> 
