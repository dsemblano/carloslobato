<section class="flex flex-col lg:flex-row">
  <div id="contador" class="container font-probold px-8 lg:px-16 flex flex-col items-center text-pros90blue uppercase text-6xl">
    <h2 class="text-pros90blue uppercase text-7xl">Faltam</h2>
    <div id="faltamdias" class="text-prosorangedark text-9xl p-8 rounded-Large"></div>
    {{-- {!! do_shortcode('[countdown date="02 October 2022" hour="07"  color="#F78F22" format="d"]') !!} --}}
    <h2 class="text-pros90blue uppercase text-4xl text-center">dias paras as eleições 2022</h2>
</div>

  <div  class="container px-8 lg:px-16 text-pros90blue text-3xl">
    @include('partials/snippets.figurinhas')
  </div>
</section>

<script>
    // Set the date we're counting down to
    var countDownDate = new Date("Oct 2, 2022 07:00:00").getTime();
    
    // Update the count down every 1 second
    var x = setInterval(function() {
    
      // Get today's date and time
      var now = new Date().getTime();
    
      // Find the distance between now and the count down date
      var distance = countDownDate - now;
    
      // Time calculations for days, hours, minutes and seconds. 
      var days = (Math.floor(distance / (1000 * 60 * 60 * 24)))+1;
    //   var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    //   var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    //   var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
      // Display the result in the element with id="demo"
    //   document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    //   + minutes + "m " + seconds + "s ";
    document.getElementById("faltamdias").innerHTML = days;
    
      // If the count down is finished, write some text
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("faltamdias").innerHTML = "EXPIRED";
      }
    }, 1000);
    </script>