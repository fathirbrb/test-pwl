<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 260px;
        }

        .avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 2px solid #ccc;
            margin: 0 auto 20px auto;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #fff;
        }

        .avatar svg {
            width: 70px;
            height: 70px;
            fill: #cccccc;
        }

        .box {
            background-color: #e0e0e0;
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 4px;
            font-size: 15px;
            color: #333333;
        }
    </style>
</head>

<body>

    <div class="card">
        <div class="avatar">
            <svg viewBox="0 0 24 24">
                <path
                    d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
            </svg>
        </div>

        <div class="box">{{ $nama ?: 'Nama' }}</div>
        <div class="box">{{ $kelas ?: 'Kelas' }}</div>
        <div class="box">{{ $npm ?: 'NPM' }}</div>
    </div>

</body>

</html>