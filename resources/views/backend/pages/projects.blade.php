@extends('layouts.backend.master')
@push('styles')
    <!-- Datatable -->
    <link href="{{asset('vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
@endpush
@section('content')


<div class="row">
    <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6">
        <div class="widget-stat card">
            <div class="card-body p-4">
                <div class="media ai-icon">
                    <span class="me-3 bgl-primary text-primary">
                        <svg id="icon-orders" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <polyline points="10 9 9 9 8 9"></polyline>
                        </svg>
                    </span>
                    <div class="media-body">
                        <p class="mb-1">Total Projects</p>
                        <h4 class="mb-0">{{count($projects)}}</h4>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6">
        <div class="widget-stat card">
            <div class="card-body p-4">
                <div class="media ai-icon">
                    <span class="me-3 bgl-success text-success">
                        <svg id="icon-orders" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <polyline points="10 9 9 9 8 9"></polyline>
                        </svg>
                    </span>
                    <div class="media-body">
                        <p class="mb-1">Published PROJECTS</p>
                        <h4 class="mb-0">{{count($projects)}}</h4>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6">
        <div class="widget-stat card">
            <div class="card-body p-4">
                <div class="media ai-icon">
                    <span class="me-3 bgl-warning text-warning">
                        <svg id="icon-orders" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <polyline points="10 9 9 9 8 9"></polyline>
                        </svg>
                    </span>
                    <div class="media-body">
                        <p class="mb-1">Pending PROJECTS</p>
                        <h4 class="mb-0">{{count($projects)}}</h4>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Projects List</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example4" class="display" style="min-width: 845px">
                    <thead>
                        <tr>
                            <th>Thumbnail</th>
                            <th>Title</th>

                            <th>Description</th>
                            <th>Status </th>
                            <th>Industry </th>
                            <th>Created_at </th>
                            <th>Action </th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($projects as $project)
                        <tr>
                            <td>
                                <div class="concierge-bx d-flex align-items-center">
                                    <img class="me-3 rounded" src="{{$project->thumbnail}}" alt="">

                                </div>
                            </td>
                            <td>{{$project->title}}</td>

                            <td>
                               <p> {!!  Str::limit($project->description,80,'.....')!!} </p>
                            </td>
                            <td><span class="badge light badge-success">{{$project->status}}</span></td>
                            <td>{{$project->industry->name}}</td>
                            <td><span >{{$project->created_at->format('Y-m-d')}}</span></td>
                            <td>#</td>

                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script src="{{asset('vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/plugins-init/datatables.init.js')}}"></script>
@endpush

@endsection
