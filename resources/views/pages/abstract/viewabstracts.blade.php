@extends('partials.master') @section('content')
<section id="app">
  <div class="auto-container">
    <div class="sec-title wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
      <h2 class="header center">Submitted Abstracts</h2>
    </div>
    @can('view', $abstracts)
      <div class="row">
    
        @foreach($abstracts as $abstract)
            <div class="col-md-4 profile">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class=" header"> {{ $abstract->fullName() }}</div>
                            </div>

                            <div class="panel-body">
                                <div class="avatar-container" style="height:100px">
                                    <img class="avatar thumbnail" src="{{ $abstract->country_flag }}"  alt="Image" style="height:100px">
                                </div>


                                <div class="details-container">
                                    <div class="profile-label">Name</div>
                                    <div class="profile-info">{{ $abstract->fullName() }}</div>
                                </div>
                                <hr>

                                <div class="details-container">
                                    <div class="profile-label">Organisation</div>
                                    <div class="profile-info">{{ $abstract->organisation }}</div>
                                </div>
                                <hr>

                                <div class="details-container">
                                    <div class="profile-label">Country</div>
                                    <div class="profile-info">{{ $abstract->country }}</div>
                                </div>
                                <hr>

                                <div class="details-container">
                                    <div class="profile-label">Phone</div>
                                    <div class="profile-info">{{$abstract->phone_code . " ".$abstract->phone}}</div>
                                </div>
                                <hr>

                                <div class="row ">
                                    <div class="col-xs-12 text-center">
                                    @if($abstract->abstract)
                                         <form action="{{route('abstract.download')}}" method="POST">
                                            {{csrf_field()}}
                                            <input type="text" name="file-name" value="{{$abstract->abstract}}" hidden>
                                            <button type="submit" class="btn btn-primary btn-xs pull-right"> <i class="fa fa-download"></i> Download</button>
                                        </form>
                                        @else
                                        <div class="label label-info">Abstract Not Yet Uploaded</div>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>         
            @endforeach
                </div>
   
        @endcan  
 
    <div class="row text-center">
    {{ $abstracts->links() }}

   </div>

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