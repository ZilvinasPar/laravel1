@extends ('admin.layouts.admin')



@section('content')


    <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
        <div class="panel-heading">
            <h2 style="text-align: center;">All Users</h2>
            <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
        </div>
        <div class="panel-body no-padding" style="display: block;">
            <table class="table table-striped">
                <thead>
                <tr class="warning">
                    <th>#</th>
                    <th>User Name</th>
                    <th>Last Name</th>
                    <th>E-mail</th>
                    <th>Phone number</th>
                    <th>Status</th>
                    <th>User role</th>
                    <th>Approve/unapprove</th>

                </tr>
                </thead>
                <tbody>

                @foreach($users as $user)
                    <tr>
                        <td>#</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->surname}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone_number}}</td>
                        <td>{{$user->status}}</td>
                        <td>{{$user->user_role}}</td>
                        @if($user->status == 'approved')
                        <td>
                            <form method="post" action="{{route('unapprove', $user->id)}}">
                                {{csrf_field()}}
                                <input type="hidden" name="unapproved" value="unapproved">
                                <button href="{{route('unapprove', $user->id)}}"  class="btn btn-success">Unapprove</button>
                            </form>
</td>

                            @else
                            <td>
                            <form method="post" action="{{route('approve', $user->id)}}">
                                {{csrf_field()}}
                                <input type="hidden" name="approved" value="approved">
                                <button href="{{route('approve', $user->id)}}"  class="btn btn-success">Approve</button>
                            </form>
                        </td>
@endif
                    </tr>
@endforeach

                </tbody>
            </table>
        </div>
    </div>



@endsection