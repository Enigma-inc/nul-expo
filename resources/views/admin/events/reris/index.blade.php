@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <a href="{{route('rerisEvent.create')}}" class="btn btn-info btn-xs pull-right"> Add Event</a>
            <div class="panel panel-primary">
                <div class="panel-heading">Reris Events</div>
    
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
                            @foreach($rerisEvents as $rerisEvent)
                                <tr>
                                    <td>
                                        {{ $rerisEvent->title }}
                                    </td>
                                    <td>    
                                        {{ $rerisEvent->room }}
                                    </td>
                                    <td>
                                        {{ $rerisEvent->time }}
                                    </td>
                                    <td>
                                        {{ $rerisEvent->body }}
                                    </td>
                                    <td>
                                        <div class="col-xs-12 button-flex">
                                            <a href="{{route('rerisEvent.edit',$rerisEvent->id)}}" class="btn btn-info btn-xs margin-right-5"> Edit</a>
                                            <form action="{{route('rerisEvent.destroy',['id'=>$rerisEvent->id])}}" method="POST">
                                                {{csrf_field()}}
                                                <input type="text" name="file-name"class="" value="{{$rerisEvent->id}}" hidden>
                                                <button type="submit" class="btn btn-danger btn-xs margin-right-5"> Remove</button>
                                            </form>
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