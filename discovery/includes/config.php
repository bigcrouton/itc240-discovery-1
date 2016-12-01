<?php
//config.php

//this enable pages to know their own names
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));
//this clears date errors
date_default_timezone_set('America/Los Angeles');

//this is inside an H1 in the header.php file
$banner = 'Banner goes here';


$nav1['index.php'] = 'Main Page';
$nav1['template.php'] = 'Template Page';
$nav1['contact.php'] = 'Contact Us';
$nav1['links.php'] = 'Links';

switch(THIS_PAGE)
{   
    case "template.php":
        $title = "Template Page";
    break;
        
    case "contact.php":
        $title = "Contact Page";
    break; 
        
    case "links.php":
        $title = "Links Page";
    break;
        
    case "index.php":
        $title = "Main Page";
    break;    
        

    default: 
        $title = THIS_PAGE;    
        
}

function makeLinks($nav)
{
    
 $myReturn = "";
    
    foreach($nav as $url => $text){
        
        if(THIS_PAGE == $url)
        {
            $myReturn .='<li class="current"><a href="' . $url . '">' . $text . '</a></li>';
            
        }else{
            $myReturn .='<li> <a href="' . $url . '">' . $text . '</a></li>';   
        }
        
        
        
        
        
    }
    
 
 return $myReturn;  
 }   
    
 /*   
    <li class="current"><a href="index.html">Home</a></li>
              <li><a href="ourwork.html">Our Work</a></li>
              <li><a href="testimonials.html">Testimonials</a></li>
              <li><a href="projects.html">Projects</a></li>
              <li><a href="contact.html">Contact Us</a></li> 
    
    
    

*/

    