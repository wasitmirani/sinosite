<div>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Projects List</h4>
            <a href="{{route('dashboard.create.project')}}"  class="btn btn-primary">New Project</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example3" class="display" style="min-width: 845px">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Thumbnail</th>
                            <th>Industry</th>
                            <th>Description</th>
                            <th>Created By</th>
                            <th>Created Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img class="rounded-circle" width="35" src="{{asset('/images/profile/small/pic1.jpg')}}" alt=""></td>
                            <th>Name</th>
                            <th>Thumbnail</th>
                            <th>Industry</th>
                            <th>Description</th>
                            <th>Created By</th>
                            <th>Created Date</th>
                            <td>
                                <div class="d-flex">
                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
