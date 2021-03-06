@extends('layouts.app')


@section('content')
<!--@if(count($errors))
<div class="alert alert-danger" role="alert">
  <ul>
  @foreach($errors->all() as $message)
  <li>{{ $message }}</li>
  @endforeach
  <ul>   
  
</div>
  @endif-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
       <form action="{{url('cvs/'.$cv->id)}}" method="post">
       <input type="hidden" name="_method" value="PUT">
           {{ csrf_field() }}
           <div class="form-group @if($errors->get('titre')) has-error @endif">
            <label for="">Titre</label>
             <input type="text" name="titre" class="form-control"value="{{$cv->titre}}">
          @if($errors->get('titre'))
          @foreach($errors->get('titre') as $message)
         <li> {{$message}}</li>
         @endforeach
         @endif
           </div>
           <div class="form-group">
            <label for="">Presentation</label>
             <textarea type="text" name="presentation" class="form-control">{{$cv->presentation}}</textarea>
           </div>
  
           <div class="form-group">
        
             <input type="submit" class="form-control btn btn-danger" value="Editer">
           </div>
       </form> 
        
        </div>
    </div>
</div>


@endsection