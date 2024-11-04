@extends("layouts.app")

@section("page-title")

@section("main-content")
<h1>{{$project["title"]}} Page:</h1>
<div class="container">
    <div class="row justify-content-center">
     
    
        <div class="card col-2  m-3">
         
            <div class="card-body">
           
              <h5 class="card-title">Progetto: {{$project->title}}</h5>
              <h5 class="card-title">Contenuto: {{$project->content}}</h5>
              

          

            </div>
          </div>
      
        </div>
    </div>

@endsection
