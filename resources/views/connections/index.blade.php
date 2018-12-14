<div class="row" style="color: #435761">
    <h4 style="font-weight: bold; font-size: 2em; margin-bottom: 10px;"><i class="fa fa-users" aria-hidden="true"></i> Friend List</h4>
</div>
<div class="row">
    @if (count($friends))
        @foreach ($friends as $friend)
            <div class="column w3-center" style="padding: 10px">
                <img src={{ asset($friend->personalProfile->avatar) }} style="width:40%" alt="Avatar">
                <hr style="margin: 10px 0">
                <p><a href="{{ route('user.factory', $friend->id) }}">{{ $friend->personalProfile->username }}</a></p>
                <p>
                    <i class="fa fa-users" aria-hidden="true"></i> {{ $friend->num_of_friends }}
                    <i class="fa fa-pencil" aria-hidden="true"></i> {{ count($friend->reviews) }}
                </p>
            </div>
        @endforeach
    @else
        <p>There are no friends ...</p>
    @endif
</div>