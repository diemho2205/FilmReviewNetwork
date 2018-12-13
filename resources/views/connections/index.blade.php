<div class="row" style="color: #435761">
    <h4 style="font-weight: bold; font-size: 2em; margin-bottom: 10px;"><i class="fa fa-users" aria-hidden="true"></i> Friend List</h4>
</div>
<div class="row">
    @if (count($friends))
        @foreach ($friends as $friend)
            <div class="column w3-center">
                <img src="https://www.w3schools.com/w3images/avatar2.png" style="width:40%" alt="Avatar">
                <hr style="margin: 10px 0">
                <p><a href="">{{ $friend->id }}</a></p>
                <p st><i class="fa fa-users" aria-hidden="true"></i> 500 <i class="fa fa-pencil" aria-hidden="true"></i> 25</p>
            </div>
        @endforeach
    @else
        
    @endif
    {{-- <div class="column w3-center">
        <img src="https://www.w3schools.com/w3images/avatar2.png" style="width:40%" alt="Avatar">
        <hr style="margin: 10px 0">
        <p><a href="">Diem Ho</a></p>
        <p st><i class="fa fa-users" aria-hidden="true"></i> 500 <i class="fa fa-pencil" aria-hidden="true"></i> 25</p>
    </div>
    <div class="column w3-center">
        <h2>Column 2</h2>
        <p>Some text..</p>
    </div>
    <div class="column w3-center">
        <h2>Column 3</h2>
        <p>Some text..</p>
    </div> --}}
</div>