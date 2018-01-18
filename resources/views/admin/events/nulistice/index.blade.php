@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <a href="{{route('nulisticeEvent.create')}}" class="btn btn-info btn-xs pull-right"> Add Event</a>
            <div class="panel panel-primary">
                <div class="panel-heading">Nulistice Events</div>
    
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
                                    Session Title
                                </td> 
                                <td>
                                    Keynote
                                </td>
                                <td>
                                    Chair
                                </td>
                                <td>
                                    Chair Country
                                </td>
                                <td>
                                    Chair Country Flag
                                </td>
                                <td>
                                    Presenter
                                </td>
                                <td>
                                    Presenter Country
                                </td>
                                <td>
                                    Presenter Country Flag
                                </td>
                                <td>
                                    Action
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($nulisticeEvents as $nulisticeEvent)
                                <tr>
                                    <td>
                                        {{ $nulisticeEvent->title }}
                                    </td>
                                    <td>    
                                        {{ $nulisticeEvent->room }}
                                    </td>
                                    <td>
                                        {{ $nulisticeEvent->time }}
                                    </td>
                                    <td>
                                        {{ $nulisticeEvent->session_title }}
                                    </td>
                                    <td>
                                        {{ $nulisticeEvent->keynote }}
                                    </td>
                                    <td>
                                        {{ $nulisticeEvent->chair }}
                                    </td>
                                    <td>
                                        {{ $nulisticeEvent->chair_country }}
                                    </td>
                                    <td>
                                        {{ $nulisticeEvent->chair_country_flag }}
                                    </td>
                                    <td>
                                        {{ $nulisticeEvent->presenter }}
                                    </td>
                                    <td>
                                        {{ $nulisticeEvent->presenter_country }}
                                    </td>
                                    <td>
                                        {{$nulisticeEvent->presenter_country_flag}}
                                    </td>
                                    <td>
                                        <div class="col-xs-12 button-flex">
                                            <a href="{{route('nulisticeEvent.edit',$nulisticeEvent->id)}}" class="btn btn-info btn-xs margin-right-5"> Edit</a>
                                            <form action="{{route('nulisticeEvent.destroy',['id'=>$nulisticeEvent->id])}}" method="POST">
                                                {{csrf_field()}}
                                                <input type="text" name="file-name"class="" value="{{$nulisticeEvent->id}}" hidden>
                                                <button type="submit" class="btn btn-danger btn-xs margin-right-5"> Remove</button>
                                            </form>
                                            <toggle-event-status :type="'nulistice'" :event="{{$nulisticeEvent}}">
                                                
                                            </toggle-event-status>
                                            
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>   
                </div>
            </div>
        </div>
    </div>
@endsection