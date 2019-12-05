@extends('layouts.app')
@section('content')
  <div class="row col-xs-12" style="margin-bottom:10px">
      <div class="btn-group">
      <a href="{{route('stats',['conference'=>'all'])}}" class="btn  {{ $conference=='all' ? 'btn-primary' : '' }}">ALL</a>
      <a href="{{route('stats',['conference'=>'nulistice'])}}"  class="btn {{ $conference=='nulistice' ? 'btn-primary' : '' }}">NULISTICE</a>
      </div>
  </div>
  <div class="panel panel-default col-xs-12">
      <div class="panel-body"> 
        <center>
                {!! $chart->html() !!}
        </center>
      </div>
   </div>
@endsection
