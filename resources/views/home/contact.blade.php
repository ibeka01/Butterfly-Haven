<div id="contact" class="contact" style="margin-bottom: 80px!important; padding: 30px 0 0 0;">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h1 class="text-center mt-3 display-3 fw-bold">Contact Us</h1>
            <hr>
            <div class="wrapper text-center mb-5">
               <h5>It turns out they prefer to book this room, you know...</h5>
            </div>

            @if(session()->has('message'))

            <div class="alert alert-success">
               <button type="button" class="close" data-bs-dismiss="alert">x</button>
               {{session()->get('message')}}
            </div>

            @endif
         </div>
      </div>
      <div class="row">
         <div class="col-md-6">
            <form id="request" class="main_form" action="{{url('contact')}}" method="post">

               @csrf
               <div class="row">
                  <div class="col-md-12 ">
                     <input class="contactus" placeholder="Name" type="type" name="name" required>
                  </div>
                  <div class="col-md-12">
                     <input class="contactus" placeholder="Email" type="email" name="email" required>
                  </div>
                  <div class="col-md-12">
                     <input class="contactus" placeholder="Phone Number" type="number" name="phone" required>
                  </div>
                  <div class="col-md-12">
                     <textarea class="textarea" placeholder="Message" type="type" name="message" required>Message</textarea>
                  </div>
                  <div class="col-md-12">
                     <button type="submit" class="send_btn">Send</button>
                  </div>
               </div>
            </form>
         </div>
         <div class="col-md-6">
            <div class="map_main">
               <div class="map-responsive">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d126701.397935567!2d107.751789!3d-7.0773617!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6dae0ebc7f1%3A0xe66e4212eca23ed3!2sIBEKA%20Jakarta!5e0!3m2!1sid!2sid!4v1719893614546!5m2!1sid!2sid" width="600" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>