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
                            @include('forms.reviews')
                        </div>
                    </div>
                    <div class="col-sm-1" style="padding: 10px 0">
                        <button
                            style="border: 2px solid darkslategray; border-radius: 50%; background-color: transparent !important;"
                            type="button"
                            class="w3-button w3-theme" 
                            id="add-review"
                        >
                            <i style="font-size: 2em; color: darkslategray" class="fa fa-plus"></i>
                        </button> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>