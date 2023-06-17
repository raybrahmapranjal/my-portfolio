
<div id="contact">
		<div class="title">
			<div class="container">
			<section class="cbp-so-section">
				<div class="sixteen columns cbp-so-side cbp-so-side-left">
					<h1><strong><span>Contact Me</span></strong></h1>
					<h1><strong><span> 
					<?php 
                            if (isset($_SESSION['messageSuccess'])) {
                                echo $_SESSION['messageSuccess']."<br>";
                                
        
                            } 
                            if (isset($_SESSION['messageErr'])) {
                                echo $_SESSION['messageErr']."<br>";
                                
                            }
                            
        
                    ?>
                    </span></strong></h1>
					
				</div>
				
			</section>
			</div>
		</div>
		<div class="background-pat">
			<div class="container">
			<section class="cbp-so-section">
				<div class="sixteen columns cbp-so-side cbp-so-side-right">
					<form name="ajax-form" id="ajax-form" action="../contact.php" method="post">
					
						<label for="name">Name: * 
							<span class="error" id="err-name">please enter name</span>
						</label>
						<input name="name" id="name" type="text" required />
						<label for="email">E-Mail: * 
							<span class="error" id="err-email">please enter e-mail</span>
							<span class="error" id="err-emailvld">e-mail is not a valid format</span>
						</label>
						<input name="email" id="email" type="text" required />
						<label for="message">Message:</label>
						<textarea name="message" id="message" required></textarea>
						<div class="containerButton">
							<a href="" ><button class="btn" name="submit" type="submit">submit</button></a>
							 <!--<button type="submit" class="scroll btn" name="submit" >submit</button>-->
						</div>
						<div class="error" id="err-form">There was a problem validating the form please check!</div>
						<div class="error" id="err-timedout">The connection to the server timed out!</div>
						<div class="error" id="err-state"></div>
					</form>
					<div id="ajaxsuccess">Successfully sent!!</div>	
				</div>
			</section>	
			</div>
		</div>
		<div class="background-pat1-last">	
			<div class="contact-info">
				<div class="container">
					<section class="cbp-so-section">
						<div class="one-third column cbp-so-side cbp-so-side-left1">
							<h5>Copyright</h5>
						<p style="font-family: 'Montserrat', sans-serif;">© 2023 pranjal12roy@gmail.com</p>
				
						</div>
						<div class="one-third column cbp-so-side cbp-so-side-left">
							<h5>Phone:</h5>
							<p><a href="https://wa.me/8134000271" ><i class="fab fa-whatsapp"></i></a> or (+91 8134000271)</p>

							
						</div>
						<div class="one-third column cbp-so-side cbp-so-side-right">
							<h5>Email:</h5>
							<p style="font-family: 'Montserrat', sans-serif;"> <a href="mailto:pranjal12roy@gmail.com" title="mailto:support@example.com">pranjal12roy@gmail.com</a></p>
							
						</div>
					</section>
				</div>
			</div>
		</div>
	</div>
	
	
	
	
	
	<div id="copy">
		<div class="container">
			<section class="cbp-so-section">
				<div class="sixteen columns cbp-so-side cbp-so-side-left">
								<ul class="link">
						         	<a href="https://www.linkedin.com/in/pranjal-brahma-ray-1a211926b/"> <li><i class="fab fa-linkedin-in"></i></li></a>
							        <a href="https://wa.me/8134000271" ><li><i class="fab fa-whatsapp"></i></li></a>
							        <a href="https://github.com/raybrahmapranjal"><li><i class="fab fa-github"></i></li></a>
						    	</ul>
				</div>
				
			</section>	
		</div>	
	</div>		
	
	
</div>		