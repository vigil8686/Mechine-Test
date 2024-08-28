<!DOCTYPE html>
<html>
<head>
    <title>User Search</title>
    <!-- Add jQuery and Bootstrap or any other CSS framework -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
<div class="container">
    <h2 class="my-4">Search </h2>
    <input type="text" id="search" class="form-control" placeholder="Search  Name/ Department/ Designation">
    <br>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Name</th>
            <th>Department</th>
            <th>Designation</th>
            <!-- <th>Phone Number</th> -->
        </tr>
        </thead>
        <tbody id="userTable">
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->department->name }}</td>
                <td>{{ $user->designation->name }}</td>
                <!-- <td>{{ $user->phone_number }}</td> -->
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function () {
        $('#search').on('keyup', function () {
            var value = $(this).val().toLowerCase();
            $('#userTable tr').filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
</body>
</html>
