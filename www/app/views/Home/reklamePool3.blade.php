
        <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="11000">
            <div class="carousel-inner">
                @foreach($home['reklame']['reklame3'] as $i => $r3)
                @if($i==0)
                <div class="item active">
                @else
                <div class="item">
                @endif
                    <img class="img-responsive oblik reklame123" src="{{$r3->slika}}">
                </div>
                @endforeach
                
            </div>
        </div> 
 