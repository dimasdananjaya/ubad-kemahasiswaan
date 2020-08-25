@extends('layouts.app')

@section('content')
<section id="home-page">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/resources/img/hero.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>test</h5>
                    <p>test</p>
                </div><!--carousel caption-->
            </div><!--carousel item-->

            <div class="carousel-item">
                <img class="d-block w-100" src="/resources/img/hero.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>test</h5>
                    <p>test</p>
                </div><!--carousel caption-->
            </div><!--carousel item-->

            <div class="carousel-item">
                <img class="d-block w-100" src="/resources/img/hero.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>test</h5>
                    <p>test</p>
                </div><!--carousel caption-->
            </div><!--carousel item-->
         
        </div><!--inner carousel-->
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> <!--carousel-->

    <div class="section-wrapper">
        <div class="container pt-4 pb-4">
            <h1 class="text-center mb-5">Organisasi Mahasiswa Bali Uni</h1>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card d-block mx-auto" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div><!--card-->
                </div><!--col 4-->
    
                <div class="col-lg-4">
                    <div class="card d-block mx-auto" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div><!--card-->
                </div><!--col 4-->
    
                <div class="col-lg-4">
                    <div class="card d-block mx-auto" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div><!--card-->
                </div><!--col 4-->
            </div><!--row-->
        </div><!--container-->
    </div><!--section-wrapper-->
    
    <div class="section-wrapper">
        <div class="container pt-4 pb-4">
            <h1 class="text-center mb-5">Event Kampus Bali Uni Terbaru</h1>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card d-block mx-auto" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div><--card-->
                </div><!--col 4-->
    
                <div class="col-lg-4">
                    <div class="card d-block mx-auto" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div><!--card-->
                </div><!--col 4-->
    
                <div class="col-lg-4">
                    <div class="card d-block mx-auto" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div><!--card-->
                </div><!--col 4-->
            </div><!--row-->
        </div><!--container-->
    </div><!--section-wrapper-->
    
</section>
@endsection