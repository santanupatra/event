<section class="home-banner">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-10 ml-auto mr-auto text-center">
					
					
					<div class="home-search rounded">
						<form method="post" action="<?php echo $this->Url->build(["controller" => "services","action" => "result"]);?>">
						<input type="hidden" name="lat" id="lat" value="">
						<input type="hidden" name="long" id="long" value="">
						<div class="input-group">
							<input type="text" class="form-control venue-location" placeholder="Venue location" name="location" id="autocomplete">
							<span class="icon"><i class="ion-location"></i></span>
							<input type="text" class="form-control venue-name" placeholder="Venue name..." name="title">
						<div class="input-group-prepend">
							<button class="btn btn-primary" type="submit"><i class="ion-search"></i> Search</button>
						</div>						
						</div>
						</form>
					</div>
					<p class="mt-4 mb-0"><img src="<?php echo $this->request->webroot;?>images/banner-logo.png" alt="" class="img-fluid"></p>
					<h1 class="text-uppercase mt-4">find your Nearest venue</h1>
					<h6 class="mb-4">The easiest way to find and book your mid to long-term venue</h6>
				</div>
			</div>
		</div>
	</section>
	
	<section class="how-it text-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<h1 class="mb-5">How does it works</h1>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 mb-3">
					<div class="how-wrap pl-2 pr-2">
						<div class="how-image-holder"><img src="<?php echo $this->request->webroot;?>images/how-1.png" alt=""></div>
						<h5 class="mb-3">Look for Enchanting Nightlife</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labor dolore magna aliqua</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 mb-3">
					<div class="how-wrap pl-2 pr-2">
						<div class="how-image-holder"><img src="<?php echo $this->request->webroot;?>images/how-2.png" alt=""></div>
						<h5 class="mb-3">Book Suitable Venue for You</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labor dolore magna aliqua</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 mb-3">
					<div class="how-wrap pl-2 pr-2">
						<div class="how-image-holder"><img src="<?php echo $this->request->webroot;?>images/how-3.png" alt=""></div>
						<h5 class="mb-3">Easy Pay & Enjoy Crazy</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labor dolore magna aliqua</p>
					</div>
				</div>
			</div>
		</div>
    </section>
    
    <section class="best-venue">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-12 col-md-12">
	    			<h1 class="text-center">Best Venues Near You</h1>
	    			<h5 class="text-center mb-5">Explore some of the best tips from around the world from our partners and friends.</h5>
	    		</div>
	    		<div class="col-lg-12 col-md-12 col-sm-12">
	    			<ul class="list-unstyled">
						<li>
							<div class="venue-image">
								<img src="<?php echo $this->request->webroot;?>images/venue-1.jpg" alt="">
								<div class="price">From: $69.00</div>
							</div>
							<article>
								<h4 class="text-primary mb-1">Venue name goes here</h4>
								<p class="rating mb-1"><i class="ion-star"></i> <i class="ion-star"></i> <i class="ion-star"></i> <i class="ion-star"></i> <i class="ion-star"></i> (3.5)</p>
								<p class="mb-0"><i class="ion-location"></i> California, CA, USA</p>
							</article>
						</li>
						<li>
							<div class="venue-image">
								<img src="<?php echo $this->request->webroot;?>images/venue-2.jpg" alt="">
								<div class="price">From: $69.00</div>
							</div>
							<article>
								<h4 class="text-primary mb-1">Venue name goes here</h4>
								<p class="rating mb-1"><i class="ion-star"></i> <i class="ion-star"></i> <i class="ion-star"></i> <i class="ion-star"></i> <i class="ion-star"></i> (3.5)</p>
								<p class="mb-0"><i class="ion-location"></i> California, CA, USA</p>
							</article>
						</li>
						<li>
							<div class="venue-image">
								<img src="<?php echo $this->request->webroot;?>images/venue-3.jpg" alt="">
								<div class="price">From: $69.00</div>
							</div>
							<article>
								<h4 class="text-primary mb-1">Venue name goes here</h4>
								<p class="rating mb-1"><i class="ion-star"></i> <i class="ion-star"></i> <i class="ion-star"></i> <i class="ion-star"></i> <i class="ion-star"></i> (3.5)</p>
								<p class="mb-0"><i class="ion-location"></i> California, CA, USA</p>
							</article>
						</li>
						<li>
							<div class="venue-image">
								<img src="<?php echo $this->request->webroot;?>images/venue-4.jpg" alt="">
								<div class="price">From: $69.00</div>
							</div>
							<article>
								<h4 class="text-primary mb-1">Venue name goes here</h4>
								<p class="rating mb-1"><i class="ion-star"></i> <i class="ion-star"></i> <i class="ion-star"></i> <i class="ion-star"></i> <i class="ion-star"></i> (3.5)</p>
								<p class="mb-0"><i class="ion-location"></i> California, CA, USA</p>
							</article>
						</li>
						<li>
							<div class="venue-image">
								<img src="<?php echo $this->request->webroot;?>images/venue-4.jpg" alt="">
								<div class="price">From: $69.00</div>
							</div>
							<article>
								<h4 class="text-primary mb-1">Venue name goes here</h4>
								<p class="rating mb-1"><i class="ion-star"></i> <i class="ion-star"></i> <i class="ion-star"></i> <i class="ion-star"></i> <i class="ion-star"></i> (3.5)</p>
								<p class="mb-0"><i class="ion-location"></i> California, CA, USA</p>
							</article>
						</li>
						<li>
							<div class="venue-image">
								<img src="<?php echo $this->request->webroot;?>images/venue-3.jpg" alt="">
								<div class="price">From: $69.00</div>
							</div>
							<article>
								<h4 class="text-primary mb-1">Venue name goes here</h4>
								<p class="rating mb-1"><i class="ion-star"></i> <i class="ion-star"></i> <i class="ion-star"></i> <i class="ion-star"></i> <i class="ion-star"></i> (3.5)</p>
								<p class="mb-0"><i class="ion-location"></i> California, CA, USA</p>
							</article>
						</li>
						<li>
							<div class="venue-image">
								<img src="<?php echo $this->request->webroot;?>images/venue-2.jpg" alt="">
								<div class="price">From: $69.00</div>
							</div>
							<article>
								<h4 class="text-primary mb-1">Venue name goes here</h4>
								<p class="rating mb-1"><i class="ion-star"></i> <i class="ion-star"></i> <i class="ion-star"></i> <i class="ion-star"></i> <i class="ion-star"></i> (3.5)</p>
								<p class="mb-0"><i class="ion-location"></i> California, CA, USA</p>
							</article>
						</li>
						<li>
							<div class="venue-image">
								<img src="<?php echo $this->request->webroot;?>images/venue-1.jpg" alt="">
								<div class="price">From: $69.00</div>
							</div>
							<article>
								<h4 class="text-primary mb-1">Venue name goes here</h4>
								<p class="rating mb-1"><i class="ion-star"></i> <i class="ion-star"></i> <i class="ion-star"></i> <i class="ion-star"></i> <i class="ion-star"></i> (3.5)</p>
								<p class="mb-0"><i class="ion-location"></i> California, CA, USA</p>
							</article>
						</li>
						<li>
							<div class="venue-image">
								<img src="<?php echo $this->request->webroot;?>images/venue-5.jpg" alt="">
								<div class="price">From: $69.00</div>
							</div>
							<article>
								<h4 class="text-primary mb-1">Venue name goes here</h4>
								<p class="rating mb-1"><i class="ion-star"></i> <i class="ion-star"></i> <i class="ion-star"></i> <i class="ion-star"></i> <i class="ion-star"></i> (3.5)</p>
								<p class="mb-0"><i class="ion-location"></i> California, CA, USA</p>
							</article>
						</li>
						<li>
							<div class="venue-image">
								<img src="<?php echo $this->request->webroot;?>images/venue-6.jpg" alt="">
								<div class="price">From: $69.00</div>
							</div>
							<article>
								<h4 class="text-primary mb-1">Venue name goes here</h4>
								<p class="rating mb-1"><i class="ion-star"></i> <i class="ion-star"></i> <i class="ion-star"></i> <i class="ion-star"></i> <i class="ion-star"></i> (3.5)</p>
								<p class="mb-0"><i class="ion-location"></i> California, CA, USA</p>
							</article>
						</li>
						<li>
							<div class="venue-image">
								<img src="<?php echo $this->request->webroot;?>images/venue-7.jpg" alt="">
								<div class="price">From: $69.00</div>
							</div>
							<article>
								<h4 class="text-primary mb-1">Venue name goes here</h4>
								<p class="rating mb-1"><i class="ion-star"></i> <i class="ion-star"></i> <i class="ion-star"></i> <i class="ion-star"></i> <i class="ion-star"></i> (3.5)</p>
								<p class="mb-0"><i class="ion-location"></i> California, CA, USA</p>
							</article>
						</li>
						<li>
							<div class="venue-image">
								<img src="<?php echo $this->request->webroot;?>images/venue-8.jpg" alt="">
								<div class="price">From: $69.00</div>
							</div>
							<article>
								<h4 class="text-primary mb-1">Venue name goes here</h4>
								<p class="rating mb-1"><i class="ion-star"></i> <i class="ion-star"></i> <i class="ion-star"></i> <i class="ion-star"></i> <i class="ion-star"></i> (3.5)</p>
								<p class="mb-0"><i class="ion-location"></i> California, CA, USA</p>
							</article>
						</li>
					</ul>
	    		</div>
	    			
	    		
    		</div>
    	</div>
    </section>

	<section class="testimonial text-center">
		<div class="container">
	    	<div class="row">
	    		<div class="col-lg-8 col-md-9 ml-auto mr-auto">
	    			<h2 class="mb-4">What our client say</h2>
					<ul class="bxslider list-unstyled">
						<li>
							<p class="text-center quote"><img src="<?php echo $this->request->webroot;?>images/quote.png" alt=""></p>
							<h4 class="mb-5">Loved it! I move around a lot and finding a room is always a lot of hassle. This time it was very relaxed. Great team, very friendly and helpful.</h4>
							<div class="user-image mb-3"><img src="<?php echo $this->request->webroot;?>images/user.jpg" alt=""></div>
							<p class="text-uppercase">John Doe</p>
						</li>
						<li>
							<p class="text-center quote"><img src="<?php echo $this->request->webroot;?>images/quote.png" alt=""></p>
							<h4 class="mb-5">Loved it! I move around a lot and finding a room is always a lot of hassle. This time it was very relaxed. Great team, very friendly and helpful.</h4>
							<div class="user-image mb-3"><img src="<?php echo $this->request->webroot;?>images/user.jpg" alt=""></div>
							<p class="text-uppercase">John Doe</p>
						</li>
						<li>
							<p class="text-center quote"><img src="<?php echo $this->request->webroot;?>images/quote.png" alt=""></p>
							<h4 class="mb-5">Loved it! I move around a lot and finding a room is always a lot of hassle. This time it was very relaxed. Great team, very friendly and helpful.</h4>
							<div class="user-image mb-3"><img src="<?php echo $this->request->webroot;?>images/user.jpg" alt=""></div>
							<p class="text-uppercase">John Doe</p>
						</li>
					</ul>
	    		</div>
	    	</div>
    	</div>
    </section>
   <script>     
      var placeSearch, autocomplete;   

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});   

             google.maps.event.addListener(autocomplete, 'place_changed', function() {
          var place = autocomplete.getPlace();
          var lat = place.geometry.location.lat();
          var lng = place.geometry.location.lng();
          $('#lat').val(lat);
          $('#long').val(lng);
        
        });     
      }

     
      function geolocate() { 
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) { 
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>

 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQ9hl89w8uiMND1-cnmkTVnqGh37TDvvk&libraries=places&callback=initAutocomplete"
        async defer></script>