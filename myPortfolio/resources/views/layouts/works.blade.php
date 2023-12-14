@extends('home')

@section('content')
<div class="section-container">
    <div class="container">
      <div class="row">
        
        <div class="col-sm-8 col-sm-offset-2 section-container-spacer">
          <div class="text-center">
            <h1 class="h2">02 : Works</h1>
            <p>Below are my hightlights project</p>
          </div>
        </div>
  
        <div class="col-md-12">
       
        <div id="myCarousel" class="carousel slide projects-carousel">
          <!-- Carousel items -->
          <div class="carousel-inner">
            @foreach ($groupedWorks as $twoWorks)
              <div class="item">
                  <div class="row">
                    @foreach($twoWorks as $work)
                      <div class="col-sm-6">
  
                        <a href="{{$work->link_deploy}}" title="" class="black-image-project-hover">
                          @if($work->hover_image_url != '')
                          <img src="./assets/images/{{$work->hover_image_url}}" alt="" class="img-responsive">
                         @else 
                         <img src="./assets/images/work-default.jpg" alt="" class="img-responsive">
                         @endif
                        </a>
                        <div class="card-container card-container-lg">
                          <h4>{{$work->id}}/{{$worksCount}}</h4>
                          <h3>{{$work->name}}</h3>
                          <p>{{$work->description}}</p>
                          <a href="{{$work->link_github}}" title="" class="btn btn-default">Discover</a>
                        </div>
                      </div>
                      @endforeach
                      
                    </div>
                    <!--/row-->
                  </div>
                  @endforeach
              <!--/item-->
              {{-- <div class="item active">
                  <div class="row">
                    <div class="col-sm-4">
                      <a href="./work.html" class="black-image-project-hover">
                        <img src="./assets/images/work02-hover.jpg" alt="Image" class="img-responsive">
                      </a>
                      <div class="card-container">
                        <h4>004/006</h4>
                        <h3>Nulla scelerisque</h3>
                        <p>Proin pharetra metus id iaculis dignissim. In aliquet lorem ut ex ullamcorper.</p>
                        <a href="./work.html" class="btn btn-default">Discover</a>
                      </div>
                    </div>
                       <div class="col-sm-4">
                        <a href="./work.html" class="black-image-project-hover">
                          <img src="./assets/images/work01-hover.jpg" alt="Image" class="img-responsive">
                        </a>
                        <div class="card-container">
                          <h4>005/006</h4>
                          <h3>Fringilla sit amet</h3>
                          <p>Nulla facilisi. Vivamus vestibulum, elit in scelerisque ultricies.</p>
                          <a href="./work.html" class="btn btn-default">Discover</a>
                        </div>
                      </div>
                      
                      <div class="col-sm-4">
                        <a href="./work.html" class="black-image-project-hover">
                          <img src="./assets/images/work03-hover.jpg" alt="Image" class="img-responsive">
                        </a>
                        <div class="card-container">
                          <h4>006/006</h4>
                          <h3>Vivamus vestibulum</h3>
                          <p>Fusce sed hendrerit augue, a rhoncus velit. In non lorem mattis, tempor sem sit amet.</p>
                          <a href="./work.html" class="btn btn-default">Discover</a>
                        </div>
                      </div>
                      
                  </div>
                  <!--/row-->
              </div> --}}
              
              <!--/item-->
          </div>
          <!--/carousel-inner--> 
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
  
          <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
       </div>
  
  
  
      <!--/myCarousel-->
      </div>
  
  
  
      </div>
    </div>
  </div>
  
  
  <footer class="footer-container text-center">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <p>© UNTITLED | Website created with <a href="http://www.mashup-template.com/" title="Create website with free html template">Mashup Template</a>/<a href="https://www.unsplash.com/" title="Beautiful Free Images">Unsplash</a></p>
        </div>
      </div>
    </div>
  </footer>
@endsection
