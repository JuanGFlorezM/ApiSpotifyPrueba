<!DOCTYPE html>
<html>  
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
            <div class = "row"> 
                    <div class="card col-3" style="width: 1rem;">
                    <img class="card-img-top" src="{{$artistas[0]->images[0]->url}}" alt="Card image cap">
                    <div class="card-body">
                      {{$artistas[0]->name}}
                       
                    </div>
                    </div>
                        </div>
        <div class = "row">
        @foreach ($albumes as $item)
        <div class="card col-3" style="width: 1rem;">
                <img class="card-img-top" src="{{$item->images[0]->url}}" alt="Card image cap">
                <div class="card-body">
                        {{$item->name}}
                   <a href= "/artistas/{{$item->artists[0]->id}}">{{$item->artists[0]->name}}</a>
                </div>
                </div>
        @endforeach
    </div>

    </body>
</html>