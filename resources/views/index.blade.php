<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<body>
<div class="main-container">
    <h1>Ứng dụng kiểm tra email hợp lệ</h1>
    <form action="{{ route('checkEmail') }}" method="post">
        @csrf
        <label for="email-input">Email:</label>
        <input type="text" id="email-input" placeholder="Email can kiem tra" name="email" class="form-control">
        <hr style="color: azure;">
        <button class="btn btn-primary">Check</button>
    </form>
    @if (isset($isEmail))
        Kết quả: {{ $isEmail ? 'Dung dinh dang' : 'Sai dinh dang' }}
    @endif
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
