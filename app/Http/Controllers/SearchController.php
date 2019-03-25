<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;

class SearchController extends Controller
{
    public function filterReviews(Request $request, Review $reviews){
        $id = $request->input('id');
        $message = $request->input('message');
        $date = $request->input('date');
        $rating = $request->input('rating');
        $vehicle = $request->input('vehicle');

        $reviews = Review::where('id', 'like', '%' . $id . '%')->where('message', 'like', '%' . $message . '%')->where('created_at', 'like', '%' . $date . '%')->where('rating', 'like', '%' . $rating . '%')->where('vehicle', 'like', '%' . $vehicle . '%')->get();

        return view('reviews.index')->with('reviews', $reviews);
        }

        public function filterJourneys(Request $request, Review $journeys){
            $id = $request->input('id');

            $journeys = Review::where('id', 'like', '%' . $id . '%')->get();
    
            return view('journeys.index')->with('journeys', $journeys);
            }
}
