@extends('coinllery.layouts.default')

@section('content')
    <section class="container justify-content-center">
        <article class="col">
            <footer>
                <h5 class="mb-0">{{ $collection->title }}</h5>
                <small>Coinllery by <a href="{{ $collection->author_url }}" target="_blank">{{ $collection->author }}</a></small>
                <p class="mt-3">{{ $collection->description }}</p>
            </footer>
            <figure class="colorful-image-container">
                <img src="{{ $collection->cover_image }}" alt="Coinllery Image - {{ $collection->title }}">
            </figure>
        </article>
    </section>
    <hr class="py-3">
    <section class="container justify-content-center">
        @foreach ($collection->items as $collectionItem)
        <article class="col">
            <figure class="colorful-image-container">
                <img src="{{ $collectionItem->image_url }}" alt="{{ $collectionItem->title }}">
            </figure>
            
            <footer class="container">
                <div class="row">
                    <div class="col">
                        <img class="coin-creator-thumb" src="{{ $collectionItem->creator_image }}" alt="{{ $collectionItem->creator }}">
                        {{ $collectionItem->creator_username }}
                    </div>
                    <div class="col d-none">
                        <div class="row justify-content-end">
                            <div class="col-auto">6h</div>
                            <div class="col-auto">Share</div>
                        </div>
                    </div>
                </div>
                <div class="row pt-4">
                    <div class="col">
                        <p><strong>{{ $collectionItem->title }}</strong></p>
                        <p>{{ $collectionItem->description }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <table class="table coin-stats">
                            <thead>
                                <tr>
                                    <th scope="col"><span>Market Cap</span></th>
                                    <th scope="col"><span>24H Volume</span></th>
                                    <th scope="col"><span>Creator Earning</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>${{ $collectionItem->coin_cap }}</td>
                                    <td>${{ $collectionItem->coin_vol }}</td>
                                    <td>${{ $collectionItem->creator_earn }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <a href="{{ $collectionItem->uri }}?referrer={{ $collection->author_address }}&utm_source=coinllery" target="_blank" class="btn btn-buy">Buy</a>
                    </div>
                </div>
            </footer>
        </article>
        @endforeach
    </section>
@endsection