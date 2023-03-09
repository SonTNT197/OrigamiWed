@extends('layouts.index')
@section('css')
<link rel="stylesheet" href="{{asset('home/style.css')}}" />
<link rel="shortcut icon" href="../Origami/pictures/312503225_5434003726654953_2755769698976506666_n.jpg" />
<link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@endsection
@section('content')

    <div class="menu-container">
      <div class="slideshowmenu">
        <div class="slideshow-container">
          <div class="mySlides fade">
            <img src="{{asset('imgHome/slide1.jpg')}}" style="width: 100%" class="picture" />
            <div class="text">Dolly</div>
          </div>
          <div class="mySlides fade">
            <img src="{{asset('imgHome/slide 2.jpg')}}" style="width: 100%" class="picture" />
            <div class="text">Horses</div>
          </div>
          <div class="mySlides fade">
            <img src="{{asset('imgHome/slide 3.jpg')}}" style="width: 100%" class="picture" />
            <div class="text">Bird</div>
          </div>
          <div class="mySlides fade">
            <img src="{{asset('imgHome/slide 4.jpg')}}" style="width: 100%" class="picture" />
            <div class="text">Pink Fairy</div>
          </div>
          <a class="prev" onclick="plusSlides(-1)">❮</a>
          <a class="next" onclick="plusSlides(1)">❯</a>
        </div>
      </div>
      <h2>Learn How to Make Origami!</h2>
      <img style="
              box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px,
                rgba(0, 0, 0, 0.12) 0px -12px 30px,
                rgba(0, 0, 0, 0.12) 0px 4px 6px,
                rgba(0, 0, 0, 0.17) 0px 12px 13px,
                rgba(0, 0, 0, 0.09) 0px -3px 5px;
              height: 722px;
              width: 1000px;
            "
      
      src="{{asset('imgHome/Origami Pikachu Tutorial - Cute Origami Pokemon - Paper Kawaii.jpg')}}" style="width: 100%; height: 600px" />
      <p>
        The origami instructions at Origami.guide are presented in an easy to
        follow photo tutorial format.
      </p>
      <br />
      <p>
        You will find lots of wonderful origami models to fold at
        origami.guide, many of which are unique and can’t be found anywhere
        else!
      </p>
      <br />
      <p>
        Origami is extremely enjoyable and gives a great sense of
        accomplishment after folding a model.
      </p>
      <br />
      <p>
        We’d like everyone to learn origami and enjoy the many wonderful
        benefits it can bring to your life.
      </p>
      <br />
      <br />
      <h2>Origami is simply the art of folding paper</h2>
      <img style="
              box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px,
                rgba(0, 0, 0, 0.12) 0px -12px 30px,
                rgba(0, 0, 0, 0.12) 0px 4px 6px,
                rgba(0, 0, 0, 0.17) 0px 12px 13px,
                rgba(0, 0, 0, 0.09) 0px -3px 5px;
            " 
      src="{{asset('imgHome/Nghệ thuật gấp giấy Origami là gì_.png')}}" style="width: 100%; height: 600px" />
      <p>
        “Oru” in Japanese means ‘to fold’ and “Kami” in Japanese means
        ‘Paper’, so it translates as ‘To fold paper‘.
      </p>
      <br />
      <p>
        All of the origami instructions on this website are easy to
        understand. There is a selection of easy, intermediate and advanced
        origami to choose from!
      </p>
      <br />
      <p>
        Please use the category menu to the left or chose from the main
        origami categories below.
      </p>
      <br />
      <p>
        After you have clicked on the origami model you’d like to fold, you
        will be shown the origami instructions to fold that model.
      </p>
      <br />
      <p>
        Origamiclub.com is constantly being updated, please bookmark this
        website for later.
      </p>
      <br />
      <strong>Enjoy folding!</strong>
    </div>
@endsection
