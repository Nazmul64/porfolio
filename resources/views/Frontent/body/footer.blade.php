
<footer class="ftco-footer ftco-section">

  @php
		use App\Models\Sitting;
		$Sitting = Sitting::first();
	@endphp
    <div class="container">
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">About</h2>
            <p>{{ $Sitting->description ?? '' }}</p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
    @if(!empty($Sitting->twitter))
        <li class="ftco-animate">
            <a href="{{ $Sitting->twitter }}"><span class="icon-twitter"></span></a>
        </li>
        <li class="ftco-animate"><a href="{{ $Sitting->twitter ?? '' }}"><span class="icon-twitter"></span></a></li>
    @endif

    @if(!empty($Sitting->facebook))
        <li class="ftco-animate">
            <a href="{{ $Sitting->facebook }}"><span class="icon-facebook"></span></a>
        </li>
    @endif

    @if(!empty($Sitting->instagram))
        <li class="ftco-animate">
            <a href="{{ $Sitting->instagram }}"><span class="icon-instagram"></span></a>
        </li>
    @endif

    @if(!empty($Sitting->whatsapp))
        <li class="ftco-animate">
            <a href="https://wa.me/{{ $Sitting->whatsapp }}"><span class="icon-whatsapp"></span></a>
        </li>
    @endif

    @if(!empty($Sitting->linkedin))
        <li class="ftco-animate">
            <a href="{{ $Sitting->linkedin }}"><span class="icon-linkedin"></span></a>
        </li>
    @endif
</ul>

          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-4">
            <h2 class="ftco-heading-2">Links</h2>
            <ul class="list-unstyled">
              <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
              <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
              <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Services</a></li>
              <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Projects</a></li>
              <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
           <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Services</h2>
            <ul class="list-unstyled">
              <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Web Design</a></li>
              <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Web Development</a></li>
              <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Business Strategy</a></li>
              <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Data Analysis</a></li>
              <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Graphic Design</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">{{ $Sitting->address ?? '' }}</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+{{ $Sitting->phone ?? '' }}</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">{{ $Sitting->gmail ?? '' }}</span></a></li>
                </ul>
              </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://omsitbd.com/" target="_blank">OMSITBD</a></p>
        </div>
      </div>
    </div>
  </footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
<script src="{{ asset('Frontent/js/jquery.min.js') }}"></script>
<script src="{{ asset('Frontent/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('Frontent/js/popper.min.js') }}"></script>
<script src="{{ asset('Frontent/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('Frontent/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('Frontent/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('Frontent/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('Frontent/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('Frontent/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('Frontent/js/aos.js') }}"></script>
<script src="{{ asset('Frontent/js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('Frontent/js/scrollax.min.js') }}"></script>
<script src="{{ asset('Frontent/js/main.js') }}"></script>
</body>
</html>
