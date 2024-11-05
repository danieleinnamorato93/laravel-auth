@extends("layouts.app")



@section("content")
<h1>{{$project->title}} Page:</h1>
<div class="container">
    <div class="row justify-content-center">
     
    
        <div class="card col-2  m-3">
            
            <div class="card-body">
           {{--    <img src="{{}}" alt=""> --}}
              <h5 class="card-title">Progetto: {{$project->title}}</h5>
              <h5 class="card-title">Descrizione: {{$project->content}}</h5>
              <h5 class="card-title">Link: {{$project->url}}</h5>
      
          

            </div>
          </div>
      
        </div>
    </div>
</div>

@endsection