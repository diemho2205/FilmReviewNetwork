@extends('layouts.app')

@section('main')
@if ($reviews)
@foreach ($reviews as $review)
	<div class="w3-container w3-card w3-white w3-round w3-margin"><br>
		<img
			src={{ asset(($review->user->personalProfile->avatar) ? Auth::user()->personalProfile->avatar : 'avatar.png' ) }}
			alt="Avatar" class="w3-left w3-circle w3-margin-right"
			style="width:60px"
		>
		<div class="w3-dropdown-hover w3-hide-small w3-right">
			<button style="padding: 8px 5px !important;" class="w3-button" title="Notifications"><i class="fa fa-align-right" aria-hidden="true"></i></span></button>     
			<div style="right: 0; left: auto;" class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:250px">
				<a href={{ route('reviews.edit', $review->id) }} class="w3-bar-item w3-button">Edit my review</a>
				<form action="{{ route('reviews.destroy', $review->id) }}" method="POST">
					{{ csrf_field() }}
					{{ method_field('DELETE') }}
		
					<button type="submit" class="w3-bar-item w3-button">
						Delete my review
					</button>
				</form>
			</div>
		</div>
		<h4>{{ $review->user->personalProfile->username }}</h4>
		<span class="w3-opacity">{{ $review->created_at }}</span>
		<hr class="w3-clear">
		<div
			class="row row-film"
			style="margin: 10px; border: 1px solid #ddd; border-radius: 4px; background-color: #ddd"
		>
				<div class="col-sm-6" style="padding: 0;">
					<img style="width: 100%; height: 200px;" src={{ asset('avatar/'.$review->poster) }} />
				</div>
				<div class="col-sm-6">
				<h3 style="margin: 5px 0; padding: 5px 0; font-style: italic">{{ $review->name }}</h3>
					<hr class="w3-review">
					<h5 style="margin: 0; font-style: italic">Actor/Actress</h5>
					<p>{{ $review->character }}</p>
					<hr class="w3-review">
					<h5 style="margin: 0; font-style: italic">Main Content</h5>
					<p>{{ $review->content }}</p>
					<hr class="w3-review">
					<h5 style="margin: 0; font-style: italic">My Rating</h5>
					{{ showRate($review->rate) }}
				</div>
		</div>
		<div class="row" style="margin: 10px;">
			<div>
				<div class="comment more text-justify">
					{{ $review->feeling }}
				</div>
			</div>
			<br>
			<i class="fa fa-heart-o" style="font-size: 1.5em; padding: 0.25em;" aria-hidden="true"></i>
			<span id="like-count{{ $review->id }}">{{ count($review->likes) }}</span>
			<i class="fa fa-comment-o" style="font-size: 1.5em; padding: 0.25em;" aria-hidden="true"></i>
			<span id="comment-count{{ $review->id }}">{{ count($review->comments) }}</span>
			<hr class="w3-review">
			<div class="row">
				<div class="col-sm-6 w3-center">
					<button style="color: {{ ($review->liked_by_auth_user) ? 'red' : 'black'}}" type="button" class="w3-button like" data-id="{{ $review->id }}">
						<i
							style="font-size: 1.5em;"
							class="fa fa-thumbs-up"
						></i> Like
					</button> 
				</div>
				<div class="col-sm-6 w3-center">
					<button
						type="button" class="w3-button comment-btn" data-id="{{ $review->id }}"
					>
						<i style="font-size: 1.5em;" class="fa fa-comment"></i> Comment
					</button>
				</div>
			</div>
			<hr class="w3-review">
		<div id="commentList{{ $review->id }}" style="margin-top: 15px">
				@include('comments.index')
			</div>
			<br>
			@include('forms.comments')
		</div>
	</div>
@endforeach
@else
<div class="alert-info">
	<p>There are no reviews</p>
</div>
@endif

@endsection
