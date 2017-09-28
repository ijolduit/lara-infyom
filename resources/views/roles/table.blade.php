<table class="table table-responsive" id="users-table">
    <thead>
        <th>No</th>
        <th>Name</th>
        <th>Display_name</th>
        <th>Description</th>
        <th colspan="3">Action</th>
        
    </thead>
    <tbody>
        @foreach($roles as $role)
        <tr>

            <td>{{ ++$i }}</td>
            <td>{{ $role->name }}</td>
            <td>{{ $role->display_name }}</td>
            <td>{{ $role->description }}</td>
            <td>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>