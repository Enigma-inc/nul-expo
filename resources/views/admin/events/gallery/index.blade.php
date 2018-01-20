@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <a href="{{route('event.gallery.add')}}" class="btn btn-info btn-xs pull-right"> Add Event</a>
            <div class="panel panel-primary">
                <div class="panel-heading">General Events</div>
    
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>
                                    Title
                                </td>
                                <td>
                                    Room
                                </td>
                                <td>
                                    Time
                                </td> 
                                <td>
                                    Body
                                </td> 
                                <td>
                                    Action
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($generalEvents as $generalEvent)
                                <tr>
                                    <td>
                                        {{ $generalEvent->title }}
                                    </td>
                                    <td>    
                                        {{ $generalEvent->room }}
                                    </td>
                                    <td>
                                        {{ $generalEvent->time }}
                                    </td>
                                    <td>
                                        {{ $generalEvent->body }}
                                    </td>
                                    <td>
                                        <div class="col-xs-12 button-flex">
                                            <a href="{{route('generalEvent.edit',$generalEvent->id)}}" class="btn btn-info btn-xs margin-right-5"> Edit</a>
                                            <form action="{{route('generalEvent.destroy',['id'=>$generalEvent->id])}}" method="POST">
                                                {{csrf_field()}}
                                                <input type="text" name="file-name"class="" value="{{$generalEvent->id}}" hidden>
                                                <button type="submit" class="btn btn-danger btn-xs margin-right-5"> Remove</button>
                                            </form>
                                            
                                            <toggle-event-status type="'general'" :event="{{$generalEvent}}">

                                            </toggle-event-status>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>   
                    {{--  <div class="row text-center">
                        {{ $generalEvents->links() }}
                    </div>           --}}
                </div>
            </div>
        </div>
    </div>
@endsection