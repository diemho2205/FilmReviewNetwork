<!DOCTYPE html>
<html>
<head>
    <title>Film Review Network</title>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+TC" rel="stylesheet">
    {{-- <link rel="stylesheet" href="css/home.css"> --}}
    <link rel="stylesheet" type="text/css" href="pro-style.css">
</head>
<body class="w3-theme-l5">
<div class="w3-top  w3-theme-d2">
    <div class="w3-bar w3-justify w3-large" style="max-width: 60%; margin: 0 23%;">
        <a href="#" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Logo</a>
        <div class="w3-dropdown-hover w3-hide-small w3-right">
            <button style="padding: 8px 5px !important;" class="w3-button" title="Notifications">
                <img src="https://www.w3schools.com/w3images/avatar2.png" class="w3-circle" style="height:23px;width:23px" alt="Avatar">
            </button>     
            <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:100px">
            <a
                href="{{ route('logout') }}"
                class="w3-bar-item w3-button"
                onclick="
                    event.preventDefault();
                    document.getElementById('logout-form').submit();
                    "
                id="logout"
            >
                Log out
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
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
				<a style="border-radius: 10px; font-size: 1.25em; color: white" href={{ route('connect') }}>
					<i style="font-size: 1.2em; padding-right: 15px" class="fa fa-users" aria-hidden="true"></i>Connect
				</a>
			</li>
		</ul>
	</div>
	<div class="w3-row">
        <!DOCTYPE html>
<html>
<head>
    <title>Film Review Network</title>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+TC" rel="stylesheet">
    <link rel="stylesheet" href="css/home.css">
</head>
<body class="w3-theme-l5">
<div class="w3-top  w3-theme-d2">
    <div class="w3-bar w3-justify w3-large" style="max-width: 60%; margin: 0 23%;">
        <a href="#" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Logo</a>
        <div class="w3-dropdown-hover w3-hide-small w3-right">
            <button style="padding: 8px 5px !important;" class="w3-button" title="Notifications">
                <img src="https://www.w3schools.com/w3images/avatar2.png" class="w3-circle" style="height:23px;width:23px" alt="Avatar">
            </button>     
            <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:100px">
            <a
                href="{{ route('logout') }}"
                class="w3-bar-item w3-button"
                onclick="
                    event.preventDefault();
                    document.getElementById('logout-form').submit();
                    "
                id="logout"
            >
                Log out
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
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
<div style="max-width:1400px;">    
	<div class="w3-row">
        <div class="w3-col m7" style=" margin: 0 25%;">
            <div class="row" style="margin: 0 20px 0 20px">
                <div class="title-inf-box">
                    <img src="profile.png" class="avatar">
                    <h5 style="display: inline;">Update your information to find people with similar interests.</h5>
                </div>
            </div>
            <div class="row" style="padding: 20px 30px; margin: 0 20px 20px 20px">
                <div class="title-box infor-box">
                    <img src="user.png" class="avatar">
                    <h4 style="display: inline;">Personal Information</h4>
                </div>
                <h6>Gender</h6>
                <div class="title-box radio-infor">
                    <input type="radio" name="gender" value="male" checked> Male<br>
                    <input type="radio" name="gender" value="female"> Female<br>
                </div>
                
                <h6>Address</h6>
                <div class="title-box infor">
                    <input type="text" value="{{ $user->personalProfile->address }}" name="address">
                </div>
        
                <h6>Birthday</h6>
                <div class="posi-box">
                    <input type="date" value="{{ $user->personalProfile->birthday }}" name="birthday">
                </div>
        
                <div class="title-box infor-box margin-box">
                    <img src="film.png" class="avatar">
                    <h4 style="display: inline;">Film Favorite Information</h4>
                </div>
                <h6>Favorite Film</h6>
                <div class="title-box infor">
                    <input type="text" value="{{ $user->filmProfile->favorite_film }}" name="favorite_film">
                </div>
                <h6>Favorite Character</h6>
                <div class="title-box infor">
                    <input type="text" value="{{ $user->filmProfile->favorite_character }}" name="favorite_character">
                </div>
                <h6>Favorite Genre</h6>
                <div class="title-box infor">
                    <input type="text" value="{{ $user->filmProfile->favorite_genre }}" name="favorite_genre">
                </div>
                <h6>Feeling</h6>
                <div class="title-box infor">
                    <input type="text" value="{{ $user->filmProfile->feeling }}" name="feeling">
                </div>

                <div class="w3-right" style="margin-top: 10px">
                    <button style="background-color: #7d97a5; margin-right: 60px" class="btn-info w3-button" type="submit" name="">Save</button>
                </div>
            </div>
        </div>
	</div>
</div>

<footer class="w3-container w3-theme-d3 w3-padding-16">
	<h5>Footer</h5>
</footer>

<footer class="w3-container w3-theme-d5">
	<p>Powered by <a href="#" target="_blank">PHD</a></p>
</footer>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/home.js"></script>
<script src="js/ajax.js"></script>
</body>
</html>  
