<div class="w3-col m3">
    <div class="w3-card w3-round w3-white">
        <div class="w3-container w3-center" style="padding: 20px;">
            <p class="w3-center">
                <img src={{ asset((Auth::user()->personalProfile->avatar) ? Auth::user()->personalProfile->avatar : 'avatar.png' ) }} class="w3-circle" style="height:106px;width:106px" alt="Avatar">
            </p>
            <p>{{ Auth::user()->personalProfile->username }}</p>
            <hr>
            @if (Auth::user()->personalProfile->address != '')
                <p style="text-align: center"><i class="fa fa-home fa-fw w3-text-theme"></i> {{ Auth::user()->personalProfile->address }}</p>
            @endif
            @if (Auth::user()->personalProfile->birthday != '')
            <p style="text-align: center"><i class="fa fa-birthday-cake fa-fw w3-text-theme"></i> {{ Auth::user()->personalProfile->birthday }}</p>
            @endif
            <a style="w3-center" href="{{ route('profile.edit', Auth::id()) }}">Update my profile</a>
        </div>
    </div>
    <br>
    <div class="w3-card w3-round">
        <div class="panel panel-default" style="margin-bottom:0; border: none">
            <div class="panel-heading" style="background-color: #7d97a5;"><i class="fa fa-play" aria-hidden="true"></i> My Favorite Film</div>
            <div class="panel-body">{{ Auth::user()->filmProfile->favourite_film }}</div>
        </div>
        <div class="panel panel-default" style="margin-bottom:0; border: none">
            <div class="panel-heading" style="background-color: #7d97a5;"><i class="fa fa-user" aria-hidden="true"></i> My Favorite Character</div>
            <div class="panel-body">{{ Auth::user()->filmProfile->favourite_character }}</div>
        </div>
        <div class="panel panel-default" style="margin-bottom:0; border: none">
            <div class="panel-heading" style="background-color: #7d97a5;"><i class="fa fa-film" aria-hidden="true"></i> My Favorite Genre</div>
            <div class="panel-body">{{ Auth::user()->filmProfile->favorite_genre }}</div>
        </div>
        <div class="panel panel-default" style="margin-bottom:0; border: none">
            <div class="panel-heading" style="background-color: #7d97a5;"><i class="fa fa-smile-o" aria-hidden="true"></i> My Feeling</div>
            <div class="panel-body">{{ Auth::user()->filmProfile->feeling }}</div>
        </div>
    </div>
</div>