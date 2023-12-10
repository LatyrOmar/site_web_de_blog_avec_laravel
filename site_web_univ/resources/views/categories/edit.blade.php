@extends('source')

@section('title','create category')
@section('image')

@endsection
@section('content_card')

@endsection
@section('content')
   <div class="container d-flex flex-column justify-center items-center " >
    <div class="badge bg-secondary-subtle mt-5 text-dark-emphasis">
        <h1 >modification du categorie "{{$category->name}}"</h1>
    </div>
        <div class="row mt-5 d-flex flex-column">

            @if (Session::has("success"))
                <div class="alert alert-primary alert-dismissible fade show col-6" >
                    {{Session::get('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @error('name')
            <div class="alert alert-warning alert-dismissible fade show col-6" role="alert">
              {{ $message }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @enderror
                <form action={{route('categories.update',$category->id)}} class="col-6" method="post">
                  @csrf
                  @method("PUT")
                    <input class="form-control" type="text" id="name" name="name" placeholder="nom du categorie" value="{{$category->name}}" aria-label="default input">
                    <button type="submit" class="btn btn-primary mt-3">modifier</button>
                </form>

        </div>
   </div>
@endsection
