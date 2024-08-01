<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rawr Music</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
@include('components.header')

<section class="video" id="video">

    <h1 class="heading">Music Video</h1>

    <ul class="controls">
        <li class="button active" data-filter="all">all</li>
        <li class="button" data-filter="video">music video</li>
        <li class="button" data-filter="lyric">lyric video</li>
    </ul>

    <div class="box-container">
        <figure style="text-align: center;">
            <video controls poster="https://i.ytimg.com/vi/5zQax3YP_4w/maxresdefault.jpg" class="image video" data-text="The Script - The Man Who Can't Be Moved On">
                <source src="images/The Script.mp4" type="video/mp4">
            </video> 
        </figure>     

        <figure style="text-align: center;">
            <video controls poster="images/tulusinteraksi.jpg" class="image lyric" data-text="Tulus - Interaksi">
                <source src="images/Interaksi.mp4" type="video/mp4">
            </video> 
        </figure>   

        <figure style="text-align: center;">
            <video controls poster="images/raisa.jpg" class="image video" data-text="Raisa Anggiani - Losing Us">
                <source src="images/Raissa Anggiani.mp4" type="video/mp4">
            </video>  
        </figure>
        
        <figure style="text-align: center;">
            <video controls poster="images/fearless.png" class="image lyric" data-text="Taylor Swift - Fearless">
                <source src="images/Fearless.mp4" type="video/mp4">
            </video>   
        </figure>

        <figure style="text-align: center;">
            <video controls poster="images/niki.jpg" class="image lyric" data-text="Niki - Take a Chance With Me">
                <source src="images/Take A Chance With Me.mp4" type="video/mp4">
            </video>   
        </figure>

        <figure style="text-align: center;">
            <video controls poster="images/asing.jpeg" class="image video" data-text="Juicy Luicy - Asing">
                <source src="images/Juicy Luicy.mp4" type="video/mp4">
            </video> 
        </figure>
    </div>

</section>

<div id="video-text">
    <!-- Text corresponding to the video will be displayed here -->
</div>

@include('components.footer')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
