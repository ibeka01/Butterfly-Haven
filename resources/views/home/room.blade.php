<div class="our_room" id="room">
   <div class="container">
      <h1 class="text-center mt-3 display-3 fw-bold">Room's</h1>
      <hr>
      <div class="wrapper text-center mb-5">
         <h5>It turns out they prefer to book this room, you know...</h5>
      </div>

      <!-- our room -->
      <div class="row">
         @foreach ($room as $rooms)
         <div class="col-md-4 col-sm-6">
            <div id="serv_hover" class="room">
               <div class="room_img">
                  <figure>
                     <img style="height: 200px; width: 350px;" src="room/{{$rooms->image}}" alt="kamar" />
                  </figure>
               </div>
               <div class="bed_room">
                  <h3>{{$rooms->room_title}}</h3>
                  <p style="padding:10px">{!!Str::limit($rooms->description, 100) !!}</p>
                  <!-- <a class="btn btn-primary" href="{{url('details_room', $rooms->id)}}">Room Details</a> -->
                  <a class="read_more" href="{{ url('details_room', $rooms->id)}}"> Room Details</a>
               </div>
            </div>
         </div>
         @endforeach

      </div>
   </div>
</div>