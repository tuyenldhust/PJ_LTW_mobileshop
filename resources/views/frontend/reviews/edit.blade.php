@extends('layouts.front')

@section('title', "Edit your Review")

@section('content')
    <div class="wrapper-review">
                <div class="card">
                    <div class="card-body">
                            <div class="margin-top">
                                    <h5>You are writing a review for {{ $review->product->name }}</h5>
                            </div>
                            <div class="form-text margin-top">
                                <form class="form-body" action="{{ url('/update-review') }}" method="POST">
                                @csrf
                                @method('PUT')
                                    <input type="hidden" name="review_id" value="{{ $review->id }}">
                                    <textarea class="form-control form-review" name="user_review" rows="5" placeholder="Write a review">{{ $review->user_review }}</textarea>
                                    <button type="submit" class="btn-submit">Update Review</button>
                                </form>
                            </div>
                    </div>
                </div>
    </div>
@endsection