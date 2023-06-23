

@foreach ($arrCards as $card)
    <div class="comic d-flex flex-column">
        <img class="img-fluid" src="{{ Vite::asset($card['thumb']) }}" alt="">
        <span>{{$card['series']}}</span>
        <span>{{$card['price']}}</span>
    </div>
@endforeach
