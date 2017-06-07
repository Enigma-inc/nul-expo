@extends('partials.master') @section('content')
<section id="app">
    <div class="auto-container">
        <div class="sec-title wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
            <h2 class="header center">Submitted Abstracts</h2>
        </div>

        <abstracts inline-template>
            <div class="abstract-container">
                <div class="abstract-menu">
                    <ul class="nav nav-pills nav-stacked margin-top-20">
                        @can('view', $abstracts) 
                        @foreach($abstracts as $abstract)

                        <li role="presentation" class=" button" v-bind:class="{ 'active' : selectedAbstract =={{$abstract}}}" style="display:flex;align-items:center"> 
                        <a style="flex:1"href="#" @click.prevent="displayAbstract({{$abstract}})">{{ $abstract->fullName() }}</a>   
                        <img style="height:25px; width:40px;" src="{{$abstract->country_flag}}" >
                        @endforeach
                    </ul>
                    <div class="row text-center">
                        {{ $abstracts->links() }}
                    </div>
                </div>
                <div class="abstract-body">
                    <abstract-display token="{{csrf_token()}}"></abstract-display>
                </div>
                @endcan 
                @cannot('view', $abstracts) 
                    {{ Session::flash('flash', "Sorry, You are not authorised to view that page!") }} 
                @if(Session::has('flash'))
                    <flash-message title="Error" type="error" message="{{ session('flash') }}"></flash-message>
                @endif
                <script>
                    window.location = "/"
                </script>
                @endcannot
            </div>
        </abstracts>
    </div>
</section>
@stop
