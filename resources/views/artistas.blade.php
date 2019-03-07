<!DOCTYPE html>
<html>  
    <head>
            <title> {{$artistas[0]->name}}</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
        <div style="background-color: #eceff1;">
            <div class="container text-center">
                    <h2> {{$artistas[0]->name}}</h2>
        </div>
        </div>
        <div class = "row"> 
            <div class="card col-2" style="width: 1rem;">
                <img class="card-img-top" src="{{$artistas[0]->images[0]->url}}" alt="Card image cap">
                <div class="card-body text-center">
                    {{$artistas[0]->name}}                       
                </div>
            </div>
        </div>

        <div class = "row">
        @foreach ($albumes as $item)
            <div class="card col-2" style="width: 1rem;">
                <img class="card-img-top" src="{{$item->images[0]->url}}" alt="Card image cap">
                <div class="card-title text-center">
                    <strong>{{$item->name}}</strong>                    
                </div>
                <div class="card-text text-center">                        
                    <a href= "/artistas/{{$item->artists[0]->id}}">{{$item->artists[0]->name}}</a>
                </div>
            </div>
        @endforeach
    </div>
        <!-- Footer -->
        <footer class="page-footer font-small blue pt-4">
            <div style="background-color: #eceff1;">
            <!-- Footer Links -->
            <div class="container-fluid text-center text-md-left">
        
            <!-- Grid row -->
            <div class="row">        
                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">        
                <!-- Content -->
                <h5 class="text-uppercase"><strong>PHP - CDI-Interactive</strong></h5>
                <p>Prueba realizada por Juan Guillermo Flórez</p>        
                </div>                
            <!-- Grid row -->        
            </div>  
        </div>          
        </footer>
      <!-- Footer -->
    </body>
</html>