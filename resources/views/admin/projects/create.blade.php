@extends("layouts.app")

@section("page-title")

@section("main-content")

<div class="container">
      <div class="row justify-content-center">
        @if($errors->any())
        <div class="alert alert-warning">
            <ul>
                @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
                @endforeach
            </ul>
        </div>
        @endif

        <form class="col-12  card p-4" method="POST" action="{{route("admin.projects.store")}}">
            @csrf
            <h1Project Create:</h1>
    
             
             
    
                <div class="mb-3">
                    <label for="project-title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="project-title" name="title" value="{{old('title')}}">
                </div>
                <div class="mb-3">
                    <label for="project-content" class="form-label">Contenuto</label>
                    <input type="text" class="form-control" id="project-content" name="content" value="{{old('content')}}">
                </div>
               
           <div class="mb-3 d-flex justify-content-center align-items-center">
            <button type="submit" class="btn btn-primary">Crea il tuo nuovo progetto!</button>
            <button type="reset" class="btn btn-danger">Pulisci i campi</button>

           </div>
        </form>
          

    </div>

</div>

@endsection