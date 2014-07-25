<html>
	<head>
		<title>NE Inspection Services</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  		<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">

		<link href="style.css" type="text/css" rel="stylesheet">
	</head>

	<body>


			<div id="neisHeader" class="nav navbar-default">
				<div class="container">
					<div class="row">
						<div class="col-md-5">
							<img src="img/neiLogo.png" class="img-responsive">
						</div>
						<div class="col-md-7">
							<div class="col-md-4 headerInfo">
								<span class="glyphicon glyphicon-envelope"></span>		
								<p><strong>Email</strong><br />insp@gmail.com</p>
							</div>
							<div class="col-md-4 headerInfo">
								<span class="glyphicon glyphicon-earphone"></span>
								<p><strong>Phone</strong><br />800-647-2744</p>
							</div>
							<div class="col-md-4 headerInfo">
								<div class="glyphicon glyphicon-map-marker"></div>
								<p><strong>Address</strong><br />44 Main Street<br />Peterborough, NH 03458</p>						
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="mainContent">
				<div class="container">
				
							<div class="panel mainPanel">
								<div class="panel-body">
									<div class="row">
										<div class="col-sm-9">
											<h2>NORTHEAST INSPECTION SERVICES, INC.</h2>
											<p><strong>Northeast Inspection services, Incorporated has been providing clients with thorough, comprehensive inspections of residential and commercial properties for over twenty years.</strong></p>
					                 		<p>Founded in 1987 by Geoff Aldrich, a former builder and general contractor, who specialzed in high quality new construction and the renovation and restoration of early New England buildings, Northeast Inspection Services was created with the goal of providing a complete analysis of a building's present condition, along with information regarding maintenance, preventative care measures and general cost estimates, from a builder's perspective.	
					                		</p>
					                	</div>
					                	<div class="col-sm-3">
					                		<img src="img/profile.JPG"  class="profilePic img-thumbnail img-responsive">
					                	</div>
					                </div>
			                		<button type="button" class="btn btn-success btn-lg center-block" data-toggle="modal" data-target="#contactModal">Contact Us</button>
			                 		
			                	</div>
		                	</div>
						
					
							<div class="panel services">
								<div class="panel-body">
									<div class="row">
										<div class="col-sm-5">
											<h2 class="text-center">Our Services</h2>
											<p>We are a full service company providing detailed inspections and reports on:</p>
									        <ul>
									            <li>Single family Homes</li>
									            <li>Multi-Family Buildings</li>
									            <li>Condominiums</li>
									            <li>Barns and Outbuildings</li>
									            <li>Commercial Buildings</li>
									        </ul>
									        <p>In addition, we offer the following services:</p>
									        <ul>
									            <li>Pre-Listing Inspections</li>
									            <li>Partial Inspections</li>
									            <li>Radon Air Testing</li>
									            <li>Arsenic in Water</li>
									            <li>Water quality tests including special requirements for VA, FHA, and RD loans.</li>
									            <li>Lead pain sampling</li>
									            <li>Mold and Mildew sampling</li>
									            <li>Expert witness court testimony for cases involving litigation.</li>
									            <li>Consultation about inspection findings.
									        </ul>
									    </div>
									    <div class="col-sm-7">
											<img src="img/house.jpg" class="img-responsive" >
										</div>
									</div>
								</div>
								<div class="panel-footer">
									<h3>What to expect</h3>								
									<p>Inspections normally take from 2 1/2 to 3+ hours, depending on the size and complexity of the building.
							        
							        Clients are encouraged to attend the inspection if possible, as it can be a valuable learning experience.
							        
							        Questions regarding various approaches to repairs, cost estimates and advice, regarding future additions or renovations are all part of the inspection process.
							        </p>										
								</div>
							</div>
							<div class="panel panel-success">
								<div class="panel-body">
									<p class="text-center"><strong>We offer scheduling Monday through Saturday.<br />
										Full information regarding scheduling times and fees
										<br />is available by calling our staffed, toll free line at:<br />
										1-800-647-2744</strong></p>
								</div>
							</div>


				</div>

				<div id="footer" class="nav navbar-inverse">
					<div class="container">
						<p>Copyright <span class="glyphicon glyphicon-copyright-mark"></span> 2014 <a href="#">NORTHEAST INSPECTION SERVICE, INC</a></p>
					</div>
				</div>
			</div>






				<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labellenby="contactModallabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				        <h4 class="modal-title">Contact Us</h4>
				      </div>
				      <div class="modal-body">

				        <form name="contactform" method="post" action="verify.php" class="form-horizontal" role="form">
							<div class="form-group">
								<label for="inputName" class="col-lg-2 control-label">Name</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="inputName" name="inputName" placeholder="Your Name">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-2 control-label">Email</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="inputEmail" name="inputEmail" placeholder="Your Email">
								</div>
							</div>
							<div class="form-group">
								<label for="inputSubject" class="col-lg-2 control-label">Subject</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="inputSubject" name="inputSubject" placeholder="Subject Message">
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword1" class="col-lg-2 control-label">Message</label>
								<div class="col-lg-10">
									<textarea class="form-control" rows="4" id="inputMessage" name="inputMessage" placeholder="Your message..."></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">
									<?php
	          							require_once('recaptchalib.php');
	          							$publickey = "6LeaR-8SAAAAAJLaUFa9laC6nHPcoORDO7ZstT33 "; // you got this from the signup page
	          							echo recaptcha_get_html($publickey);
        							?>
									<button type="submit" class="btn btn-default">
										Send Message
									</button>
								</div>
							</div>
						</form>

				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				      </div>
				    </div><!-- /.modal-content -->
				  </div><!-- /.modal-dialog -->
				</div><!-- /.modal -->










  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
  <script src="js/bootstrap.min.js"></script>


	</body>
</html>