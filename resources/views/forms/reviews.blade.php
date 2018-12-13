<form
    method="post"
    action="{{ route('reviews.store') }}"
    enctype="multipart/form-data"
    style="max-width: 40%; margin:auto; background-color: white; padding: 1em 2em;"
>
    @csrf
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
        <input class="input-field" type="file" name="poster">
    </div>

    <div class="input-container">
        <span style="margin-right: 0.75em; font-size: 1em;">Your rating: </span>
        <span class="rating">
            <input type="radio" class="rating-input" id="rating-input-1-5" name="rate" value="5"/>
            <label for="rating-input-1-5" class="rating-star"></label>
            <input type="radio" class="rating-input" id="rating-input-1-4" name="rate" value="4"/>
            <label for="rating-input-1-4" class="rating-star"></label>
            <input type="radio" class="rating-input" id="rating-input-1-3" name="rate" value="3"/>
            <label for="rating-input-1-3" class="rating-star"></label>
            <input type="radio" class="rating-input" id="rating-input-1-2" name="rate" value="2"/>
            <label for="rating-input-1-2" class="rating-star"></label>
            <input type="radio" class="rating-input" id="rating-input-1-1" name="rate" value="1"/>
            <label for="rating-input-1-1" class="rating-star"></label>
        </span>
    </div>
    
    <textarea style="width: 100%" name="feeling" rows="3" placeholder="Your feeling is ..."></textarea>
    
    <button type="submit" class="btn">Post</button>
</form>