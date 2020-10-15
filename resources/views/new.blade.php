@extends('layouts.app')
@secction('content')
    <section class="container">
        <div class="row">
            <article class="col-md-10 col-md-offset-1">
                {!!From::open(['route'=>'movie.store','method'=>'post','novalidate']) !!}
                    <div class="from-group">
                        <label>Nombre</label>
                        <input type="text" name="name" class="from-control">
                    </div>
                    <div class="from-group">
                        <label>Description</label>
                        <input type="text" name="description" class="from-control">
                    </div>
                    <div class="from-group">
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </div>
            </article>
        </div>
    </section>