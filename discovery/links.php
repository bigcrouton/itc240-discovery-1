
<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>
		

<h1>Contact Us</h1>

<?php

//postback2

//echo basename($_SERVER['PHP_SELF']);


//define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

// die;

/*


' . xxx . '              

*/

/*echo '<pre>';
var_dump($_SERVER);
echo '</pre>';
   */ 

if(isset($_POST['FirstName']))
{
//  echo $_POST['FirstName'];
  /*  echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
    
    */
    $to      = 'sringwood57@gmail.com';
    $subject = 'ITC240 Contact Form';
    $message = process_post();
    $replyTo = $_POST['Email'];
    $headers = 'From: noreply@bigcrouton.com' . PHP_EOL .
    'Reply-To: ' . $replyTo . PHP_EOL .
    'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
    
    
    
    
    echo '<p>
    
   <a href="' . THIS_PAGE . '">Thanks</a>    </p>';
    
    
}else
{
   echo '
   
   <form action="' . THIS_PAGE . '" method="post">
First Name: <input type="text" name="FirstName"  required="required" autofocus="autofocus" title="First name is required" placeholder="First name goes here" /><br />

Email: <input type="email" name="Email" required="required" /><br />

Zip Code:  <input type="text" name="zipcode" required="required" /><br />

Gender: <br> <input type="radio" name="gender" value="male" checked> Male<br>
         <input type="radio" name="gender" value="female"> Female<br>
         
What sweets do you love: <br> 
  <input type="checkbox" name="food" value="Ice Cream" checked="checked"> I love Ice Cream<br>
  <input type="checkbox" name="food" value="Chocolate Chip Cookies" checked="checked"> I love chocolate Chip Cookies<br>
  <input type="checkbox" name="food" value="Carrot Cake" checked="checked"> I love carrot cake<br>
  
  


Comments: <textarea name="Comments"></textarea><br />
<input type="submit" value="Click to Submit" /> 


</form>
   
   '; 
}

function process_post()
{//loop through POST vars and return a single string
    $myReturn = ''; //set to initial empty value

    foreach($_POST as $varName=> $value)
    {#loop POST vars to create JS array on the current page - include email
         $strippedVarName = str_replace("_"," ",$varName);#remove underscores
        if(is_array($_POST[$varName]))
         {#checkboxes are arrays, and we need to collapse the array to comma separated string!
             $myReturn .= $strippedVarName . ": " . implode(",",$_POST[$varName]) . PHP_EOL;
         }else{//not an array, create line
             $myReturn .= $strippedVarName . ": " . $value . PHP_EOL;
         }
    }
    return $myReturn;
}




?>
	    
 <?php include 'includes/footer.php'; ?>