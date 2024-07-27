<div class="container m-5">
    <div>
        <p class="m-2 fs-4" style="text-align: center;">Maintenance Requests</p>
    </div>
    <table class="table table-hover text-dark w-100 fs-6">
        <thead>
            <tr>
                <th>Id</th>
                <th>Equipment</th>
                <th>Request Type</th>
                <th>Description</th>
                <th>Status</th>
                <th style="text-align: center;">Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($requests->count() > 0)
                @foreach ($requests as $request)
                    <tr>
                        <td>{{ $request->id }}</td>
                        <td>{{ $request->equipment ? $request->equipment->name : 'N/A' }}</td>
                        <td>{{ $request->requestType ? $request->requestType->name : 'N/A' }}</td>
                        <td>{{ $request->description }}</td>
                        <td>{{ $request->status }}</td>
                        <td style="text-align: center;">
                            <button class="btn btn-sm btn-info">Accept</button>
                            <button class="btn btn-sm btn-danger">Reject</button>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="7" style="text-align:center"><small>No maintenance requests found</small></td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
