@extends('_layouts.master')

@section('body')
    <div class="container">
    	<div class="post">
	    	<h1>{{ $page->title }}</h1>
		    <p>{{ $page->author }} • {{ date('Y 年 m 月 d 日', $page->date) }}</p>

		    @yield('content')

		    @if ( $page->getPrevious() )
		        <p>下一篇:
		            <a href="{{ $page->getPrevious()->getPath() }}">{{ $page->getPrevious()->title }}</a>
		        </p>
		    @endif
		    @if ( $page->getNext() )
		        <p>下一篇:
		            <a href="{{ $page->getNext()->getPath() }}">{{ $page->getNext()->title }}</a>
		        </p>
		    @endif
    	</div>
    </div>
@endsection