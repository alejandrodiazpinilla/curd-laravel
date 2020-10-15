@extends('layouts.app')
@section('content')
    <section class="container">
        <div class="row">
            <article class="col-md-12">
                {!! From::open(['route'=> 'movie/show', 'method'=>'post', 'novalidate', 'class'=> 'from-incline'])!!}
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text"  class='from-control' name="name">
                    </div>
                    <div class="from-control">
                        <button type="submit" class="btn btn-default">search</button>
                        <a href="{{ route('movie.index') }}" class="btn btn-primary">All</a>
                        <a href="{{ route('movie.create') }}"class="btn btn-primary">Create</a>
                    </div>
                {!!From::close()!!}
            </article>
            <article class="col-md-12">
                <table class="table table-condensed table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($movies as $movie)
                        <tr>
                            <td>(($movie->name))</td>
                            <td>(($movie->Description))</td>
                            <td>
                                <a class="btn btn-primary btn-xs" href="{{route('movie.edit',['id'=>$movie->id]) }}"> Edit</a>
                                <a class="btn btn-danger btn-xs" href="{{route('movie/destroy', ['id'=> $movie->id])}}">Delete</a> 
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>    
            </article>
        </div>
    </section>
@endsection