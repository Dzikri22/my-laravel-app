<!DOCTYPE html>
<html>
<head>
    <title>Daftar Member</title>
    <style>
        table { width: 50%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Daftar Member Aplikasi</h1>
    
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @forelse($members as $member)
                <tr>
                    <td>{{ $member->nama }}</td>
                    <td>{{ $member->email }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="2">Belum ada data member.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>