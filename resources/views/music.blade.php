<!-- resources/views/music.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rawr Music</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('components.header')
  <section class="music" id="music">
    <h1 class="heading">Rawr Music</h1>
    <div class="box-container">
        <div class="box" data-src="images/blackpink lagu.mp3">
            <div class="image">
                <div class ="play">
                    <i class="fas fa-play"></i>
                </div>
                <img src="images/bp1.jpeg" alt="">
            </div>
            <div class="content">
                <h3>Blackpink <br> As If It's Your Last</h3>
            </div>
        </div>

        <div class="box" data-src="images/Tampar.mp3">
            <div class="image">
                <div class ="play">
                    <i class="fas fa-play"></i>
                </div>
                <img src="images/juicy luicy.jpg" alt="">
            </div>
            <div class="content">
                <h3>Juicy Luicy <br> Tampar </h3>
            </div>
        </div>

        <div class="box" data-src="images/NMIXX O.O M V.mp3">
            <div class="image">
                <div class ="play">
                    <i class="fas fa-play"></i>
                </div>
                <img src="images/nmixx.jpg" alt="">
            </div>
            <div class="content">
                <h3>NMIXX <br> O.O</h3>
            </div>
        </div>

        <div class="box" data-src="images/Hivi!.mp3">
            <div class="image">
                <div class ="play">
                    <i class="fas fa-play"></i>
                </div>
                <img src="images/hivi.jpg" alt="">
            </div>
            <div class="content">
                <h3>Hivi <br> Indahnya Dirimu</h3>
            </div>

        </div>
        <div class="box" data-src="images/BTS.mp3">
            <div class="image">
                <div class ="play">
                    <i class="fas fa-play"></i>
                </div>
                <img src="images/bts.jpg" alt="">
            </div>
            <div class="content">
                <h3>BTS <br> Boy With Luv</h3>
            </div>
        </div>

        <div class="box" data-src="images/cantik.mp3">
            <div class="image">
                <div class ="play">
                    <i class="fas fa-play"></i>
                </div>
                <img src="images/kahitna.jpg" alt="">
            </div>
            <div class="content">
                <h3>Kahitna <br> Cantik </h3>
            </div>
        </div>

        <div class="box" data-src="images/YOVIE & NUNO.mp3">
            <div class="image">
                <div class ="play">
                    <i class="fas fa-play"></i>
                </div>
                <img src="images/yovie and nuno.jpg" alt="">
            </div>
            <div class="content">
                <h3>Yovie and Nuno <br> Mengejar Mimpi </h3>
            </div>
        </div>

        <div class="box" data-src="images/Sheila On 7.mp3">
            <div class="image">
                <div class ="play">
                    <i class="fas fa-play"></i>
                </div>
                <img src="images/sheila.jpg" alt="">
            </div>
            <div class="content">
                <h3>Sheila On 7 <br> Film Favorit </h3>
            </div>
        </div>

        <div class="music-player">
            <div id="close-player" class="fas fa-angle-up"></div>
            <h3 class="music-title">(play your song)</h3>
            <audio src="" controls></audio>
        </div>
    </div>
  </section>

  @include('components.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
