<table border="1">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Address</th>
        <th>City</th>
    </tr>
    @foreach($employees as $employee)
    <tr>
        <td>{{ $employee['name'] }}</td> 
        <td>{{ $employee['email'] }}</td>
        <td>{{ $employee['mob_no'] }}</td>
        <td>{{ $employee['address'] }}</td>
        <td>{{ $employee['city_name'] }}</td> 
    </tr>
    @endforeach
</table>
