@extends('partials.master') @section('content')
<section id="app">
  <div class="auto-container">
    <div class="sec-title wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
      <h2 class="header center">Abstracts</h2>
    </div>
    @can('view', $abstracts)
    <table class="margin-bottom-20">
        <tr>
            <th class="text-align-center">Sender's Details</th>
            <th class="text-align-center">Document</th>
        </tr>
        @foreach($abstracts as $abstract)
        <tr>
            <td class="text-align-center">
                <div class="profile">
                    <div class="avatar-container">
                        <img class="avatar thumbnail"  src="{{Auth::user()->submission->country_flag}}" alt="Image">
                    </div>
                </div>
                <p>
                    {{ $abstract->title }}
                    {{ $abstract->name }}
                    {{ $abstract->surname }}
                </p>
                <p> <strong>Orgnisation: </strong>{{ $abstract->organisation }}</p>
                <p> <strong>Country: </strong>{{ $abstract->country }}</p>
            </td>
            <td class="text-align-center">
                <form action="{{route('abstract.download')}}" method="POST">
                    {{csrf_field()}}
                    <input type="text" name="file-name" value="{{Auth::user()->submission->abstract}}" hidden>
                    <button type="submit" class="btn btn-primary btn-xs"> <i class="fa fa-download"></i> Download</button>
                </form>
            </td>
        </tr>
        @endforeach
    @endcan
    </table>

    @cannot('view', $abstracts)
        {{ Session::flash('flash', "Sorry, You are not authorised to view that page!") }}
        @if (Session::has('flash'))
            <flash-message title="Error" type="error" message="{{ session('flash') }}"></flash-message>
        @endif
        <script>
            window.location = "/"
        </script>
    @endcannot

  </div>
</section>
@stop