<!-- resources/views/home.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rawr Music</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style3.css') }}">
    <style>
        .home{
            display: flex;
            align-items: center;
            background: url(./images/bg1.jpg) no-repeat; 
            min-height: 110vh;
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body>
    @include('components.header')
    <section class="home" id="home">
        <div class="content">
            <h3>I'm a Star, How Could I not Shine?</h3>
            <a href="{{ url('/about') }}" class="btn">show more</a>
    </form>
    </section>

    <section class="music" id="music">
    <h1 class="heading">Top Music</h1>
    <div class="box-container">
        <div class="box" data-src="images/SEVENTEEN.mp3">
            <div class="image">
                <div class ="play">
                    <i class="fas fa-play"></i>
                </div>
                <img src="https://i.scdn.co/image/ab67616d0000b27380e31ba0c05187e6310ef264" alt="">
            </div>
            <div class="content">
                <h3>Seventeen <br> Super</h3>
            </div>
        </div>

        <div class="box" data-src="images/getaway.mp3">
            <div class="image">
                <div class ="play">
                    <i class="fas fa-play"></i>
                </div>
                <img src="https://i.scdn.co/image/ab67616d0000b273da5d5aeeabacacc1263c0f4b" alt="">
            </div>
            <div class="content">
                <h3>Taylor Swift <br> Getaway Car </h3>
            </div>
        </div>

        <div class="box" data-src="images/dandelions.mp3">
            <div class="image">
                <div class ="play">
                    <i class="fas fa-play"></i>
                </div>
                <img src="https://i.scdn.co/image/ab67616d0000b27397e971f3e53475091dc8d707" alt="">
            </div>
            <div class="content">
                <h3>Ruth B <br> Dandelions</h3>
            </div>
        </div>

        <div class="music-player">
            <div id="close-player" class="fas fa-angle-up"></div>
            <h3 class="music-title">(play your song)</h3>
            <audio src="" controls></audio>
        </div>
    </div>

    <section class="shop" id="shop">
    <h1 class="heading">Top Artist</h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="https://i.scdn.co/image/ab67616d0000b2735b1c64d5433d4ddaaf2768b5" alt="">
            </div>
            <div class="content">
                <h3>Ariana Grande</h3>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="https://i.scdn.co/image/ab67616d00001e02770eeb0ee1c91983b1ba4a10" alt="">
            </div>
            <div class="content">
                <h3>Niki Zefanya</h3>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="https://i.scdn.co/image/ab6761610000e5ebe672b5f553298dcdccb0e676" alt="">
            </div>
            <div class="content">
                <h3>Taylor swift </h3>
            </div>
        </div>
    </div>
  </section>
  </section>
    @include('components.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
