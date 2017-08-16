@extends('admin.layouts.admin')



@section('content')



    <div class="grid-form">
        <div class="grid-form1">
            <h3 style="text-align: center;" id="forms-example" class="">Add theme to the group</h3>
            <form method="post">
                {{csrf_field()}}

                <label for="exampleInputEmail1">Select course name:</label>
                <div class="col-lg-12 form-group2 group-mail">

                    <select name="course_id">
                        <option>-- Select group --</option>
@foreach($groups as $group)
                            <option value="{{$group->id}}">{{$group->course_name}}</option>
@endforeach
                    </select>
                </div>


                <div class="form-group">
                    <label for="exampleInputEmail1">Date:</label>
                    <input type="text" name="date" class="form-control" id="exampleInputEmail1" placeholder="Date">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Name:</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Description:</label>
                    <input type="text" name="description" class="form-control" id="exampleInputEmail1" placeholder="Description">
                </div>


                <input type="submit" class="btn btn-default" value="Edit Group">
            </form>
        </div>
    </div>

    @endsection