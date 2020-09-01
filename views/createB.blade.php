@extends('layouts._layout')
@section('content')
<div class="card">
        <div class="card-header">
          <h1>Create blog</h1>
        </div>
        <div class="card-body">
          <form method="post" action="{{route('postFile')}}" enctype="multipart/form-data">
          @csrf
            <div class="form-group">
                <input type="file" class="form-control" name="imgB"/>
            </div>
            <div class="form-group">
                <label for="des">Name</label>
                <input type="text" class="form-control" name="nameB"/>
            </div>
            <div class="form-group">
                <label for="des">Description</label>
                <input type="text" class="form-control" name="descriptionB"/>
            </div>
            <div class="form-group">
                <label for="des">Content</label>
                <textarea id="contentB" type="text" class="form-control" name="contentB"></textarea>
            </div>
            <div class="form-group">
                <label for="dur">Date</label>
                <input type="date" class="form-control" name="dayB"/>
            </div>
            <div class="form-group">
                <label for="des">View</label>
                <input type="number" class="form-control" name="view"/>
            </div>
            
            
            <button type="submit" class="btn btn-block btn-danger">Create blog</button>
          </form>
        </div><!--end card body-->

        <div class="card-footer">
          @if(count($errors->all()) >0 )
            <ul>
              @foreach($errors->all() as $error)
                <li>{{$error}}</li>
              @endforeach
            </ul>
          @endif
        </div>

        <script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
            CKEDITOR.replace( 'contentB' );
        </script>
@endsection
