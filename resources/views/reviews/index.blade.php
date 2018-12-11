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
                    type="button" class="w3-button" id="like-btn"
                >
                    <i id="like" style="font-size: 1.5em;" class="fa fa-thumbs-up"></i> Like
                </button> 
            </div>
            <div class="col-sm-6 w3-center">
                <button
                    type="button" class="w3-button" id="comment-btn"
                >
                    <i style="font-size: 1.5em;" class="fa fa-comment"></i> Comment
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
        @include('forms.comments')
    </div>
</div>