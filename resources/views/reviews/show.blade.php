@extends('layouts.app')

@section('content')
    <a class="btn btn-default" href="/reviews" role="button">Return</a>
    <hr>
    @if(!is_null($review))
        <h1>Review ID: {{$review->id}}</h1>
        <small>message:</small>
        <p>{{$review->message}}</p>
        <small>rating:</small>
        <p>
            <?php
            if ($review->rating == '0')
                echo 'bad'; 
            elseif ($review->rating == '1')
                echo 'neutral'; 
            elseif ($review->rating == '2')
                echo 'good';
        ?>
        </p>
        <small>img:</small>
        <p> <img src="/storage/{{$review->img_path}}" alt="image here" style="width: 50%; height: 50%;"></p>
        <small>vehicle:</small>
        <p>{{$review->vehicle_id}}</p>
        <p>lng: {{$review->lng}}</p>
        <p>lat: {{$review->lat}}</p>
        <small>Created on {{$review->created_at}}</small>
    @else
        review not found
    @endif
@endsection