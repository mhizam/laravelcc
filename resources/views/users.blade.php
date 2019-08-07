@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Users</div>

                <div class="card-body">
<div class="pull-right">
<a href="{{ route('adduser', [], 0) }}" class="btn btn-default">{{ __('Add Users') }}</a>
</div>
<table id='tbluser' class='table table-striped table-hover'>
<thead>
<th scope="col"></th>
<th scope="col">Name</th>
<th scope="col">Email</th>
<th scope="col">Action</th>
</thead>
<tbody>
<?php $count = 1 ?>
@foreach ($userss as $singleuser)
<tr>
<td><?php echo $count ?></td>
<td>{{ $singleuser->name }}</td>
<td>{{ $singleuser->email }}</td>
<td><a href="{{ route('showEditUser', ['uid' => $singleuser->id ], 0) }}" class="btn btn-default"><i class="glyphicon glyphicon-edit"></i>{{ __('Edit') }}</a></td>
</tr>
<?php $count++ ?>
@endforeach
</tbody>
</table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
