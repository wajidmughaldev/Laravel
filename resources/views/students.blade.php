<!DOCTYPE html>
<html>
<head>
    <title>Student Records</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            margin: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            background: white;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #3490dc;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr{
            cursor: pointer;
        }

        h1 {
            color: #333;
        }
        .del {
            color: red;
            text-decoration: none;

        }
    </style>
</head>
<body>
    <h1>Student List</h1>
    <span>Total Records: {{$totalRecords}}</span>
    <button onclick="window.location='{{route('delete.all.students')}}'" class="del">Delete All</button>

    <table>
        <thead>
            <tr>
                <th>#ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Date of Birth</th>
                <th>Address</th>
                <th>City</th>
                <th>State</th>
                <th>Zip Code</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr onclick="window.location='{{route('student.single.show',['id'=>$student->id])}}'">
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->date_of_birth }}</td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->city_name }}</td>
                    <td>{{ $student->state }}</td>
                    <td>{{ $student->zip_code }}</td>
                    <td>{{ date('Y-m-d', strtotime($student->created_at)) }}</td>
                    <td>
                        <a href="{{route('delete.single.student',['id'=>$student->id])}}" class="del">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
