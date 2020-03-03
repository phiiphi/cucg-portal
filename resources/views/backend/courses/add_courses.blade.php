@extends('backend.layouts.app')

@section('content')
    <div class="container-fluid">
        <form action="{{route('courses.export')}}" method="post" enctype="multipart/form-data" class="mt-5">
            @csrf
               <!-- Our markup, the important part here! -->
               <div id="drag-and-drop-zone" class="dm-uploader p-5">
                <h3 class="mb-5 mt-5 text-muted">Click &amp; Select Csv files here</h3>
                <p class="text-warning text-uppercase">supported formate: xlsx,xls and csv</p>
                <div class="btn btn-primary btn-block mb-5">
                    <span>Open the file Browser</span> 
                    <input type="file" title='Click to add Files' name="file" id="file" class="btn"/>
                </div>

                <button type="submit" class="btn btn-primary">Upload to Database</button>
              </div><!-- /uploader -->
        </form>
    </div>
@endsection