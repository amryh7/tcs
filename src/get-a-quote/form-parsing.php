<?php
//START TESTING --  START TESTING --  START TESTING --  START TESTING --  START TESTING --  START TESTING --  START TESTING --  START TESTING --  START TESTING --  START TESTING --  START TESTING --  
	// writing starter test for connection and http passing
// echo "script connected";
// print_r($_SERVER) . "<br><br><br>";
// print_r($_REQUEST) . "<br><br><br>"; // use to see all fields
// print_r($_POST) . "<br><br><br>";
// print_r($_GET) . "<br><br><br>";
// print_r($_FILES) . "<br><br><br>";
	// locating form values from HTML
/* 'magnetics.html'
        <form>
            <fieldset> // personal info
                <input type="text" class="form-control" id="fName" name="fName">
                <input type="text" class="form-control" id="lName" name="lName">
                <input type="email" class="form-control" id="eAddy" name="eAddy">
                <input type="tel" class="form-control" id="fone" name="fone">
            </fieldset>
            <fieldset> // company info
				<input type="text" class="form-control" id="cName" name="cName">
				<input type="text" class="form-control" id="address" name="address">
				<input type="text" class="form-control" id="city" name="city">
				<select class="form-control" id="st" name="st">
				<input type="text" class="form-control" id="zip" name="city">
            </fieldset>
            <fieldset> // magnetics info
                <input type="text" class="form-control" id="quantity" name="quantity">
					<input type="text" class="form-control" id="price" name="price">
                <input type="text" class="form-control" id="application" name="application">
                <input type="date" class="form-control" id="date" name="date">
                <input type="file" id="file" name="file">
                <textarea class="form-control" rows="3" id="comments" name="comments"></textarea>
            </fieldset>
        </form>
		  
	'pcbs.html'
		 <form>
			<fieldset> // personal info
				<input type="text" class="form-control" id="fName" name="fName">
				<input type="text" class="form-control" id="lName" name="fName">
				<input type="email" class="form-control" id="eAddy" name="eAddy">
				<input type="tel" class="form-control" id="fone" name="fone">
			</fieldset>
			<fieldset> // company info
				<input type="text" class="form-control" id="cName" name="cName">
				<input type="text" class="form-control" id="address" name="address">
				<input type="text" class="form-control" id="city" name="city">
				<select class="form-control" id="st" name="st">
				<input type="text" class="form-control" id="zip" name="zip">
			</fieldset>
			<fieldset> // pcbs info
				<input type="text" class="form-control" id="PCBpartNo" name="PCBpartNo">
				<input type="text" class="form-control" id="PCBrevNo" name="PCBrevNo">
				<input type="text" class="form-control" id="PCBmaterial" name="PCBmaterial">
				<input type="text" class="form-control" id="PCBboardDim" name="PCBboardDim">
				<input type="text" class="form-control" id="PCBlayerCount" name="PCBlayerCount">
				<input type="text" class="form-control" id="PCBcopperWeight" name="PCBcopperWeight">
				<input type="text" class="form-control" id="PCBboardThickness" name="PCBboardThickness">
				<input type="text" class="form-control" id="PCBminHoleSize" name="PCBminHoleSize">
				<input type="text" class="form-control" id="PCBminLineWidth" name="PCBminLineWidth">
				<input type="text" class="form-control" id="PCBboardFinish" name="PCBboardFinish">
				<input type="text" class="form-control" id="PCBsolderMask" name="PCBsolderMask">
				<input type="text" class="form-control" id="PCBsilkScreen" name="PCBsilkScreen">
				  <input type="checkbox" id="impedanceControlYes" name="impedanceControl" value="yes"> Yes			TODO=> change to radio button and group
				  <input type="checkbox" id="impedanceControlNo" name="impedanceControl" value="no"> No					TODO=> change class to radio-inline
				  <input type="checkbox" id="BBviasYes" name="BBvias" value="yes"> Yes								TODO=> change to radio button and group	
				  <input type="checkbox" id="BBviasNo" name="BBvias" value="no"> No										TODO=> change class to radio-inline
				  <input type="checkbox" id="microviasYes" name="microvias" value="yes"> Yes						TODO=> change to radio button and group
				  <input type="checkbox" id="microviasNo" name="microvias" value="no"> No								TODO=> change class to radio-inline
				<input type="text" class="form-control" id="PCBsingleUnits" name="PCBsingleUnits">
				<input type="text" class="form-control" id="PCBrouting" name="PCBrouting">
				<input type="text" class="form-control" id="PCBarray" name="PCBarray">
			</fieldset>
		</form>
				
	'polmer-stencils.html'
		<form>
            <fieldset> // personal info
				<input type="text" class="form-control" id="fName" name="fName">
				<input type="text" class="form-control" id="lName" name="fName">
				<input type="email" class="form-control" id="eAddy" name="eAddy">
				<input type="tel" class="form-control" id="fone" name="fone">
            </fieldset>
            <fieldset> // company info
				<input type="text" class="form-control" id="cName" name="cName">
				<input type="text" class="form-control" id="address" name="address">
				<input type="text" class="form-control" id="city" name="city">
				<select class="form-control" id="st" name="st">
				<input type="text" class="form-control" id="zip" name="city">
            </fieldset>
            <fieldset> // polmer-stencils info
				<input type="date" class="form-control" id="date" name="date">
				<input type="text" class="form-control" id="quantity" name="quantity">
				<textarea class="form-control" rows="3" id="comments" name="comments"></textarea>
            </fieldset>
		</form>
		
	'test-equipment.html'
		<form>
            <fieldset> // personal info
                <input type="text" class="form-control" id="fName" name="fName">
                <input type="text" class="form-control" id="lName" name="fName">
                <input type="email" class="form-control" id="eAddy" name="eAddy">
                <input type="tel" class="form-control" id="fone" name="fone">
            </fieldset>
            <fieldset> // company info
                <input type="text" class="form-control" id="cName" name="cName">
                <input type="text" class="form-control" id="address" name="address">
                <input type="text" class="form-control" id="city" name="city">
                <select class="form-control" id="st" name="st">
                <input type="text" class="form-control" id="zip" name="city">
            </fieldset>
            <fieldset> // test-equipment info
                <textarea class="form-control" rows="3" id="details" name="details"></textarea>
                <select class="form-control" id="terms" name="terms">
                    <option value="Buy">Buy</option>
                        <option value="Rent">Rent</option>
                        <option value="Lease">Lease</option>
                        <option value="Sell">Sell/Trade-In</option>
                <select class="form-control" id="industry" name="industry">
                    <option value="Trans">Transportation</option>								TODO=> edit value="Trans" to value="Transportation"... when we print the email the value is printed
                        <option value="Mili">Military</option>									TODO=> edit value="Mili" to value="Military"... when we print the email the value is printed
                        <option value="Semi">Semiconductor</option>								TODO=> edit value="Semi" to value="Semiconductor"... when we print the email the value is printed
                        <option value="Other">Other</option>									
                <input type="file" id="file" name="file">
            </fieldset>
        </form>
*/
	// Testing http fields for 'magnetics.html' and correct value passing
		// current page have no form action					TODO=> edit/add <form action="form-parsing.php">
		// 													TODO=> add <input type="hidden" id="form-type" name="form-type" value="magnetics">
		// current page has no 'submit' button 				TODO=> add <input type="submit" id="form-submit-btn" name="form-submit-btn" value="Submit">
/*
echo ($_REQUEST['form-type']) . "<br>"
echo "<br>Personal Info" . "<br><br>";
echo ($_REQUEST['fName']) . "<br>";
echo ($_REQUEST['lName']) . "<br>"; // current "<input type="text" class="form-control" id="lName" name="fName">" 				TODO=> change 'name=fname' to 'name=lname' for all 'get-a-quote' HTML
echo ($_REQUEST['eAddy']) . "<br>";
echo ($_REQUEST['fone']) . "<br>";
echo "<br>Company Info" . "<br><br>";
echo ($_REQUEST['cName']) . "<br>";
echo ($_REQUEST['address']) . "<br>";
echo ($_REQUEST['city']) . "<br>";
echo ($_REQUEST['st']) . "<br>";
echo ($_REQUEST['zip']) . "<br>";
echo "<br>Magnetics Info" . "<br><br>";
echo ($_REQUEST['quantity']) . "<br>";
echo ($_REQUEST['price']) . "<br>";
echo ($_REQUEST['application']) . "<br>";
echo ($_REQUEST['date']) . "<br>";
echo ($_REQUEST['file']) . "<br>";
echo ($_REQUEST['comments']) . "<br>";
*/
	// Testing http fields for 'pcbs.html' and correct value passing
		// current page have no form action					TODO=> edit/add <form action="form-parsing.php">
		// 													TODO=> add <input type="hidden" id="form-type" name="form-type" value="pcbs">
		// current page has no 'submit' button 				TODO=> add <input type="submit" id="form-submit-btn" name="form-submit-btn" value="Submit">
/*
echo ($_REQUEST['form-type']) . "<br>"
echo "<br>Personal Info" . "<br><br>";
echo ($_REQUEST['fName']) . "<br>";
echo ($_REQUEST['lName']) . "<br>"; // current "<input type="text" class="form-control" id="lName" name="fName">" 				TODO=> change 'name=fname' to 'name=lname' for all 'get-a-quote' HTML
echo ($_REQUEST['eAddy']) . "<br>";
echo ($_REQUEST['fone']) . "<br>";
echo "<br>Company Info" . "<br><br>";
echo ($_REQUEST['cName']) . "<br>";
echo ($_REQUEST['address']) . "<br>";
echo ($_REQUEST['city']) . "<br>";
echo ($_REQUEST['st']) . "<br>";
echo ($_REQUEST['zip']) . "<br>";
echo "<br>PCB Info" . "<br><br>";
echo ($_REQUEST['PCBpartNo']) . "<br>";
echo ($_REQUEST['PCBrevNo']) . "<br>";
echo ($_REQUEST['PCBmaterial']) . "<br>";
echo ($_REQUEST['PCBboardDim']) . "<br>";
echo ($_REQUEST['PCBlayerCount']) . "<br>";
echo ($_REQUEST['PCBcopperWeight']) . "<br>";
echo ($_REQUEST['PCBboardThickness']) . "<br>";
echo ($_REQUEST['PCBminHoleSize']) . "<br>";
echo ($_REQUEST['PCBminLineWidth']) . "<br>";
echo ($_REQUEST['PCBboardFinish']) . "<br>";
echo ($_REQUEST['PCBsolderMask']) . "<br>";
echo ($_REQUEST['PCBsilkScreen']) . "<br>";
echo ($_REQUEST['impedanceControl']) . "<br>"; // If 'Yes' checked pass 'Yes' for 'impedanceControl' else if 'No' checked overwrites 'yes' if checked and pass 'No'
echo ($_REQUEST['BBvias']) . "<br>"; // If 'Yes' checked pass 'Yes' for 'BBvias' else if 'No' checked overwrites 'yes' if checked and pass 'No'
echo ($_REQUEST['microvias']) . "<br>"; // If 'Yes' checked pass 'Yes' for 'microvias' else if 'No' checked overwrites 'yes' if checked and pass 'No'
echo ($_REQUEST['PCBsingleUnits']) . "<br>";
echo ($_REQUEST['PCBrouting']) . "<br>";
echo ($_REQUEST['PCBarray']) . "<br>";
*/
// Testing http fields for 'polymer-stencils.html' and correct value passing
		// current page have no form action					TODO=> edit/add <form action="form-parsing.php">
		// 													TODO=> add <input type="hidden" id="form-type" name="form-type" value="stencils">
		// current page has no 'submit' button 				TODO=> add <input type="submit" id="form-submit-btn" name="form-submit-btn" value="Submit">
/*
echo ($_REQUEST['form-type']) . "<br>"
echo "<br>Personal Info" . "<br><br>";
echo ($_REQUEST['fName']) . "<br>";
echo ($_REQUEST['lName']) . "<br>"; // current "<input type="text" class="form-control" id="lName" name="fName">" 				TODO=> change 'name=fname' to 'name=lname' for all 'get-a-quote' HTML
echo ($_REQUEST['eAddy']) . "<br>";
echo ($_REQUEST['fone']) . "<br>";
echo "<br>Company Info" . "<br><br>";
echo ($_REQUEST['cName']) . "<br>";
echo ($_REQUEST['address']) . "<br>";
echo ($_REQUEST['city']) . "<br>";
echo ($_REQUEST['st']) . "<br>";
echo ($_REQUEST['zip']) . "<br>"; // current "<input type="text" class="form-control" id="zip" name="city">" 				TODO=> change 'name=city' to 'name=zip' for all 'get-a-quote' HTML
echo "<br>Stencil Info" . "<br><br>";
echo ($_REQUEST['quantity']) . "<br>";
echo ($_REQUEST['date']) . "<br>";
echo ($_REQUEST['comments']) . "<br>";
*/
// Testing http fields for 'test-equipment.html' and correct value passing
		// current page have no form action					TODO=> edit/add <form action="form-parsing.php">
		// 													TODO=> add <input type="hidden" id="form-type" name="form-type" value="equipment">
		// current page has no 'submit' button 				TODO=> add <input type="submit" id="form-submit-btn" name="form-submit-btn" value="Submit">
/*
echo ($_REQUEST['form-type']) . "<br>"
echo "<br>Personal Info" . "<br><br>";
echo ($_REQUEST['fName']) . "<br>";
echo ($_REQUEST['lName']) . "<br>"; // current "<input type="text" class="form-control" id="lName" name="fName">" 				TODO=> change 'name=fname' to 'name=lname' for all 'get-a-quote' HTML
echo ($_REQUEST['eAddy']) . "<br>";
echo ($_REQUEST['fone']) . "<br>";
echo "<br>Company Info" . "<br><br>";
echo ($_REQUEST['cName']) . "<br>";
echo ($_REQUEST['address']) . "<br>";
echo ($_REQUEST['city']) . "<br>";
echo ($_REQUEST['st']) . "<br>";
echo ($_REQUEST['zip']) . "<br>"; // current "<input type="text" class="form-control" id="zip" name="city">" 				TODO=> change 'name=city' to 'name=zip' for all 'get-a-quote' HTML
echo "<br>Test Equipment Info" . "<br><br>";
echo ($_REQUEST['details']) . "<br>";
echo ($_REQUEST['terms']) . "<br>";
echo ($_REQUEST['industry']) . "<br>";
echo ($_REQUEST['file']) . "<br>";
*/
//END TESTING --  END TESTING --  END TESTING --  END TESTING --  END TESTING --  END TESTING --  END TESTING --  END TESTING --  END TESTING --  END TESTING --  END TESTING --  


//START CODING --  START CODING -- START CODING -- START CODING -- START CODING -- START CODING -- START CODING -- START CODING -- START CODING -- START CODING -- START CODING -- 

$form =  $_REQUEST['form-type'];
//Personal Info
$fName =  ucfirst(strtolower($_REQUEST['fName']));// capitalizing first letter after lowercasing string
$lName =  ucfirst(strtolower($_REQUEST['lName']));// capitalizing first letter after lowercasing string
$email =  $_REQUEST['eAddy'];
$phone =  $_REQUEST['fone'];
//Company Info
$company =  ucfirst(strtolower($_REQUEST['cName']));// capitalizing first letter after lowercasing string
$address =  $_REQUEST['address'];
$city =  ucfirst(strtolower($_REQUEST['city']));// capitalizing first letter after lowercasing string
$state =  $_REQUEST['st'];
$zip =  $_REQUEST['zip'];

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
];
//echo '<script language="javascript">alert("' . $quote_array[email] . '")</script>'; // testing array

				// setting local currency to US
	setlocale(LC_MONETARY, 'en_US');
	
switch ($form) {
    case "magnetics":
				// testing switch for magnetics
				//echo '<script language="javascript">alert("magnetics")</script>';
		//Magnetics Info
		$quantity =  $_REQUEST['quantity'];
				$quote_array[quantity] = $quantity;
		$price = money_format('%.2n', $_REQUEST['price']);
				$quote_array[price] = $price;
		$application =  $_REQUEST['application'];
				$quote_array[application] = $application;
		$date =  $_REQUEST['date'];
				$quote_array['date'] = $date;
		$file =  $_REQUEST['file'];
				$quote_array[file] = $file;
		$comments =  $_REQUEST['comments'];
				$quote_array[comments] = $comments;
				
		require_once('auto-mail.php');
		auto_mail($quote_array);
		require_once('quote-submit.html');
        break;
    case "pcbs":
				// testing switch for pcbs
				//echo '<script language="javascript">alert("pcbs")</script>';
		//PCB Info
		$PCBpartNo =  $_REQUEST['PCBpartNo'];
				$quote_array[PCBpartNo] = $PCBpartNo;
		$PCBrevNo =  $_REQUEST['PCBrevNo'];
				$quote_array[PCBrevNo] = $PCBrevNo;
		$PCBmaterial =  $_REQUEST['PCBmaterial'];
				$quote_array[PCBmaterial] = $PCBmaterial;
		$PCBboardDim =  $_REQUEST['PCBboardDim'];
				$quote_array[PCBboardDim] = $PCBboardDim;
		$PCBlayerCount =  $_REQUEST['PCBlayerCount'];
				$quote_array[PCBlayerCount] = $PCBlayerCount;
		$PCBcopperWeight =  $_REQUEST['PCBcopperWeight'];
				$quote_array[PCBcopperWeight] = $PCBcopperWeight;
		$PCBboardThickness =  $_REQUEST['PCBboardThickness'];
				$quote_array[PCBboardThickness] = $PCBboardThickness;
		$PCBminHoleSize =  $_REQUEST['PCBminHoleSize'];
				$quote_array[PCBminHoleSize] = $PCBminHoleSize;
		$PCBminLineWidth =  $_REQUEST['PCBminLineWidth'];
				$quote_array[PCBminLineWidth] = $PCBminLineWidth;
		$PCBboardFinish =  $_REQUEST['PCBboardFinish'];
				$quote_array[PCBboardFinish] = $PCBboardFinish;
		$PCBsolderMask =  $_REQUEST['PCBsolderMask'];
				$quote_array[PCBsolderMask] = $PCBsolderMask;
		$PCBsilkScreen =  $_REQUEST['PCBsilkScreen'];
				$quote_array[PCBsilkScreen] = $PCBsilkScreen;
		$impedanceControl =  $_REQUEST['impedanceControl'];
				$quote_array[impedanceControl] = $impedanceControl;
		$BBvias =  $_REQUEST['BBvias'];
				$quote_array[BBvias] = $BBvias;
		$microvias =  $_REQUEST['microvias'];
				$quote_array[microvias] = $microvias;
		$PCBsingleUnits =  $_REQUEST['PCBsingleUnits'];
				$quote_array[PCBsingleUnits] = $PCBsingleUnits;
		$PCBrouting =  $_REQUEST['PCBrouting'];
				$quote_array[PCBrouting] = $PCBrouting;
		$PCBarray =  $_REQUEST['PCBarray'];
				$quote_array[PCBarray] = $PCBarray;
				
		require_once('auto-mail.php');
		auto_mail($quote_array);
		require_once('quote-submit.html');
        break;
    case "stencils":
				// testing switch for stencils
				//echo '<script language="javascript">alert("stencils")</script>';
		//Stencil Info
		$quantity =  $_REQUEST['quantity'];
				$quote_array[quantity] = $quantity;
		$file =  $_REQUEST['file'];
				$quote_array[file] = $file;
		$date =  $_REQUEST['date'];
				$quote_array['date'] = $date;
		$comments =  $_REQUEST['comments'];
				$quote_array[comments] = $comments;
				
		require_once('auto-mail.php');
		auto_mail($quote_array);
		require_once('quote-submit.html');
        break;
    case "equipment":
				// testing switch for equipment
				//echo '<script language="javascript">alert("equipment")</script>';
		//Test Equipment Info
		$details =  $_REQUEST['details'];
				$quote_array[details] = $details;
		$terms =  $_REQUEST['terms'];
				$quote_array[terms] = $terms;
		$industry =  $_REQUEST['industry'];
				$quote_array[industry] = $industry;
		$file =  $_REQUEST['file'];
				$quote_array[file] = $file;
				
		require_once('auto-mail.php');
		auto_mail($quote_array);
		require_once('quote-submit.html');
        break;
    default:
				// testing switch for 'no match' case
				//echo '<script language="javascript">alert("NO FORM WAS FOUND")</script>';
		
		//require_once('quote-submit.html'); 												TODO=> make fail to submit page
		
	};
?>
