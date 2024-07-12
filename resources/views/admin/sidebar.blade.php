<div class="d-flex align-items-stretch">
  <!-- Sidebar Navigation-->
  <nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
      <div class="avatar"><img src="assets/logo.png" alt="..." class="img-fluid rounded-circle"></div>
      <div class="title">
        <h1 class="h5">Butterfly Haven</h1>
        <p>Admin</p>
      </div>
    </div>
    <!-- Sidebar Navidation Menus-->
    <span class="heading">Main</span>
    <ul class="list-unstyled">
      <li class="active"><a href="{{ url('/dashboard')}}"> <i class="icon-home"></i>Home </a></li>

      <li><a href="#hotelRoomDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Hotel Room </a>
        <ul id="hotelRoomDropdown" class="collapse list-unstyled ">
          <li><a href="{{url('create_room')}}">Add Room</a></li>
          <li><a href="{{url('view_room')}}">View Room</a></li>
        </ul>
      </li>

      <li><a href="{{url('bookings')}}"> <i class="icon-logout"></i>Bookings </a></li>

      <li><a href="{{url('view_gallary')}}"> <i class="icon-grid"></i>Gallary </a></li>

      <li><a href="{{url('all_messages')}}"> <i class="icon-writing-whiteboard"></i>Messages</a></li>

      <li><a href="#faqsDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-chart"></i>FAQ's </a>
        <ul id="faqsDropdown" class="collapse list-unstyled ">
          <li><a href="{{url('create_faqs')}}">Add FAQ's</a></li>
          <li><a href="{{url('view_faqs')}}">View FAQ's</a></li>
        </ul>
      </li>


    </ul>
  </nav>