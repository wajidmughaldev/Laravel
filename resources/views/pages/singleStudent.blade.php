<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f8fafc;
            padding: 40px;
        }

        .card {
            max-width: 700px;
            margin: auto;
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        .info {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 15px 25px;
            margin-bottom: 10px;
        }

        .info div {
            padding: 10px;
        }

        .label {
            font-weight: bold;
            color: #555;
        }

        .value {
            color: #333;
        }

        @media (max-width: 600px) {
            .info {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

    <div class="card">
        <a href="{{route('students.show')}}">Back</a>
        <h2>Student Profile</h2>

        <div class="info">
            <div class="label">ID</div>
            <div class="value">{{ $student->id }}</div>

            <div class="label">Name</div>
            <div class="value">{{ $student->name }}</div>

            <div class="label">Email</div>
            <div class="value">{{ $student->email }}</div>

            <div class="label">Phone</div>
            <div class="value">{{ $student->phone }}</div>

            <div class="label">Date of Birth</div>
            <div class="value">{{ date('F d, Y', strtotime($student->date_of_birth)) }}</div>

            <div class="label">Address</div>
            <div class="value">{{ $student->address }}</div>

            <div class="label">City ID</div>
            <div class="value">{{ $student->city }}</div>

            <div class="label">State</div>
            <div class="value">{{ $student->state }}</div>

            <div class="label">Zip Code</div>
            <div class="value">{{ $student->zip_code }}</div>

            <div class="label">Created At</div>
            <div class="value">{{ date('Y-m-d H:i:s', strtotime($student->created_at)) }}</div>

            <div class="label">Updated At</div>
            <div class="value">{{ date('Y-m-d H:i:s', strtotime($student->updated_at)) }}</div>
        </div>
    </div>

</body>
</html>
