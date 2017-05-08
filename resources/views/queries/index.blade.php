@extends('partials.master') @section('content')
<section id="app">
  <div class="auto-container">
    <div class="sec-title wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
      <h2 class="header center">All Available Messages</h2>
    </div>

    <messages  inline-template>
      <div class="message-container">
        <div class="message-menu">
          <ul class="nav nav-pills nav-stacked margin-top-20">
          @can('view', $queries)
            @foreach($queries as $message)

            <li role="presentation" class=" button"  v-bind:class="{ 'active' : selectedMessage =={{$message}}}" > <a href="#" @click.prevent="displayMessage({{$message}})">{{$message->name }}</a> </>
            </li>
            @endforeach

            </ul>
            {{ $queries->links() }}
            </div>
            <div class="message-body">
                <message-display></message-display>
            </div>
          @endcan

          @cannot('view', $queries)
              <h1 class="header center">Sorry, but you cannot view this page!</h1>
          @endcannot
        
      </div>
    </messages>

  </div>
</section>
@stop