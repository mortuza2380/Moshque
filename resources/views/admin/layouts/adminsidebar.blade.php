<div class="sidenav">
    {{--admin der naam show er jonno side bar e Controller theke user naam ansi who login--}}
    <h4 style="color:white;font-family: 'Times New Roman'">{{ Auth::user()->name }}</h4>
    <a style="font-family: 'Times New Roman'" href="/">Visit Site</a>
    <a style="font-family: 'Times New Roman'" href="/admin/photo_slides">Slide Show Img</a>
    <a style="font-family: 'Times New Roman'" href="/admin/imam_message">Imam Formal Message</a>
    <a style="font-family: 'Times New Roman'" href="/admin/event">Event</a>
    <a style="font-family: 'Times New Roman'" href="/admin/committee">Committee</a>
    <a style="font-family: 'Times New Roman'" href="/admin/noticeboard">Notice Board</a>
    <a style="font-family: 'Times New Roman'" href="/admin/money_transaction">Money Transaction</a>
    <a style="font-family: 'Times New Roman'" href="/admin/photo_gallery">Photo Gallery</a>
    <a style="font-family: 'Times New Roman'" href="/admin/book_library">Book Library</a>
    <a style="font-family: 'Times New Roman'" href="/admin/video_gallery">Video Gallery</a>
    <a style="font-family: 'Times New Roman'" href="/admin/ramadan_calender">Ramadan Calender</a>
    <a style="font-family: 'Times New Roman'" href="/admin/salat">Salat Time</a>
    <a style="font-family: 'Times New Roman'" href="/admin/question">Question</a>

    {{--for logout--}}
    <a style="color: red; font-family: 'Times New Roman'" href="{{ route('logout') }}"
       onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>




</div>
