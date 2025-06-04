@extends('includes.admin.adminapp')
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
<style>
	.dataTables_wrapper .dataTables_length select {
		border: 1px solid #aaa;
		border-radius: 3px;
		padding: 5px;
		background-color: transparent;
		color: inherit;
		padding: 5px 19px !important;
	}
</style>
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-wrapper">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admindashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Activiy Logs</li>
                    </ol>
                </nav>
            </div>            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{ route('blog.create') }}"><button type="button" class="btn btn-primary">Blog
                            Create</button></a>
                </div>
            </div>
        </div>
        <hr />
        <div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<table id="flight_table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sr No.</th>
                                <!-- <th>User Id</th> -->
                                <th>Action</th>
                                <th>URL</th>
                                <th>IP Address</th>
                                <th>Browser</th>
                                <th>Timestamp</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php 
                            $sr = 1;
                            @endphp
                            @foreach ($activities as $log)
                            <tr>
                                <td>{{ $sr++; }}</td>
                                <!-- <td>{{ $log->user_id }}</td> -->
                                <td>{{ $log->action }}</td>
                                <td>{{ $log->url }}</td>
                                <td>{{ $log->ip_address }}</td>
                                <td>{{ $log->user_agent }}</td>
                                <td>{{ date('Y-m-d H:i:s', strtotime($log->created_at . ' +5 hours 30 minutes')) }}</td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const form = this.closest('form');
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    });
</script>
@endsection
@endsection
