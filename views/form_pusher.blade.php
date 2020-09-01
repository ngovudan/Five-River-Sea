@extends('layouts._layout')
@section('content')
    <div class="container">
        <div class="col-md-4 col-md-offset-2">
            <fieldset style="padding-top: 30px">
                <legend>Form pusher:</legend>
                <form action="/pusher">
                    <label for="">Message push</label>
                    <br>
                    <textarea name="contents" id="" cols="33" rows="10"></textarea>

                    <br>
                    <button class="btn btn-primary">Submit</button>
                </form>
            </fieldset>
        </div>
    </div>
@endsection