<!--<h1>welcome from contact_us</h1>-->

@extends('master.anony')


@section ('content')

<section class="contactus" style="margin-bottom:100px;">
<form class="contactusForm" method="POST" action="contactus.php">
   <div> <p class="pContactus"> Contact Us </p> </div>
<input type="email"class="inputtext" id="t_email" name="email-from" placeholder="Your Email Please :)">
<br/>
<input type="tel"  class="inputtext"id="t_phone" name="phone-number" placeholder="Your Phone Number">
<br/>
<input type ="text" class="inputtext"name="subject" placeholder="Enter your message Subject">
<br/>
<textarea class="text_area"name="t_message" placeholder="Your Message"></textarea>
<br/>
<input type="submit" name="submit" value="send" id="btn-send">               
</form>
</section>

@endsection