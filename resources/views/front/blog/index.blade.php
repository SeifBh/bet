@extends('layouts.defaults_custom')

@section('content')
<script type="text/javascript">
    $(document).ready(function() {
    if (window.matchMedia('(max-width: 767px)').matches) {
        alert('768');
        //...
 $('#products .item').addClass('list-group-item');
     } 
     

    $('#list').click(function(event){event.preventDefault();
        $('#products .item').addClass('list-group-item');});
    $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');
        $('#products .item').addClass('grid-group-item');});
});




</script>
<div class="container">
    <div class="well well-sm">
        <strong>Display</strong>
        <div class="btn-group">
            <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
            </span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
                class="glyphicon glyphicon-th"></span>Grid</a>
        </div>
                    {!! Form::open(['url' => 'blog/search', 'method' => 'get', 'role' => 'form', 'class' => 'pull-right']) !!}  
                {!! Form::control('text', 12, 'search', $errors, null, null, null, trans('front/blog.search')) !!}
            {!! Form::close() !!}
    </div>

    <div id="products" class="row list-group">
        @foreach($posts as $post)

        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        {{ $post->title }}</h4>
                        <span style="color:grey">{{ $post->user->username }}</span>
                        <small>on {!! $post->created_at . ($post->created_at != $post->updated_at ? trans('front/blog.updated') . $post->updated_at : '') !!}</small>
                    <p class="group inner list-group-item-text">
                        {{ $post->summary }}</h4>
                        </p>
                    
                    <div class="row">
                        <div class="col-xs-12 col-md-6">

                        </div>
                        <div class="col-xs-12 col-md-6">
                            {!! link_to('blog/' . $post->slug, 'Read more', ['class' => 'btn btn-success btn-lg']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

              @endforeach
 

    </div>

        <div class="col-lg-12 text-center">
            {!! $links !!}
        </div>
</div>





@stop

