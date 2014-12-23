
        <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="5000">
            <div class="carousel-inner" >
                <div class="item active">
                @if(isset($home['vijesti'][0]))
                    <a href="{{route('vijest', $home['vijesti'][0]->id)}}">
                        <img src="{{$home['vijesti'][0]->slika}}">
                        <div class="textVijest">{{$home['vijesti'][0]->naslov}}</div>
                    </a>
                @endif
                </div>
                <div class="item" >
                @if(isset($home['vijesti'][1]))
                    <a href="{{route('vijest', $home['vijesti'][1]->id)}}">
                        <img src="{{$home['vijesti'][1]->slika}}">
                        <div class="textVijest">{{$home['vijesti'][1]->naslov}}</div>
                    </a>
                @endif
                </div>
                <div class="item">
                @if(isset($home['vijesti'][2]))
                <a href="{{route('vijest', $home['vijesti'][2]->id)}}">
                    <img src="{{$home['vijesti'][2]->slika}}">
                    <div class="textVijest">{{$home['vijesti'][2]->naslov}}</div>
                    </a>
                @endif
                </div>
                <div class="item">
                @if(isset($home['vijesti'][3]))
                <a href="{{route('vijest', $home['vijesti'][3]->id)}}">
                    <img src="{{$home['vijesti'][3]->slika}}">
                    <div class="textVijest">{{$home['vijesti'][3]->naslov}}</div>
                    </a>
                @endif
                </div>
            </div>
        </div> 
    <div class="clearfix">
        <div id="thumbcarousel" class="carousel slide" data-interval="false">
            <div class="carousel-inner">
                <div class="item active">
                @if(isset($home['vijesti'][0]))
                    <div data-target="#carousel" data-slide-to="0" class="thumb"><img src="{{$home['vijesti'][0]->slika}}"></div>
                    @endif
                    @if(isset($home['vijesti'][1]))
                    <div data-target="#carousel" data-slide-to="1" class="thumb"><img src="{{$home['vijesti'][1]->slika}}"></div>
                    @endif
                    @if(isset($home['vijesti'][2]))
                    <div data-target="#carousel" data-slide-to="2" class="thumb"><img src="{{$home['vijesti'][2]->slika}}"></div>
                    @endif
                    @if(isset($home['vijesti'][3]))
                    <div data-target="#carousel" data-slide-to="3" class="thumb"><img src="{{$home['vijesti'][3]->slika}}"></div>
                    @endif
                </div><!-- /item -->
            </div><!-- /carousel-inner -->
        </div> <!-- /thumbcarousel -->
    </div><!-- /clearfix -->
 

