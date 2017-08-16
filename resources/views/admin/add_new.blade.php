@extends('admin.layouts.admin')


@section('content')

    <div class="grid-form">
        <div class="grid-form1">
            <h3 style="text-align: center;" id="forms-example" class="">Add new files</h3>
            <form method="post" action="{{route('add_new_file')}}" enctype="multipart/form-data">
                {{csrf_field()}}

                <label for="exampleInputEmail1">Select theme name:</label>
                <div class="col-lg-12 form-group2 group-mail">

                    <select name="theme_name">
                        @foreach($themes as $theme)
                            <option value="{{$theme->id}}">{{$theme->name}}</option>
                        @endforeach
                    </select>
                </div>



                <div class="form-group">
                    <label for="exampleInputEmail1">Slides:</label>
                    <input type="file" name="slides"  id="exampleInputEmail1" placeholder="">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Teaching files:</label>
                    <input type="file" name="teaching_files"  id="exampleInputEmail1" placeholder="">
                </div>

                <input type="submit" class="btn btn-default" value="Add File">
            </form>
        </div>
    </div>


@endsection