<body style="background-color:black;">
  <?php
  include "header.php";
 
  ?>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/cricket.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>COCHIN UNIVERSITY OF SCIENCE AND TECHNOLOGY <br></strong></h1>
            <div>
            <h1 class="mb-4"  data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong id="demo"><br></strong></h1>
            
            </div>
            
            <div class="browse d-md-flex col-md-12" >
                <div class="row">
                  <?php
                  $type_query = "SELECT * FROM event_type";
                  $run_query = mysqli_query($con,$type_query);
                  
                  if(mysqli_num_rows($run_query) > 0){
                    $i=0;   
                    while($row = mysqli_fetch_array($run_query)){
                           
                      $type_id = $row["type_id"];
                      $type_title = $row["type_title"];
                      $tag_id=$i++;
                      echo "
                      <span class='d-flex justify-content-center align-items-md-center'><a href='#$tag_id' style='border-radius:20px;margin-bottom:20px;'><i class=''></i>$type_title</a></span>
                                   
                      ";
                    }
                    
                  }
                  ?>
            	
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section services-section bg-dark">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-guarantee"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Best Price Guarantee</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-like"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Travellers Love Us</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-detective"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Best Travel Agent</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-support"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Our Dedicated Support</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>
   
<section class="corousel">
<h1 style="color:white;"><strong><center>BANNERS</center></strong></h1>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/1a.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/1b.jpg" height="1000" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/1c.jpg" alt="Third slide">
    </div>
	<div class="carousel-item">
      <img class="d-block w-100" src="images/1d.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>
    
    <section class=" bg-dark" id="events">
    	<div class="container" id="0">
    		<div class="row justify-content-start mb-5 pb-3">
             <div class="col-md-7 heading-section ftco-animate"></br></br>
            <h2 class="mb-4" style="color:white;"><strong><center>Book Your</strong>  Favourite Event</center></h2>
          </div>
        </div>  
    		<div class="row" id="technical" >
    			<div class="col-md-12 ftco-animate">
    				<div id="accordion">
    					<div class="row" >
                <div class="col-md-12">
                  <div id="get_events"></div>
                      <?php
                      $event_query = "SELECT * FROM event_type";
                      $run_query1 = mysqli_query($con,$event_query);
                      
                      if(mysqli_num_rows($run_query1) > 0){
                          
                        while($row = mysqli_fetch_array($run_query1)){
                            
                        $type_id = $row["type_id"];
                        $type_title= $row["type_title"];
                        echo " 
                        <div class='card'>
                        <div class='card-header' id='$type_id'>
                               <a class='card-link' data-toggle='collapse'  href='#menu$type_id' aria-expanded='false' aria-controls='menu$type_id'>$type_title<span class='collapsed'><i class='icon-plus-circle'></i></span><span class='expanded'><i class='icon-minus-circle'></i></span></a>
                               </div> 
                               <div id='menu$type_id' class='collapse'>
                               <div class='card-body'>
                                 <div class='row'>";
                                 $type_query = "SELECT * FROM events,event_type WHERE events.type_id=event_type.type_id";
                                 $run_query2 = mysqli_query($con,$type_query);
                                 if(mysqli_num_rows($run_query2) > 0){
                       
                                 while($row = mysqli_fetch_array($run_query2)){
                                   $newtype_id    = $row['type_id'];
                                   $event_id   = $row['event_id'];
                                   $event_title = $row['event_title'];
                                   $type_title = $row['type_title'];
                                   $event_price = $row['event_price'];
                                   $img_link = $row['img_link'];
                                  
                                   if($newtype_id==$type_id){
                    
                                   echo "
                               
                                   
                                       
                                   <div class='col-md-6 col-lg-3 ftco-animate'>
                                   <div class='destination'>
                                     <a href='#' class='img img-2 d-flex justify-content-center align-items-center' style='background-image: url(./images/$img_link);'>
                                       <div class='d-flex justify-content-center align-items-center'>
                                         
                                       </div>
                                     </a>
                                     <div class='text p-3'>
                                       <h3><a href='#'>$event_title</a></h3>
                                       <p class='price' style='font-weight: 400;font-size: 18px;color: #2f89fc;'>
                                         $event_price
                                         <span>RS</span>
                                       </p>
                                       <p>Far far away, behind the word mountains, far from the countries</p>
                                       <hr>
                                       <p class='bottom-area d-flex'>
                                         <span><i class='icon-map-o'></i> Puneeth</span> 
                                         <span class='ml-auto'><a href='register.php?event_id=$event_id'>Book</a></span>
                                       </p>
                                     </div>
                                   </div>
                                 </div>";
                                   }
                    
                                 }
                                 }
                                 
                              echo"  
                              </div>
                               </div>
                             </div>
                             </div>
                             ";
                    
                    
                        }
                        
                        
                      }
                      ?>
                    
                  </div>           
    					</div>
				    </div>
    			</div>
    		</div>
    	</div>
    </section>
    
    

    

    


   

    <section class="ftco-section testimony-section bg-dark">
      <div class="container" style="color:white;">
        <div class="row justify-content-start">
          <div class="col-md-5 heading-section ftco-animate">
          	<span class="subheading">Best Directory Website</span>
            <h2 class="mb-4 pb-3"><strong>Why</strong> Choose Us?</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life.</p>
            <p><a href="#" class="btn btn-primary btn-outline-primary mt-4 px-4 py-3">Read more</a></p>
          </div>
					<div class="col-md-1"></div>
          <div class="col-md-6 heading-section ftco-animate">
          	<span class="subheading">Testimony</span>
            <h2 class="mb-4 pb-3"><strong>Our</strong> Faculty</h2>
          	<div class="row ftco-animate">
		          <div class="col-md-12">
		            <div class="carousel-testimony owl-carousel">
		              <div class="item">
		                <div class="testimony-wrap d-flex">
		                  <div class="user-img mb-5" style="background-image: url('images/20.jpeg')">
		                    <span class="quote d-flex align-items-center justify-content-center">
                        
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text ml-md-4" style="color:black;">
		                    <p class="mb-5">Dr .R.Balakrishna is currently working as a Professor & Principal, Dept. of Computer Science and Engineering since 2010. His research and professional career spans about 15 years of Teaching & research, 1 Year Industrial Experience at TCS. His expertise is primarily in the domains of Ad hoc Networks, Mobile Computing, Networks, and Distributed OS.</p>
		                    <p class="name">Dr. R. Balakrishna</p>
		                    <span class="position">Professor and Principal</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap d-flex">
		                  <div class="user-img mb-5" style="background-image: url('images/14.jpeg')">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text ml-md-4" style="color:black;">
		                    <p class="mb-5">S. Usha, is working as a professor and head , CSE, RRCE. Graduated from Manonmanium Sundaranar University, in Computer Science and Engineering during the year 1998. She obtained her Master degree in Computer Science and Engineering and PhD degree from sathyabama university in the area of Mobile Ad Hoc Networks in the year 2013. She has 54 publications in International and National conferences, 22 publication in national journal and international journals in the area of Mobile Ad hoc Networks and wireless security.</p>
		                    <p class="name">Dr. Usha S</p>
		                    <span class="position">Professor & HOD</span>
		                  </div>
		                </div>
		              </div>
		            </div>
		          </div>
		        </div>
          </div>
        </div>
      </div>
    </section>

    

    
		
		

    
  
                                    