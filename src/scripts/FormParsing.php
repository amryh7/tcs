<?php
		// creating array of chars to strip from input is present
		// used in str_replace()
$stripChrs = array("<", ">", "!", "$", "%", "*", "{", "}", "|");

		//form type
$form =  str_replace($stripChrs, "", $_REQUEST['form-type']);

		//Personal Info
	$stripfName = str_replace($stripChrs, "", $_REQUEST['fName']);// passed to next line
$fName =  ucfirst(strtolower($stripfName));// capitalizing first letter after lowercasing string
	$striplName = str_replace($stripChrs, "", $_REQUEST['lName']);// passed to next line
$lName =  ucfirst(strtolower($striplName));// capitalizing first letter after lowercasing string
$email =  str_replace($stripChrs, "", $_REQUEST['eAddy']);
$phone =  str_replace($stripChrs, "", $_REQUEST['fone']);

		//Company Info
	$stripcName = str_replace($stripChrs, "", $_REQUEST['cName']);// passed to next line
$company =  ucfirst(strtolower($stripcName));// capitalizing first letter after lowercasing string
$address =  str_replace($stripChrs, "", $_REQUEST['address']);
	$stripcity = str_replace($stripChrs, "", $_REQUEST['city']);// passed to next line
$city =  ucwords (strtolower($stripcity));// capitalizing first letter of each word after lowercasing string
$state =  str_replace($stripChrs, "", $_REQUEST['st']);
$zip =  str_replace($stripChrs, "", $_REQUEST['zip']);

		// this array is used to hold the new values that will be passed to auto_mail()
		// currently the values are the same as the $_REQUEST array but as data validation is added
		// the values will change; this step is preperation for those added features...
		// ... this makes the data validation/formatting separate from the mailing
$quote_array = [
	"form" => $form,
	"fName" =>  $fName,
	"lName" =>  $lName,
	"email" =>  $email,
	"phone" =>  $phone,
	"company" =>  $company,
	"address" =>  $address,
	"city" =>  $city,
	"state" =>  $state,
	"zip" =>  $zip,
	"file" => 'none'
];
		//echo '<script language="javascript">alert("' . $quote_array[email] . '")</script>'; // testing array

		// setting local currency to US
setlocale(LC_MONETARY, 'en_US');
	
switch ($form) {
    case "magnetics":
			//Magnetics Info
		if($_REQUEST['quantity']){
			$quantity =  str_replace($stripChrs, "", $_REQUEST['quantity']);
					$quote_array['quantity'] = $quantity;
			} else {
				$quantity = 'not given';
					$quote_array['quantity'] = $quantity;
			};
		if($_REQUEST['price']){
			$price = money_format('%.2n', str_replace($stripChrs, "", $_REQUEST['price']));// formatting string price as currency
					$quote_array['price'] = $price;
			} else {
				$price = 'not given';
					$quote_array['price'] = $price;
			};
		if($_REQUEST['application']){
			$application =  str_replace($stripChrs, "", $_REQUEST['application']);
					$quote_array['application'] = $application;
			} else {
				$application = 'not given';
					$quote_array['application'] = $application;
			};
		if($_REQUEST['date']){
			$date =  str_replace($stripChrs, "", $_REQUEST['date']);
					$quote_array['date'] = $date;
			} else {
				$date = 'not given';
					$quote_array['date'] = $date;
			};
		if($_REQUEST['file']){
			$file =  $_REQUEST['file'];
					$quote_array['file'] = $file;
			};
		if($_REQUEST['comments']){
			$comments =  str_replace($stripChrs, "", $_REQUEST['comments']);
					$quote_array['comments'] = $comments;
			} else {
				$comments = 'not given';
					$quote_array['comments'] = $comments;
			};
				
		require_once('AutoMail.php');
		auto_mail($quote_array);
		header("Location: ../get-a-quote/quote-submit.html");
        break;
    case "pcbs":
			//PCB Info
		if($_REQUEST['PCBpartNo']){
				$PCBpartNo =  str_replace($stripChrs, "", $_REQUEST['PCBpartNo']);
						$quote_array['PCBpartNo'] = $PCBpartNo;
			} else {
				$PCBpartNo = 'not given';
						$quote_array['PCBpartNo'] = $PCBpartNo;
			};
		if($_REQUEST['PCBrevNo']){
				$PCBrevNo =  str_replace($stripChrs, "", $_REQUEST['PCBrevNo']);
						$quote_array['PCBrevNo'] = $PCBrevNo;
			} else {
				$PCBrevNo = 'not given';
						$quote_array['PCBrevNo'] = $PCBrevNo;
			};
		if($_REQUEST['PCBmaterial']){
				$PCBmaterial =  str_replace($stripChrs, "", $_REQUEST['PCBmaterial']);
						$quote_array['PCBmaterial'] = $PCBmaterial;
			} else {
				$PCBmaterial = 'not given';
						$quote_array['PCBmaterial'] = $PCBmaterial;
			};
		if($_REQUEST['PCBboardDim']){
			$PCBboardDim =  str_replace($stripChrs, "", $_REQUEST['PCBboardDim']);
					$quote_array['PCBboardDim'] = $PCBboardDim;
			} else {
				$PCBboardDim = 'not given';
					$quote_array['PCBboardDim'] = $PCBboardDim;
			};
		if($_REQUEST['PCBlayerCount']){
			$PCBlayerCount =  str_replace($stripChrs, "", $_REQUEST['PCBlayerCount']);
					$quote_array['PCBlayerCount'] = $PCBlayerCount;
			} else {
				$PCBlayerCount = 'not given';
					$quote_array['PCBlayerCount'] = $PCBlayerCount;
			};
		if($_REQUEST['PCBcopperWeight']){
			$PCBcopperWeight =  str_replace($stripChrs, "", $_REQUEST['PCBcopperWeight']);
					$quote_array['PCBcopperWeight'] = $PCBcopperWeight;
			} else {
				$PCBcopperWeight = 'not given';
					$quote_array['PCBcopperWeight'] = $PCBcopperWeight;
			};
		if($_REQUEST['PCBboardThickness']){
			$PCBboardThickness =  str_replace($stripChrs, "", $_REQUEST['PCBboardThickness']);
					$quote_array['PCBboardThickness'] = $PCBboardThickness;
			} else {
				$PCBboardThickness = 'not given';
					$quote_array['PCBboardThickness'] = $PCBboardThickness;
			};
		if($_REQUEST['PCBminHoleSize']){
			$PCBminHoleSize =  str_replace($stripChrs, "", $_REQUEST['PCBminHoleSize']);
					$quote_array['PCBminHoleSize'] = $PCBminHoleSize;
			} else {
				$PCBminHoleSize = 'not given';
					$quote_array['PCBminHoleSize'] = $PCBminHoleSize;
			};
		if($_REQUEST['PCBminLineWidth']){
			$PCBminLineWidth =  str_replace($stripChrs, "", $_REQUEST['PCBminLineWidth']);
					$quote_array['PCBminLineWidth'] = $PCBminLineWidth;
			} else {
				$PCBminLineWidth = 'not given';
					$quote_array['PCBminLineWidth'] = $PCBminLineWidth;
			};
		if($_REQUEST['PCBboardFinish']){
			$PCBboardFinish =  str_replace($stripChrs, "", $_REQUEST['PCBboardFinish']);
					$quote_array['PCBboardFinish'] = $PCBboardFinish;
			} else {
				$PCBboardFinish = 'not given';
					$quote_array['PCBboardFinish'] = $PCBboardFinish;
			};
		if($_REQUEST['PCBsolderMask']){
			$PCBsolderMask =  str_replace($stripChrs, "", $_REQUEST['PCBsolderMask']);
					$quote_array['PCBsolderMask'] = $PCBsolderMask;
			} else {
				$PCBsolderMask = 'not given';
					$quote_array['PCBsolderMask'] = $PCBsolderMask;
			};
		if($_REQUEST['PCBsilkScreen']){
			$PCBsilkScreen =  str_replace($stripChrs, "", $_REQUEST['PCBsilkScreen']);
					$quote_array['PCBsilkScreen'] = $PCBsilkScreen;
			} else {
				$PCBsilkScreen = 'not given';
					$quote_array['PCBsilkScreen'] = $PCBsilkScreen;
			};
		if($_REQUEST['impedanceControl']){
			$impedanceControl =  str_replace($stripChrs, "", $_REQUEST['impedanceControl']);
					$quote_array['impedanceControl'] = $impedanceControl;
			} else {
				$impedanceControl = 'not given';
					$quote_array['impedanceControl'] = $impedanceControl;
			};
		if($_REQUEST['BBvias']){
			$BBvias =  str_replace($stripChrs, "", $_REQUEST['BBvias']);
					$quote_array['BBvias'] = $BBvias;
			} else {
				$BBvias = 'not given';
					$quote_array['BBvias'] = $BBvias;
			};
		if($_REQUEST['microvias']){
			$microvias =  str_replace($stripChrs, "", $_REQUEST['microvias']);
					$quote_array['microvias'] = $microvias;
			} else {
				$microvias = 'not given';
					$quote_array['microvias'] = $microvias;
			};
		if($_REQUEST['PCBsingleUnits']){
			$PCBsingleUnits =  str_replace($stripChrs, "", $_REQUEST['PCBsingleUnits']);
					$quote_array['PCBsingleUnits'] = $PCBsingleUnits;
			} else {
				$PCBsingleUnits = 'not given';
					$quote_array['PCBsingleUnits'] = $PCBsingleUnits;
			};
		if($_REQUEST['PCBrouting']){
			$PCBrouting =  str_replace($stripChrs, "", $_REQUEST['PCBrouting']);
					$quote_array['PCBrouting'] = $PCBrouting;
			} else {
				$PCBrouting = 'not given';
					$quote_array['PCBrouting'] = $PCBrouting;
			};
		if($_REQUEST['PCBarray']){
			$PCBarray =  str_replace($stripChrs, "", $_REQUEST['PCBarray']);
					$quote_array['PCBarray'] = $PCBarray;
			} else {
				$PCBarray = 'not given';
					$quote_array['PCBarray'] = $PCBarray;
			};
				
		require_once('AutoMail.php');
		$quote_array['file'] == 'none';
		auto_mail($quote_array);
		header("Location: ../get-a-quote/quote-submit.html");
        break;
    case "stencils":
			//Stencil Info
		if($_REQUEST['quantity']){
				$quantity =  str_replace($stripChrs, "", $_REQUEST['quantity']);
						$quote_array[quantity] = $quantity;
			} else {
				$quantity = 'not given';
			};
		if($_REQUEST['file']){
				$file =  str_replace($stripChrs, "", $_REQUEST['file']);
						$quote_array[file] = $file;
			} else {
				$file = 'not given';
			};
		if($_REQUEST['date']){
				$date =  str_replace($stripChrs, "", $_REQUEST['date']);
						$quote_array['date'] = $date;
			} else {
				$date = 'not given';
			};
		if($_REQUEST['comments']){
				$comments =  str_replace($stripChrs, "", $_REQUEST['comments']);
						$quote_array[comments] = $comments;
			} else {
				$comments = 'not given';
			};
				
		require_once('AutoMail.php');
		auto_mail($quote_array);
		header("Location: ../get-a-quote/quote-submit.html");
        break;
    case "equipment":
			//Stencil Info
		if($_REQUEST['quantity']){
				$quantity =  str_replace($stripChrs, "", $_REQUEST['quantity']);
						$quote_array[quantity] = $quantity;
			} else {
				$quantity = 'not given';
						$quote_array[quantity] = $quantity;
			};
		if($_REQUEST['file']){
				$file =  $_REQUEST['file'];
						$quote_array[file] = $file;
			};
		if($_REQUEST['date']){
				$date =  str_replace($stripChrs, "", $_REQUEST['date']);
						$quote_array['date'] = $date;
			} else {
				$date = 'not given';
						$quote_array['date'] = $date;
			};
		if($_REQUEST['comments']){
				$comments =  str_replace($stripChrs, "", $_REQUEST['comments']);
						$quote_array[comments] = $comments;
			} else {
				$comments = 'not given';
						$quote_array[comments] = $comments;
			};
						
		require_once('AutoMail.php');
		$quote_array['file'] == 'none';
		auto_mail($quote_array);
		header("Location: ../get-a-quote/quote-submit.html");
        break;
    default:
		require_once('AutoMail.php');
		$quote_array['file'] == 'none';
		auto_mail($quote_array);
		header("Location: ../get-a-quote/quote-submit.html");
        break;
	};
?>
