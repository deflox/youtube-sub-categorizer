@extends('layouts.app')

@section('content')
    <div class="columns app-wrapper">
        <div class="column is-one-third left">
            <h1 class="title is-1 app-title">YSC</h1>
            <h1 class="subtitle is-4">YouTube Sub Categorizer</h1>
            <div class="categories">
                <h3 class="title is-5">Your categories:</h3>
                <ul>
                    <li><a href="">Gaming</a></li>
                    <li><a href="">Technology</a></li>
                    <li><a href="">Music</a></li>
                    <li><a href="">Science</a></li>
                </ul>
                <button class="button is-primary is-inverted is-outlined is-small">Add category</button>
            </div>
        </div>
        <div class="column right">
            <div class="feed">
                <h2 class="title is-2">Gaming<a class="button is-info is-pulled-right">Edit category</a></h2>
                <div class="columns video">
                    <div class="column is-one-third">
                        <img src="https://i.ytimg.com/vi/WDQNWYOogOI/hqdefault.jpg?sqp=-oaymwEYCNIBEHZIVfKriqkDCwgBFQAAiEIYAXAB&rs=AOn4CLCZ0u1WpoNPzc0Y4SH0f9c5OjApAg" alt="YouTube Thumbnail">
                    </div>
                    <div class="column">
                        <h3 class="title is-5">Donkey Kong TV Show</h3>
                        <h3 class="subtitle is-6">videogamedunkey - uploaded 7 minutes ago</h3>
                    </div>
                </div>
                <div class="columns video">
                    <div class="column is-one-third">
                        <img src="https://i.ytimg.com/vi/R-sYzc5Y4LI/hqdefault.jpg?sqp=-oaymwEZCPYBEIoBSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLBsGhj2hJtgaDmt24RGeTqkJN_yog" alt="YouTube Thumbnail">
                    </div>
                    <div class="column">
                        <h3 class="title is-5">ORIGIN PC's Intel Extreme Rig 2018</h3>
                        <h3 class="subtitle is-6">ORIGIN PC - uploaded 15 minutes ago</h3>
                    </div>
                </div>
                <div class="columns video">
                    <div class="column is-one-third">
                        <img src="https://i.ytimg.com/vi/5XimcZ1ompA/hqdefault.jpg?sqp=-oaymwEZCPYBEIoBSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLBm36Q_FVIl5yfTQnYxeTQiLQc8ow" alt="YouTube Thumbnail">
                    </div>
                    <div class="column">
                        <h3 class="title is-5">EV4NS - Cassandra</h3>
                        <h3 class="subtitle is-6">Majestic Casual - uploaded 40 minutes ago</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection