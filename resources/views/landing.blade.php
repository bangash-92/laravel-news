@extends('layouts.master')

@section('content')
<div class="container">
<div class="row align-items-center">
  <div class="col-md-8 mx-auto">
    <h1 class="my-4 text-center"> News Blog </h1>
    <div class="container">
            <form action="/search" method="POST" role="search">
                {{ csrf_field() }}
                <div class="input-group">
                    <input type="text" class="form-control" name="q"
                        placeholder="Search" value=""> <span class="input-group-btn">
                        <button type="submit" class="btn btn-default">
                            <span>Serach </span>
                        </button>
                    </span>
                </div>
            </form>
    </div>
    <br>
    @foreach ($posts as $post)
    <div class="card mb-4">
      <!-- <img class="card-img-top" src=" {!! !empty($post->image) ? '/uploads/posts/' . $post->image :  'http://placehold.it/750x300' !!} " alt="Card image cap"> -->
      <div class="card-body">
        <h2 class="card-title text-left">{{ $post->title }}</h2> 
        <h6 class="my-4 text-left">Category: {{$post->category->name}} </h6>
        <h6 class="my-4 text-left">Website: {{$post->website->website}} </h6>
        <p class="card-text"> {{ str_limit($post->body, $limit = 280, $end = '...') }} </p>
        <a href="/posts/{{ $post->id }}" class="btn btn-primary">Read More &rarr;</a>
      </div>
      <div class="card-footer text-muted">
        Posted {{ $post->created_at->diffForHumans() }} by
        <a href="#">{{ $post->user->name }}  </a>
      </div>
    </div>
    @endforeach
    {{ $posts->links() }}
  </div>

  </div>
</div>
</div>

@endsection
