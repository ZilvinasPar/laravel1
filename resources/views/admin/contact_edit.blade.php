@extends('admin.layouts.admin')


@section('content')

    <form method="post">
        {{csrf_field()}}
    <div class="form-group" >
        <label for="tinymce">Address:</label>
        <textarea name="address" id="tinymce" style="height:50px;" cols="30" rows="10"></textarea>
    </div>
        <br>
        <div class="form-group" >
            <label for="tinymce">Administration contacts:</label>
            <textarea name="contacts" id="tinymce" style="height:50px;" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" name="submit" value="Send">
        </div>
    </form>
    @endsection