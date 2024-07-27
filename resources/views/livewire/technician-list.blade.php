
<div class="container m-5">
    <div>
        <p class="m-2 fs-4" style="text-align: center;">Technician List</p>
    </div>
    <table class="table table-hover text-dark w-100 fs-6">
        <thead>
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Location</th>
                <th>Job Type</th>
                <th style="text-align: center;">Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($technicians->count() > 0)
                @foreach ($technicians as $technician)
                    <tr>
                        <td>{{$technician->id}}</td>
                        <td>{{$technician->first_name}}</td>
                        <td>{{$technician->last_name}}</td>
                        <td>{{$technician->email}}</td>
                        <td>{{$technician->phone}}</td>
                        <td>{{$technician->location->name}}</td> 
                        <td>{{$technician->jobType->name}}</td> 
                        <td style="text-align: center;">
                            <button class="btn btn-sm btn-info">View</button>
                            <button class="btn btn-sm btn-secondary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="p-2" colspan="7" style="text-align:center"><small>No technician found in the database</small></td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
