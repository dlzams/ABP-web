<!DOCTYPE html>
<html>
<head>
    <title>{{$title}}</title>
    <style>
        /* CSS styles */
        body {
            font-family: Arial, sans-serif;
        }

        h3 {
            text-align: center;
        }

        table {
            width: 50%;
            margin: auto;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .back-btn {
            display: block;
            width: 100px;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .back-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h3>{{$title}}</h3>
    <table border="1">
        <tr><th>No</th><th>Nama</th><th>Asal</th></tr>
        @php $no = 1; @endphp
        @foreach($daf_mhs as $mhs)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$mhs['nama']}}</td>
            <td>{{$mhs['asal']}}</td>
        </tr>
        @endforeach
    </table>
    <a href="/" class="back-btn">Back to Main Menu</a>
</body>
</html>
