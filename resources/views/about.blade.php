<!-- resources/views/about.blade.php -->

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rawr Music</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('components.header')

  <section class="about" id="about">
    <h1 class="heading">About Us</h1>
    <div class="row">
      <div class="content">
        <h3>Khaila Oktavianingsih</h3>
        <p>Hello, I'm Khaila from Jakarta Polytechnic. Me and Stefany made a music store website, I hope you like it and enjoy your music everyone.</p>
        <ul>
          <li><i class="fas fa-user"></i>NIM: 2203421042 </li>
          <li><i class="fas fa-user"></i>Class: Broadband Multimedia 4B </li>
          <li><i class="fas fa-envelope"></i>Email: khaila.oktavianingsih.te22@mhsw.pnj.ac.id</li>
          <li><i class="fas fa-map-marker-alt"></i>Location: Depok</li>
        </ul>
      </div>
      <div class="content">
        <h3>Stefany Karista</h3>
        <p>Hello friends, I am a 4th semester student from Jakarta Polytechnic Campus. My major is Electrical Engineering. I hope you like this web and pray for me to be given a grade above KKM for this web. Thanks.</p>
        <ul>
          <li><i class="fas fa-user"></i>NIM: 2203421015 </li>
          <li><i class="fas fa-user"></i>Class: Broadband Multimedia 4B </li>
          <li><i class="fas fa-envelope"></i>Email: stefany.karista.te22@mhsw.pnj.ac.id</li>
          <li><i class="fas fa-map-marker-alt"></i>Location: Jakarta Utara</li> 
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="image">
        <img src="{{ asset('images/khaila.jpg') }}" alt="Khaila" class="about-image" style="max-width: 150px; height: auto;"> 
      </div>
      <div class="image">
        <img src="{{ asset('images/fany.jpeg') }}" alt="Stefany" class="about-image" style="max-width: 150px; height: auto;">
      </div>
    </div>
  </section>
  

  @include('components.footer')

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
