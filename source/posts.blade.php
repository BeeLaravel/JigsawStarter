
@extends('_layouts.master')

@section('body')
    <div class="container">
    	<div class="posts">
    		<h1>文章列表</h1>
			<p>共计 {{ $posts->count() }} 篇文章</p>

			<ul>
				@foreach ( $posts as $post )
				    <li><a href="{{ $post->getPath() }}">{{ $post->title }}</a></li>
				@endforeach
			</ul>
    	</div>
    </div>
@endsection