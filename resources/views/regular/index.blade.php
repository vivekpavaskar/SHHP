@extends('db.master')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-header">
                <h4 class="card-title"> Simple Table</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table tablesorter " id="">
                        <thead class=" text-primary">
                            <tr>
                                <th>Complaint Id</th>
                                <th>Organization</th>
                                <th>State</th>
                                <th>District</th>
                                <th>Status</th>
                                <th>Applied On</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($complaints)>0)
                            @foreach ($complaints as $c)
                            <tr>
                                <td>{{ $c->id }}</td>
                                <td>{{ $c->org }}</td>
                                <td>{{ $c->state }}</td>
                                <td>{{ $c->district }}</td>
                                <td>{{ $c->status }}</td>
                                <td>{{ $c->created_at }}</td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="6">No Records Found!!!</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
