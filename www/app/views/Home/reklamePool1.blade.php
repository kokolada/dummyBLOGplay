
        <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="16000">
            <div class="carousel-inner">
                @foreach($home['reklame']['reklame1'] as $i => $r3)
                @if($i==0)
                <div class="item active">
                @else
                <div class="item">
                @endif
                    <img class="img-responsive reklame123" src="{{$r3->slika}}">
                </div>
                @endforeach
            </div>
        </div> 
 