<div class="w3-col m2 w3-center">
    <h4 style="font-weight: bold; text-align: center; margin-bottom: 5px;">New Request</h4>
    <hr style="margin: 10px 0">
    @if (count($newRequests) > 0)
        @foreach ($newRequests as $newRequest)
        <div class="w3-card w3-round w3-white w3-center" style="padding: 10px 5px; margin-bottom: 10px">
            <div class="w3-container">
                <img src={{ asset($newRequest->sender->personalProfile->avatar) }} alt="Avatar" style="width:50%"><br>
                <p>{{ $newRequest->sender->personalProfile->username }}</p>
                <p><a href="{{ route('user.factory', $newRequest->sender->id) }}">View Profile</a></p>
                <div class="w3-row w3-opacity">
                    <div class="w3-half">
                        <form action="{{ route('connects.accept', $newRequest->id) }}" method="POST">
                            @csrf
                
                            <button type="submit" class="w3-button w3-block w3-green w3-section accept-button">
                                    <i class="fa fa-check"></i>
                            </button>
                        </form>
                    </div>
                    <div class="w3-half">
                        <button
                            data-id="{{ $newRequest->id }}"
                            class="w3-button w3-block w3-red w3-section reject-button"
                        >
                            <i class="fa fa-remove"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    @else
        <p>No new requests</p>
    @endif
    
    <br>
    <hr style="margin: 10px 0">
    <h4 style="font-weight: bold; text-align: center; margin-bottom: 5px;">Friend suggestions</h4>
    <hr style="margin: 10px 0">
    @if (count($suggestedUsers) > 0)
        @foreach ($suggestedUsers as $suggestedUser)
        <div class="w3-card w3-round w3-white w3-center" style="padding: 20px 10px">
                <div class="w3-container">
                    <img src={{ asset($suggestedUser->personalProfile->avatar) }} alt="Avatar" style="width:50%"><br>
                    <p>{{ $suggestedUser->personalProfile->username }}</p>
                    <p><a href="">View Profile</a></p>
                    <div class="w3-row w3-opacity">
                        <div class="w3-half">
                            <button
                                style="margin: 0 40px"
                                class="w3-button w3-block w3-green w3-section contact-button"
                                title="Contact"
                                data-id="{{ $suggestedUser->id }}"
                                id="contact{{ $suggestedUser->id }}"
                            >Contact</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>No suggested friends</p>
    @endif
    
</div>