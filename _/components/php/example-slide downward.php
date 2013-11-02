<div class="container">
    
    <div class="row">
        <div id="myCarousel" class="carousel slide vertical">
            <!-- Carousel items -->
            <div class="carousel-inner">
                <div class="active item">
                    <img src="http://placehold.it/600x400&text=First+Slide">
                </div>
                <div class="item">
                    <img src="http://placehold.it/600x400&text=Second+Slide">
                </div>
                <div class="item">
                    <img src="http://placehold.it/600x400&text=Third+Slide">
                </div>
            </div>
            <!-- Carousel nav -->
            <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
        </div>
    </div>
</div>

.vertical .carousel-inner {
  height: 100%;
}

.carousel.vertical .item {
  -webkit-transition: 0.6s ease-in-out top;
     -moz-transition: 0.6s ease-in-out top;
      -ms-transition: 0.6s ease-in-out top;
       -o-transition: 0.6s ease-in-out top;
          transition: 0.6s ease-in-out top;
}

.carousel.vertical .active {
  top: 0;
}

.carousel.vertical .next {
  top: 100%;
}

.carousel.vertical .prev {
  top: -100%;
}

.carousel.vertical .next.left,
.carousel.vertical .prev.right {
  top: 0;
}

.carousel.vertical .active.left {
  top: -100%;
}

.carousel.vertical .active.right {
  top: 100%;
}

.carousel.vertical .item {
    left: 0;
}