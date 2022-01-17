@extends('layouts.app')
@section('content')

<div class="container" id="app">
    <div class="row">
        <div class="col-md-12">
            <h1>@{{ message }}</h1>
            <div class="panel panel-primary">
                <div class="panel-heading">
                <div class="row">
                    <div class="col-md-10"> <h3 class="panel-title">Experience</h3></div>
                    <div class="col-md-2"><button class="btn btn-success">Ajouter</div>
                </div>                                                       
                   
                </div>
                <div class="panel-body"><ul class="list-group">
    <li class="list-group-item">
        <div class="pull-right">
            <button class="btn btn-warning btn-sm">Editer</button>
        </div>
        <h3>Lorem ipsum dolor sit amet consectetur.</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis odio at mollitia nulla accusamus autem veritatis quibusdam exercitationem, aliquam vel consequatur minus iste iure temporibus assumenda provident. Alias explicabo, voluptates sunt a nulla sed molestiae officiis libero quia molestias dolores, aut, cumque nisi. Dolore, autem 
            enim natus asperiores doloremque laudantium.
</p>
<small>12/01/2020 - 10-12-2022</small>
    </li>
    <li class="list-group-item">
        <div class="pull-right">
            <button class="btn btn-warning btn-sm">Editer</button>
        </div>
        <h3>Lorem ipsum dolor sit amet consectetur.</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis odio at mollitia nulla accusamus autem veritatis quibusdam exercitationem, aliquam vel consequatur minus iste iure temporibus assumenda provident. Alias explicabo, voluptates sunt a nulla sed molestiae officiis libero quia molestias dolores, aut, cumque nisi. Dolore, autem 
            enim natus asperiores doloremque laudantium.
</p>
<small>12/01/2020 - 10-12-2022</small>
    </li>
    <li class="list-group-item">
        <div class="pull-right">
            <button class="btn btn-warning btn-sm">Editer</button>
        </div>
        <h3>Lorem ipsum dolor sit amet consectetur.</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis odio at mollitia nulla accusamus autem veritatis quibusdam exercitationem, aliquam vel consequatur minus iste iure temporibus assumenda provident. Alias explicabo, voluptates sunt a nulla sed molestiae officiis libero quia molestias dolores, aut, cumque nisi. Dolore, autem 
            enim natus asperiores doloremque laudantium.
</p>
<small>12/01/2020 - 10-12-2022</small>
    </li>
</ul>  </div></div>
       
        <hr>
        <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-10"><h3 class="panel-title">Formation</h3></div>
                        <div class="col-md-2"><button class="btn btn-success">Ajouter</div>
                    </div>
                                        
                </div>
                <div class="panel-body">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita alias libero mollitia deserunt assumenda, velit magnam aut corrupti voluptatum sed. Corporis sequi optio hic dolore veritatis numquam, debitis ipsum quibusdam.</div>
            </div>
        <hr>
        <div class="panel panel-primary">
                <div class="panel-heading">
<div class="row">
    <div class="col-md-10"> <h3 class="panel-title">Portfolio</h3></div>
    <div class="col-md-2"><button class="btn btn-success">Ajouter</button></div>
</div>
                   
                </div>
                <div class="panel-body">


                </div>
            </div>
        <hr>
        <div class="panel panel-primary">
                <div class="panel-heading">
<div class="row">
    <div class="col-md-10"><h3 class="panel-title">Competence</h3></div>
    <div class="col-md-2"><button class="btn btn-success">Ajouter</div>
</div>
                    
                </div>
                <div class="panel-body">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita alias libero mollitia deserunt assumenda, velit magnam aut corrupti voluptatum sed. Corporis sequi optio hic dolore veritatis numquam, debitis ipsum quibusdam.</div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('javascripts')
<script src="js/vue.js"></script>

<script>
    var app =new Vue({
        el: '#app',
        data:{
            message:'je suis Soukaina Rhali'
        }
    });
</script>
@endsection