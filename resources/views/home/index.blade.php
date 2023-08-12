@extends('layouts.main')

@section('main.content')


	<div class="carousel slide" data-bs-ride="carousel" id="carouselExampleIndicators">
		<div class="carousel-indicators">
			<button aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carouselExampleIndicators" type="button"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img alt="..." class="d-block w-100" src="\public\img\1.jpg">
				<div class="carousel-caption">
					<h5 class="animated bounceInRight" style="animation-delay: 1s">HTML CSS SASS</h5>
					<p class="animated bounceInLeft d-none d-md-block" style="animation-delay: 2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
					<p class="animated bounceInRight" style="animation-delay: 3s"><a href="#">Learn More</a></p>
				</div>
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="\public\img\2.jpg">
				<div class="carousel-caption">
					<h5 class="animated bounceInRight" style="animation-delay: 1s">PHP</h5>
					<p class="animated bounceInLeft d-none d-md-block" style="animation-delay: 2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
					<p class="animated bounceInRight" style="animation-delay: 3s"><a href="#">Learn More</a></p>
				</div>
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="\public\img\3.jpg">
                
				<div class="carousel-caption">
					<h5 class="animated bounceInRight" style="animation-delay: 1s">LARAVEL</h5>
					<p class="animated bounceInLeft d-none d-md-block" style="animation-delay: 2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
					<p class="animated bounceInRight" style="animation-delay: 3s"><a href="#">Learn More</a></p>
				</div>
			</div>
		</div><button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="visually-hidden">Previous</span></button> <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span></button>
	</div>
    <div class="card-group mt-5">
        <div class="card">
          <img src="\public\img\4.jpg" class="card-img-top w-100 h-100" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Card title
                This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action</p>
          </div>
          <div class="card-footer">
            <small class="text-body-secondary">Last updated 3 mins ago</small>
          </div>
        </div>
        <div class="card">
          <img src="\public\img\5.jpg" class="card-img-top w-100 h-100" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Card title
                This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action</p>
          </div>
          <div class="card-footer">
            <small class="text-body-secondary">Last updated 3 mins ago</small>
          </div>
        </div>
        <div class="card">
          <img src="\public\img\6.jpg" class="card-img-top w-100 h-100" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          </div>
          <div class="card-footer">
            <small class="text-body-secondary">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>
</body>
</html>
@endsection
