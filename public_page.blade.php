<!--<h1>welcome from login</h1>-->
@extends('master.anony')
@section ('content')
<!--<h1>hello from master public page</h1>-->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
    <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleControls" data-slide-to="1"></li>
    <li data-target="#carouselExampleControls" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" style="width:100%;height:500px;"src="https://collegeinfogeek.com/wp-content/uploads/2018/11/Essential-Books.jpg" alt="First slide">
      <div class="blackbackground" style="
      background-color:black;
      height:500px;
      width:100%;
      opacity:0.4;
      margin-top:-500px;
      "></div>
      <div class="text" style="position:absolute;color:white;margin-top:-300px;font-size:25px;font-weight:bolder;font-family:'Abel';margin-left:130px;">
      <p>Booky is a library website that have many books of many categories to borrow and buy.
      <br/>
      You can borrow whatever books you want for 10 days and extend the duration to 10 days again only.
      </p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" style="width:100%;height:500px;" src="https://lithub.com/wp-content/uploads/2019/07/used-books-store-2.jpg" alt="Second slide">
      <div class="blackbackground" style="
      background-color:black;
      height:500px;
      width:100%;
      opacity:0.4;
      margin-top:-500px;
      "></div>
      <div class="text" style="position:absolute;color:white;margin-top:-300px;font-size:25px;font-weight:bolder;font-family:'Abel';margin-left:130px;">
      <p>From many categories borrow the books you want and feel free to<br/> read in your own place like you were in a library.</p>
      <div style="margin-left:200px;position:absolute;">
      <button class="btn btn-primary"><a href="register" style="color:white;font-weight:bolder;text-decoration:none;">Register</a></button>
      </div>
      </div>
      
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" style="width:100%;height:500px;" src="https://images2.minutemediacdn.com/image/upload/c_crop,h_1890,w_3363,x_0,y_193/f_auto,q_auto,w_1100/v1565628997/shape/mentalfloss/gettyimages-944631208.jpg" alt="Third slide">
      <div class="blackbackground" style="
      background-color:black;
      height:500px;
      width:100%;
      opacity:0.4;
      margin-top:-500px;
      "></div>
      <div class="text" style="position:absolute;color:white;margin-top:-300px;font-size:25px;font-weight:bolder;font-family:'Abel';margin-left:130px;">
      <p>Swipe down to see the frequent categories.</p>
      <div style="margin-left:100px;position:absolute;">
      <button class="btn btn-primary"><a href="#categories" style="color:white;font-weight:bolder;text-decoration:none;">Swipe Down</a></button>
      </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="space" style="width:100%;height:50px;"></div>

<div id="categories" class="cards" style="float:left;margin-left:50px;">
<div class="card" style="height:450px;width: 18rem;margin-bottom:20px;margin-left:20px;float:left;">
  <img class="card-img-top" style="width:100%;height:200px;"src="https://i0.wp.com/batchofbooks.com/wp-content/uploads/2019/02/YA-Romance-Books-for-Teens-Image.png?fit=900%2C480&ssl=1" alt="Card image cap">
  <div class="card-body"style="background-color:rgb(230, 243, 199);">
    <h5 class="card-title">Romance</h5>
    <p class="card-text">Live with love stories and go away from reality to fiction world with awesomelove moments.</p>
    <a href="#" class="btn btn-primary">Show More</a>
  </div>
</div>
<div class="card" style="height:450px;width: 18rem;margin-bottom:20px;margin-left:20px;float:left;">
  <img class="card-img-top" style="width:100%;height:200px;" src="https://rsliterature.org/wp-content/uploads/2017/08/literature-matters@2x.jpg" alt="Card image cap">
  <div class="card-body"style="background-color:rgb(230, 243, 199);">
    <h5 class="card-title">Literature</h5>
    <p class="card-text">Literature books most commonly refers to works of the creative imagination, including poetry, drama, fiction, nonfiction.</p>
    <a href="#" class="btn btn-primary">Show More</a>
  </div>
</div>
<div class="card" style="height:450px;width: 18rem;margin-bottom:20px;margin-left:20px;float:left;">
  <img class="card-img-top" style="width:100%;height:200px;" src="https://lithub.com/wp-content/uploads/2018/08/EZJa80S.jpg" alt="Card image cap">
  <div class="card-body"style="background-color:rgb(230, 243, 199);">
    <h5 class="card-title">fiction</h5>
    <p class="card-text">Fiction broadly refers to any narrative consisting of imaginary people, events, or descriptions—in other words, a narrative not based strictly on history or fact.</p>
    <a href="#" class="btn btn-primary">Show More</a>
  </div>
</div>
<div class="card" style="height:450px;width: 18rem;margin-bottom:20px;margin-left:20px;float:left;">
  <img class="card-img-top" style="width:100%;height:200px;" src="https://d15fwz9jg1iq5f.cloudfront.net/wp-content/uploads/2019/01/28110223/YoER-ShortStories.jpg" alt="Card image cap">
  <div class="card-body"style="background-color:rgb(230, 243, 199);">
    <h5 class="card-title">Anthology</h5>
    <p class="card-text">In book publishing, an anthology is a collection of literary works, it may be a collection of plays, poems, short stories, songs or excerpts by different authors.</p>
    <a href="#" class="btn btn-primary">Show More</a>
  </div>
</div>
</div>


@endsection 

