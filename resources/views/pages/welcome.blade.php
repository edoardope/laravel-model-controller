@extends( 'layout.app' )

@section('title')
home
@endSection

@section( 'content' )

<section class="container">
    <div class="row justify-content-around mt-5">
        @foreach ($movies as $item)

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{$item['title']}}</h4>
                <p class="card-text">original title: {{$item['original_title']}}</p>
                <p class="card-text">nationality: {{$item['nationality']}}</p>
                <p class="card-text">date: {{$item['date']}}</p>
                <p class="card-text">vote: {{$item['vote']}}</p>
            </div>
        </div>
            
        @endforeach

    </div>

</section>


@endSection