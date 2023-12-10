@extends('source')

@section('title','gestion des categories')

@section('image')

@endsection

@section('content_card')

@endsection

@section('content')
<div class="container d-flex flex-column justify-center items-center mt-5">
    <div class="d-flex justify-content-end">
        <a href={{route('categories.create')}} class="btn btn-success mb-3">Ajouter une categorie</a>
    </div>
    @if (Session::has("success"))
    <div class="alert alert-primary alert-dismissible fade show col-6" >
        {{Session::get('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">nom</th>
            <th scope="col">action</th>
        </tr>
        </thead>
        <tbody>
           @foreach($categories as $categorie)
            <tr>
                <th scope="row">{{$categorie->id}}</th>
                <td>{{$categorie->name}}</td>
                <td>
                    <a href={{route('categories.edit',$categorie->id)}} class="btn btn-secondary">Update</a>
                    <form action="{{ route('categories.destroy', $categorie->id) }}" method="post" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
           @endforeach
        </tbody>
    </table>
</div>
@endsection
