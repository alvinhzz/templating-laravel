<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome!</title>
</head>

<body>
    <h1>SELAMAT DATANG {{ $name }}!</h1>

    <H3>Terimakasih telah bergabung di Sanberbook. Social Media kita bersama!</H3>
    <table>
        <tr>
            <th>Nama</th>
            <td>{{ $name }}</td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td>{{ $gender }}</td>
        </tr>
        <tr>
            <th>Negara Asal</th>
            <td>{{ $nation }}</td>
        </tr>
        <tr>
            <th>Biografi</th>
            <td>{{ $bio }}</td>
        </tr>
    </table>
</body>

</html>