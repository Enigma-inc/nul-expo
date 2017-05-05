@extends('partials.master') 

@section('content')
<section class="padding-50">
  <div class="auto-container">
    <div class="sec-title wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
      <h2 class="header center">All Available Messages</h2>
    </div>
    <table class="row">
      <thead>
        <tr>
          <th class="col-md-3 text-center">Name</th>
          <th class="col-md-4 text-center">Email</th>
          <th class="text-center">Message</th>
      </thead>
      </tr>
      <tbody>
        @foreach($queries as $query)
        <tr>
          <td>{{ $query->name }}</td>
          <td>{{ $query->email }}</td>
          <td>{{ $query->message }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</section>
@stop