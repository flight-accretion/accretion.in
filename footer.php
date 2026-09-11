<section style="background:#2b53a9;">
	<div class="container">
    	<div class="row">
        	<!--<div class="col-md-4">
            	<img src="images/accresation.png" class="img-responsive" style="padding:50px 0px;">
            </div>-->

            <div class="col-md-4 col-sm-12 pt-4">

                <div class="text-light pt-4">INDORE OFFICE</div>
                <div class="foot" ><i class="fa fa-map-marker"></i> &nbsp;306 Maloo 01 Scheme 94 Near Velocity Multiplex, 26, Service Rd, Tapeshwari Bagh Colony, Indore, Madhya Pradesh 452010</div>
            
				<div class="foot">
			  <i class="fa fa-phone"></i> &nbsp;
			  <a href="tel:+917314006026" style="color:#fff; text-decoration:none;">
			    +91-731-4006026
			  </a>
			</div>
			
			<div class="foot">
			  <i class="fa fa-envelope"></i> &nbsp;
			  <a href="mailto:info@accretion.in"
			     style="color:#fff !important; text-decoration:none !important; pointer-events:auto !important; position:relative; z-index:9999;">
			    info@accretion.in
			  </a>
			</div>
            </div>
            <div class="col-md-4 col-sm-12 pt-4">
            	
            </div>
            <div class="col-md-4 col-sm-12 col-lg-4 pt-4">

    <!-- MESSAGE DISPLAY -->
    <div id="footerMsg"
         style="color:#fff; font-weight:600; margin-bottom:10px;"></div>

    <form id="footerForm" class="pt-4">

        <input type="email"
               name="email"
               placeholder="Your Email"
               class="in-area"
               required
               style="width:100%; padding-right:120px;">

        <textarea name="msg"
                  placeholder="Type Your Message"
                  required
                  style="width:100%; margin-top:10px; padding:10px;"></textarea>

        <input type="submit"
               value="SUBMIT"
               class="in-area subbutton">

    </form>
</div>
						<div class="col-lg-12 copyright-text">
			        <p>CopyRight © ACCRETION All Rights Reserved</p>
			        <!-- <p><a href="https://www.cloudzappy.com">Website design</a> by CLOUD ZAPPY</p> -->
			      </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="js/bootstrap.bundle.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var footerForm = document.getElementById('footerForm');
    var footerMsg = document.getElementById('footerMsg');
    if (!footerForm || !footerMsg) return;

    footerForm.addEventListener('submit', function(e) {
        e.preventDefault();

        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'action.php', true);
        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

        xhr.onload = function() {
            if (xhr.status === 200 && xhr.responseText.trim() === 'success') {
                footerMsg.textContent = '✅ Form submitted successfully!';
                footerForm.reset();
            } else {
                footerMsg.textContent = '❌ Failed to send message. Try again.';
            }
        };

        xhr.onerror = function() {
            footerMsg.textContent = '❌ Server error. Try again.';
        };

        xhr.send(new FormData(footerForm));
    });

    var carouselEl = document.getElementById('demo');
    if (carouselEl && (window.jQuery || window.$)) {
        var jq = window.jQuery || window.$;
        jq(carouselEl).carousel({ interval: 5000, pause: 'hover' });
    }

});
</script>

</body>
</html>
