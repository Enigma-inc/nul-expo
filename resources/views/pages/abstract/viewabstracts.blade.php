@extends('partials.master') @section('content')
<section id="app">
  <div class="auto-container">
    <div class="sec-title wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
      <h2 class="header center">Submitted Abstracts</h2>
    </div>

    <abstracts inline-template>
        <ul class="nav nav-pills nav-stacked margin-top-20">
        @can('view', $abstracts)
        @foreach($abstracts as $abstract)

            <li role="presentation" class=" button"  v-bind:class="{ 'active' : selectedAbstract =={{$abstract}}}" > <a href="#" @click.prevent="selectedAbstract({{$abstract}})">{{ $abstract->fullName() }}</a> </>
            </li>
        @endforeach
        </ul>
        <div class="row text-center">
            {{ $abstracts->links() }}
        </div>
        <div class="message-body">
            <abstract-display></abstract-display>
        </div>
    @endcan

    @cannot('view', $abstracts)
        {{ Session::flash('flash', "Sorry, You are not authorised to view that page!") }}
        @if (Session::has('flash'))
            <flash-message title="Error" type="error" message="{{ session('flash') }}"></flash-message>
        @endif
        <script>
            window.location = "/"
        </script>
    @endcannot
    </abstracts>
  </div>
</section>
@stop