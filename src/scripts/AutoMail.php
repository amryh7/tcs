
<?php

function auto_mail($quote_array){
				// multiple recipients
	$to = 'amryh7@gmail.com';
	$replyto = 'amryh7@gmail.com';
	//$to = 'manavm@visionwebsoft.com'; // note the comma for multiple recipients
				// email for quotes taken from current quote form...
				// http://thecomponentstore.net/quotes.php
				// view source->line 338: <a href="mailto:sales@thecomponentstore.com">sales@thecomponentstore.com</a>
	//$to =  'sales@thecomponentstore.com' . ', ';// note the comma for multiple recipients
				// subject
	$subject = 'Request for Quote: ' . $quote_array['fName'] . ' at ' . $quote_array['company'];

				// message
	$message = '
		<html>
			<head>			
				<title>Request for Quote</title>				
			</head>
			<body>
				<div>
					<div style="float:left; margin-right: 50px;">
						<!--Peronal Info-->
						<h1>Personal Info</h1>
						<div class="form-group">
							<div class="col-xs-6">
							  <h4 style="display: inline">First Name: </h4>
							  '. $quote_array['fName'] .'
							</div>
						</div>						
						<div class="form-group">
							<div class="col-xs-6">
							  <h4 style="display: inline">Last Name: </h4>
							  '. $quote_array['lName'] .'
							</div>
						</div>						
						<div class="form-group">
							<div class="col-xs-6">
							  <h4 style="display: inline">Email: </h4>
							  '. $quote_array['email'] .'
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-6">
							  <h4 style="display: inline">Phone: </h4>
							  '. $quote_array['phone'] .'
							</div>
						</div>
					</div>
					<div style="float:left;">
						<!--Company Info-->
						<h1>Company Info</h1>						
						<div class="form-group">
							<div class="col-xs-6">
							  <h4 style="display: inline">Company Name: </h4>
							  '. $quote_array['company'] .'
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-6">
							  <h4 style="display: inline">Address: </h4>
							  '. $quote_array['address'] .'
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-6">
							  <h4 style="display: inline">City: </h4>
							  '. $quote_array['city'] .'
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-2">
							  <h4 style="display: inline">State: </h4>
							  '. $quote_array['state'] .'
						</div>
						<div class="form-group">
							<div class="col-xs-4">
							  <h4 style="display: inline">Zip: </h4>
							  '. $quote_array['zip'] .'
							</div>
						</div>
					</div>
				</div>
			<br style="clear:both">
			<hr>
			';
			
	switch ($quote_array['form']) {
		case "magnetics":
					// testing switch for magnetics
		$message .= '
              <h1>Magnetics Info</h1>
              <div class="form-group">
                <div class="col-xs-2">
                  <h4 style="display: inline">Quantity: </h4>
					  '. $quote_array['quantity'] .'
                </div>
              </div>
              <div class="form-group">
                <div class="col-xs-4">
                  <h4 style="display: inline">Target Price: </h4>
					  '. $quote_array['price'] . '
                </div>
              </div>
              <div class="form-group">
                <div class="col-xs-6">
                  <h4 style="display: inline">Application: </h4>
					  '. $quote_array['application'] .'
				</div>
              </div>
              <div class="form-group">
                <div class="col-xs-3">
                  <h4 style="display: inline">Date Required: </h4>
					  '. $quote_array['date'] .'
                </div>
              </div>
              <div class="form-group">
                <div class="col-xs-3">
                  <h4 style="display: inline">Upload An Attachment: </h4>
					  ';
					  if($quote_array['file']){
							$message .= $quote_array['file'];
					  } else {
							$message .= "No File Attached";
					  };
		$message .= '</div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-xs-6">
                  <h4 style="display: inline">Comments/Special Instruction: </h4>
					  '. $quote_array['comments'] .'
                </div>
              </div>';					
			break;
		case "pcbs":
					// testing switch for pcbs
		$message .= '
				<!--PCB Info-->
				<h1>PCB Info</h1>
                <div class="form-group">
                  <div class="col-xs-3">
                    <h4 style="display: inline">Part Number: </h4>
					  '. $quote_array['PCBpartNo'] .'
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-xs-3">
                    <h4 style="display: inline">Rev Number: </h4>
					  '. $quote_array['PCBrevNo'] .'
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-xs-3">
                    <h4 style="display: inline">Material: </h4>
					  '. $quote_array['PCBmaterial'] .'
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-xs-3">
                    <h4 style="display: inline">Board Dimensions: </h4>
					  '. $quote_array['PCBboardDim'] .'
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-xs-3">
                    <h4 style="display: inline">Layer Count: </h4>
					  '. $quote_array['PCBlayerCount'] .'
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-xs-3">
                    <h4 style="display: inline">Copper Weight: </h4>
					  '. $quote_array['PCBcopperWeight'] .'
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-xs-3">
                    <h4 style="display: inline">Overall Board Thickness: </h4>
					  '. $quote_array['PCBboardThickness'] .'
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-xs-3">
                    <h4 style="display: inline">Min Hole Size: </h4>
					  '. $quote_array['PCBminHoleSize'] .'
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-xs-3">
                    <h4 style="display: inline">Min Line Width: </h4>
					  '. $quote_array['PCBminLineWidth'] .'
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-xs-3">
                    <h4 style="display: inline">Board Finish: </h4>
					  '. $quote_array['PCBboardFinish'] .'
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-xs-3">
                    <h4 style="display: inline">Soldermask: </h4>
					  '. $quote_array['PCBsolderMask'] .'
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-xs-3">
                    <h4 style="display: inline">PCB SilkScreen: </h4>
					  '. $quote_array['PCBsilkScreen'] .'
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-xs-2">
                    <h4 style="display: inline">Impedance Control? </h4>
					  '. $quote_array['impedanceControl'] .'
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-xs-2">
                    <h4 style="display: inline">Blind/Buried Vias? </h4>
					  '. $quote_array['BBvias'] .'
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-xs-2">
                    <h4 style="display: inline">Microvias? </h4>
					  '. $quote_array['microvias'] .'
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-xs-2">
                    <h4 style="display: inline">Single Units: </h4>
					  '. $quote_array['PCBsingleUnits'] .'
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-xs-2">
                    <h4 style="display: inline">Routing: </h4>
					  '. $quote_array['PCBrouting'] .'
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-xs-2">
                    <h4 style="display: inline">Array: </h4>
					  '. $quote_array['PCBarray'] .'
                  </div>
                </div>';
			break;
		case "stencils":
					// testing switch for stencils
		$message .= '
				<!--Stencil Info-->
				<h1>Stencil Info</h1>
                <div class="form-group">
                  <div class="col-xs-3">
                    <h4 style="display: inline">Date Needed By: </h4>
					  '. $quote_array['date'] .'
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-xs-3">
                    <h4 style="display: inline">Upload Stencil File: </h4>
					  ';
					  if($quote_array['file']){
							$message .= $quote_array['file'];
					  } else {
							$message .= "No File Attached";
					  };
		$message .= '</div>
                </div>

                <div class="form-group">
                  <div class="col-xs-2">
                    <h4 style="display: inline">Quantity: </h4>
					  '. $quote_array['quantity'] .'
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-xs-4">
                    <h4 style="display: inline">Comments/Special Instructions: </h4>
					  '. $quote_array['comments'] .'
                  </div>
                </div>';
			break;
		case "equipment":
					// testing switch for equipment
		$message .= '
			<!--Stencil Info-->
			<h1>Test Equipment Info</h1>
              <div class="form-group">
                <div class="col-xs-12">
                  <h4 style="display: inline">Details: </h4>
					  '. $quote_array['details'] .'
                </div>
              </div>

              <div class="form-group">
                <div class="col-xs-3">
                  <h4 style="display: inline">Quote Terms: </h4>
					  '. $quote_array['terms'] .'
                  </select>
                </div>
              </div>

              <div class="form-group">
                <div class="col-xs-3">
                  <h4 style="display: inline">Industry: </h4>
					  '. $quote_array['industry'] .'
                  </select>
                </div>
              </div>

             <div class="form-group">
                <div class="col-xs-3">
                  <h4 style="display: inline">Upload An Attachment: </h4>
					  ';
					  if($quote_array['file']){
							$message .= $quote_array['file'];
					  } else {
							$message .= "No File Attached";
					  };
		$message .= '</div>
                </div>
              </div>';
	};
		
	$message .= '
			</body>
		</html>';
		
	// Sending mail
	// if no file attachment - send message only
	if($quote_array['file'] == "none"){
		$hash = md5(date('r', time()));

		$header = 'From: Request for Quote <The_Component_Store@TCS.com>' . "\r\n";
		$header .= "Reply-To: ".$replyto."\r\n";
					// To send HTML mail, the Content-type header must be set
		$header .= "MIME-Version: 1.0\r\n";
					// Additional headers
		$header .= "Content-Type: multipart/mixed; boundary=\"".$hash."\"\r\n";
		$header .= "--".$hash."\r\n";
		$header .= "Content-type:text/html; charset=iso-8859-1\r\n";

		return mail($to, $subject, $message, $header);
		
	// if file attachment - send message only
	// with this 'else' you can add code to make testing easier
	// !!! as of now this 'else' does the same as the if with no attachment
	// so it just sends an email with no attachment, even if the client attaches an email
	// this is not a solution, just a fix to getting all the email though
	} else {
		$hash = md5(date('r', time()));

		$header = 'From: Request for Quote <The_Component_Store@TCS.com>' . "\r\n";
		$header .= "Reply-To: ".$replyto."\r\n";
					// To send HTML mail, the Content-type header must be set
		$header .= "MIME-Version: 1.0\r\n";
					// Additional headers
		$header .= "Content-Type: multipart/mixed; boundary=\"".$hash."\"\r\n";
		$header .= "--".$hash."\r\n";
		$header .= "Content-type:text/html; charset=iso-8859-1\r\n";
		
		return mail($to, $subject, $message, $header);
	}
};
?>

