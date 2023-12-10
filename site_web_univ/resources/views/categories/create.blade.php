@extends('source')

@section('title','create category')
@section('image')

@endsection
@section('content_card')

@endsection
@section('content')
   <div class="container d-flex flex-column justify-center items-center " >
    <div class="badge bg-secondary-subtle mt-5 text-dark-emphasis">
        <h1 >formulaire d'ajout de categories</h1>
    </div>
        <div class="row mt-5 d-flex flex-column">
            @if (Session::has("success"))
                <div class="alert alert-primary alert-dismissible fade show col-6" >
                    {{Session::get('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            {{-- @if ($errors->any())
                <div class="alert alert-warning alert-dismissible fade show col-6" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            @endif --}}
            @error('name')
            <div class="alert alert-warning alert-dismissible fade show col-6" role="alert">
              {{ $message }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @enderror
                <form action={{route('categories.store')}} method="post" class="col-6">
                  @csrf
                    <input class="form-control" type="text" id="name" name="name" placeholder="nom du categorie" aria-label="default input">
                    <button type="submit" class="btn btn-success mt-3">Envoyer</button>

                </form>

        </div>
   </div>
@endsection
