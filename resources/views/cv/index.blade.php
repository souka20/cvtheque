@extends('layouts.app')


@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">
     


        <h1>La Liste de mes cv</h1>
        <div class="pull-right"><a href="{{url('cvs/create')}}" class="btn btn-success">Nouveau cv</a></div>
        <div class="row">
        @foreach($cvs as $cv)
        <div class="col-xs-18 col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="{{ asset('storage/'.$cv->photo) }}">
              <div class="caption">
                <h4>{{$cv->titre}}</h4>
                <p></p>
                <form action="{{ url('cvs/'.$cv->id) }}" method="post"> 
                  <a href="#" class="btn btn-info " role="button">Details</a>
                 <a href="{{ url('cvs/'.$cv->id.'/edit') }}" class="btn btn-success " role="button">Editer</a>
                         {{ csrf_field() }}
                         {{ method_field('DELETE') }}
                         
                         @can('delete',$cv)
                         <button type="submit" class="btn btn-danger">Supprimer</button>
                        @endcan
                        </form>
            </div>
          </div>
        </div>
        @endforeach
        </div>
       <!-- <table class="table">
          <head>
            <tr>
                <th>Titre</th>
                <th>Presentation</th>
                <th>Date Creation</th>
                <th>actions</th>
            </tr>
            </head>
            <body>
            <!-- $cvs qui se trouve dans la fonction index-->
          <!--  @foreach($cvs as $cv)
                <tr>
                    <td>{{ $cv->titre }}<br>{{$cv->user->name}}</td>
                    <td>{{ $cv->presentation }}</td>
                    <td>{{ $cv->created_at }}</td>
                    <td>
                    <form action="{{ url('cvs/'.$cv->id) }}" method="post">
                    <a href=""class="btn btn-primary">Details</a>
                    <a href="{{ url('cvs/'.$cv->id.'/edit') }}"class="btn btn-default">Edit</a>
                         
                         {{ csrf_field() }}
                         {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                    </td>
                </tr>
                @endforeach
            </body>
        </table>-->
        </div>
    </div>
</div>




@endsection