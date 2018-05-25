@extends('partials.master')
@section('content')
<section >
    <div  id="app" class="auto-container">

        <div class="sec-title wow fadeInUp text-center" data-wow-delay="200ms" data-wow-duration="1000ms">
            <h2 class="header">NULISTICE 2018 Proceedings</h2>
        </div>
        <div class="col-xs-12 text-right margin-bottom-20">
                    <a href="{{url('docs/nulistice-2018-proceedings/NULISTICE - Proceedings.zip')}}" class=" col-xs-6 text-center pull-right theme-btn btn-style-one hvr-bounce-to-right text-left"><span
                                class="fa fa-file-archive"></span> Download All (Zip File)
                    </a>
        </div>


        <div class="row clearfix">

              <table id="table_id" class="display">
    <thead>
        <tr>
            <th>Authors</th>
            <th>Title</th>
            <th>File</th>
        </tr>
    </thead>
    <tbody>
     @foreach ($proceedings as $proceeding)
        <tr>
            <td>{{$proceeding->authors}}</td>
            <td>{{$proceeding->title}}</td>
            <td> <a href="{{url('proceedings/download?file-name='.$proceeding->doc)}}" class="btn btn-success btn-xs"><span class="fa fa-file-pdf-o"></span> DOWNLOAD</a></td>
        </tr>
     @endforeach

    </tbody>
</table>

        </div>

    </div>
</section>

@endsection
@section('scripts')
    <script>
         $(document).ready( function () {
                $('#table_id').DataTable({
                    ordering: true,
                    pageLength:25,
                    paging: false
                });

                $("[type=search]").addClass('').attr("placeholder","by author or title");
            } );
    </script>
@endsection