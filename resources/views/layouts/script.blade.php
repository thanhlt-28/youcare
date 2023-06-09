<!-- use Script Bundle Bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- use Script Bundle Bootstrap 5 -->

<!-- use Script Separate Bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<!-- use Script Separate Bootstrap 5 -->


<!-- Vendor JS Files -->
<!-- <script src="{{asset('assets/vendor/purecounter/purecounter.js')}}"></script> -->
<script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<!-- <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.3/swiper-bundle.min.js"></script>
<script src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
<script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('assets/js/main.js')}}"></script>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('assets/lib/isotope/isotope.pkgd.min.js')}}"></script>
<!-- <script src="{{asset('assets/lib/lightbox/js/lightbox.min.js')}}"></script> -->

<!-- Template Javascript -->
<script src="{{asset('assets/lib/js/main.js')}}"></script>

<!-- Scripts -->
<!-- Bootstrap core JavaScript -->

<script src="{{asset('assets/js/isotope.min.js')}}"></script>
<script src="{{asset('assets/js/owl-carousel.js')}}"></script>
<!-- <script src="{{asset('assets/js/wow.js')}}"></script> -->
<script src="{{asset('assets/js/tabs.js')}}"></script>
<script src="{{asset('assets/js/popup.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
<script src="https://cdn.jsdelivr.net/npm/icomoon@1.0.0/demo-files/demo.min.js"></script>



<script>
  // DOM Ready
  $(function() {

    var $el, $ps, $up, totalHeight;

    $(".sidebar-box .button").click(function() {
      // IE 7 doesn't even get this far. I didn't feel like dicking with it.
      totalHeight = 0
      $el = $(this);
      $p = $el.parent();
      $up = $p.parent();
      $ps = $up.find("p:not('.read-more')");

      // measure how tall inside should be by adding together heights of all inside paragraphs (except read-more paragraph)
      $ps.each(function() {
        totalHeight += $(this).outerHeight();
        // FAIL totalHeight += $(this).css("margin-bottom");
      });
      $up
        .css({
          // Set height to prevent instant jumpdown when max height is removed
          "height": $up.height(),
          "max-height": 9999
        })
        .animate({
          "height": totalHeight
        });

      // fade out read-more
      $p.fadeOut();

      // prevent jump-down
      return false;

    });

  });
</script>