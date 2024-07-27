<div class="container m-5">
    <div>

    <div>
        <p class="m-2 fs-4" style="text-align: center;">Customer List</p>
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
                <th style="text-align: center;">Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($customers->count() > 0)
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{$customer->id}}</td>
                        <td>{{$customer->first_name}}</td>
                        <td>{{$customer->last_name}}</td>
                        <td>{{$customer->email}}</td>
                        <td>{{$customer->phone}}</td>
                        <td>{{$customer->location}}</td>
                        <td style="text-align: center;">
                            <button class="btn btn-sm btn-info">View</button>
                            <button class="btn btn-sm btn-secondary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="p-2" colspan="7" style="text-align:center"><small>No customer found in the database</small></td>
                </tr>
            @endif
        </tbody>
    </table>
</div>