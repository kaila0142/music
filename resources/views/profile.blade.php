<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
   
</head>
<body>
@include('components.header')

<div class="profile-container">
        <h1>User Profile</h1>
        <div class="profile-item">
            <label for="name">Name:</label>
            <p id="name">{{ Auth::user()->name }}</p>
        </div>
        <div class="profile-item">
            <label for="email">Email:</label>
            <p id="email">{{ Auth::user()->email }}</p>
        </div>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn">Logout <i class="fas fa-sign-out-alt"></i></button>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
