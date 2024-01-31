@extends('home.master')   
@section('title','Sự kiện')  
@section('main') 
  <main>
    <div id="gallery">
      @foreach($images as $image)
      <figure>
        <img src="{{ asset('images/'.$image->image) }}">
        <figcaption>{{ \Carbon\Carbon::parse($image->time)->format('d/m/Y') }}</figcaption>
      </figure>
      @endforeach
    </div>
  </main>
  
@stop
