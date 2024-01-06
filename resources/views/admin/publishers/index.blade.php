@extends('layouts.dashboard')

@section('content')
    <!-- begin::page header -->
    <div class="page-header">
        <h3>Publishers</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Publishers</li>
            </ol>
        </nav>
    </div>
    <!-- end::page header -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-head">
                        <a href="{{ route('admin.publishers.create') }}" class="btn btn-sm btn-primary float-right"><i class="lni-plus mr-2"></i> Add Publishers</a>
                        <h4 class="card-title">All Publishers</h4>
                    </div>
                    <div class="gaps-1x"></div>
                    <table class="data-table table table-striped">
                        <thead>
                            <tr class="data-item data-head">
                                <th class="data-col dt-user">Name</th>
                                <th class="data-col dt-email">Number of Products</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($publishers as $publisher)
                            <tr>
                                <td>{{ $publisher->name }}</td>
                                <td>0</td>
                                <td>
                                    <a href="{{ route('admin.publishers.show', $publisher->id) }}" class="btn btn-primary btn-sm btn-auto">View</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection