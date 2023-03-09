<div class="menuheader">
  <nav>
    <a href="{{url('/')}}"><img src="{{asset('imgHome/6aed9f067ba74c7e8d984f19cb09c928.png')}}" height="100px" width="150px" /></a>
    <ul>
      <li class=""><a href="{{url('/')}}">Home</a></li>
      <li class="dropdown">
        <button class="dropbtn"><a href="{{url('listCategory')}}">Category</a></button>
        <div class="dropdown-content">
          @if(!empty($category))
          @foreach ($category as $i=>$cat)
          <a href="{{url('listOrigami/category',$cat->id_category)}}">{{$cat->name_category}}</a>
          @endforeach
          @endif
        </div>
      </li>
      <li class="dropdown">
        <button class="dropbtn"><a href="{{url('listLevel')}}">Level</a></button>
        <div class="dropdown-content">
          @if(!empty($level))
          @foreach ($level as $i=>$lev)
          <a href="{{url('listOrigami/level',$lev->id_level)}}">{{$lev->name_level}}</a>
          @endforeach
          @endif
        </div>
      </li>
      <li class="dropbtn"><a href="{{url('/history')}}">History</a></li>
      <li class="dropbtn"><a href="{{url('/aboutUs')}}">About Us</a></li>
      <input id="searchbox" placeholder="Searching" />
      <div class="searchbtn">
        <button>
          <ion-icon name="search-outline"></ion-icon>
        </button>
      </div>
    </ul>
  </nav>
  <div class="scrollBackToTop">
    <button id="scrollUp">
      <ion-icon name="chevron-up-outline"></ion-icon>
    </button>
  </div>
</div>