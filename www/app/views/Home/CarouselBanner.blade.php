
        <div class="carousel slide" data-ride="carousel" data-interval="16000">
            <div class="carousel-inner">
                @foreach($home['banerv'] as $i => $r3)
                @if($i==0)
                <div class="item active">
                @else
                <div class="item">
                @endif
                    <img class="img-responsive velikiBanner oblik" src="{{$r3->slika}}">
                </div>
                @endforeach
            </div>
        </div> 
        
 