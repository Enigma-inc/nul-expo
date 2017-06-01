@extends('partials.master') @section('content')
<section id="app">
  <div class="auto-container">
    <div class="sec-title wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
      <h2 class="header center">Submitted Abstracts</h2>
    </div>

    <abstracts inline-template>
        
    </abstracts>

    <!--@can('view', $abstracts)
      <div class="row">
            <table style="margin-bottom: 20px;">
                    <tr>
                        <th class="text-center">Names</th>
                        <th class="text-center">Organisation</th>
                        <th class="text-center">Country</th>
                        <th class="text-center">Phone</th>
                        <th class="text-center">Document</th>
                    </tr>
                @foreach($abstracts as $abstract)
                    <tr>
                        <td class="text-center">{{ $abstract->fullName() }}</td>
                        <td class="text-center">{{ $abstract->organisation }}</td>
                        <td class="text-center">
                            <img style="height:25px; width:40px;" class="text-center" src="{{$abstract->country_flag}}" alt="Image" >
                        </td>
                        <td class="text-center">{{ $abstract->phone_code . " ".$abstract->phone }}</td>
                        <td class="text-center">
                            @if($abstract->abstract)
                            <form action="{{ route('abstract.download') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="text" name="file-name" value="{{$abstract->abstract}}" hidden>
                                <button type="submit" class="btn btn-primary btn-xs pull-right"> <i class="fa fa-download"></i> Download</button>
                            </form>
                            @else
                                <div class="label label-info">Abstract Not Yet Uploaded</div>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </table>
        @endcan  
    <div class="row text-center">
        {{ $abstracts->links() }}
   </div>-->

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