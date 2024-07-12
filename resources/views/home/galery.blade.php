<div id="galeri" class="gallery" style="padding: 30px 0 20px 0;">
   <div class="container">
      <h1 class="text-center mt-3 display-3 fw-bold">Gallary</h1>
      <hr>
      <div class="wrapper text-center mb-5">
         <h5>It turns out they prefer to book this room, you know...</h5>
      </div>
      <div class="row">

         @foreach ($gallary as $gallary)

         <div class="col-md-3 col-sm-6">
            <div class="gallery_img">
               <figure><img src="/gallary/{{$gallary->image}}" alt="#" /></figure>
            </div>
         </div>

         @endforeach

      </div>
   </div>
</div>