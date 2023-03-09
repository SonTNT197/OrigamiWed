@extends('layouts.index')
@section('css')
<link rel="stylesheet" href="{{asset('home/style.css')}}" />
@endsection
@section('content')

<div class="container history-menu">
                <h1 style="text-align: center; margin-top: 50px;">A brief history of origami</h1>
                <div class="first-history-menu">
                    <img src="{{asset('imgHome\history-of-origami.png')}}">
                    <p>There is much debate about the true history of origami.   No one knows exactly where or when origami first began.
                        Paper is one of the first things to degrade and disappear. Most people think that origami was first invented in China, but this may not be true at all.</p>

                        <p>We do know that paper was first invented in China during the first century A.D.  Paper was then brought from China to Japan by Buddhist monks during the sixth century A.D.</p>  
                </div>
                <div class="second-history-menu">
                    <p>However there is also a lot of examples of origami in other countries, and where there is paper, there is bound to have been some folding going on!</p>

                    <p>Origami became a very prominent art form in Japan and in Europe from as early as 1490.  One of the oldest documents written about origami is the ‘Senbazuru Orikita’, which translates to ‘One Thousand Origami Cranes’, and was written in around 1797.</p>
                    
                    <p>‘The oldest unequivocal document of origami is a short poem composed by Ihara Saikaku in 1680. It reads: Rosei-ga yume-no cho-wa orisue (The butterflies in Rosei’s dream would be origami.) Here he referred to an origami model called Ocho Mecho (Male and Female Butterflies) as “orisue.” We use it to wrap sake bottles mainly at the wedding ceremony.’ –</p>
                    
                    <p>Origami has gone through many different styles, including very loosely folded origami in Japan that had no exact fold position, it was up to personal taste to decide the shape.</p>
                    
                    <p>On the other hand, European origami, traditionally had more measuring and aligning involved.</p>
                
                    <p>Modern origami all around the world today has taken a more exact method. Diagrams are like architectural drawings, crisp and precise. The final model should look exactly as the designer intended.</p>
                </div>
          </div>

  @endsection