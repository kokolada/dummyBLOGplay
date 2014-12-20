
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <img src="{{$home['vijesti'][0]->slika}}">
                </div>
                <div class="item">
                    <img src="http://placehold.it/750x250/66C3FF/000&amp;text=Product+Image+2">
                </div>
                <div class="item">
                    <img src="http://placehold.it/750x250/ff00ff/fff&amp;text=Product+Image+3">
                </div>
                <div class="item">
                    <img src="http://placehold.it/750x250/ffff00/000&amp;text=Product+Image+4">
                </div>
                <div class="item">
                    <img src="http://placehold.it/750x250/612b65/fff&amp;text=Product+Image+5">
                </div>
                <div class="item">
                    <img src="http://placehold.it/750x250/00ffff/000&amp;text=Product+Image+6">
                </div>
                <div class="item">
                    <img src="http://placehold.it/750x250/db371b/fff&amp;text=Product+Image+7">
                </div>
                <div class="item">
                    <img src="http://placehold.it/750x250/feb8aa/000&amp;text=Product+Image+8">
                </div>
            </div>
        </div> 
    <div class="clearfix">
        <div id="thumbcarousel" class="carousel slide" data-interval="false">
            <div class="carousel-inner">
                <div class="item active">
                    <div data-target="#carousel" data-slide-to="0" class="thumb"><img src="{{$home['vijesti'][0]->slika}}"></div>
                    <div data-target="#carousel" data-slide-to="1" class="thumb"><img src="http://placehold.it/400/66C3FF/000&amp;text=Product+Image+2"></div>
                    <div data-target="#carousel" data-slide-to="2" class="thumb"><img src="http://placehold.it/400/ff00ff/fff&amp;text=Product+Image+3"></div>
                    <div data-target="#carousel" data-slide-to="3" class="thumb"><img src="http://placehold.it/400/ffff00/000&amp;text=Product+Image+4"></div>
                </div><!-- /item -->
                <div class="item">
                    <div data-target="#carousel" data-slide-to="4" class="thumb"><img src="http://placehold.it/400/612b65/fff&amp;text=Product+Image+5"></div>
                    <div data-target="#carousel" data-slide-to="5" class="thumb"><img src="http://placehold.it/400/00ffcc/000&amp;text=Product+Image+6"></div>
                    <div data-target="#carousel" data-slide-to="6" class="thumb"><img src="http://placehold.it/400/db371b/fff&amp;text=Product+Image+7"></div>
                    <div data-target="#carousel" data-slide-to="7" class="thumb"><img src="http://placehold.it/400/feb8aa/000&amp;text=Product+Image+8"></div>
                </div><!-- /item -->
            </div><!-- /carousel-inner -->
            <a class="left carousel-control" href="#thumbcarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#thumbcarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div> <!-- /thumbcarousel -->
    </div><!-- /clearfix -->
 

