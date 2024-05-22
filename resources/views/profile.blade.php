@php
$nama = "Fauzi";
$role = "Admin";
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    @if($role == 'Admin')
        <h3>Hallo {{ $nama }}, Anda login sebagai Administrator, (Admin Sudah Datang)</h3>
    @else
        <h3>Hallo {{ $nama }}.</h3>
    @endif
</body>
    
</html>