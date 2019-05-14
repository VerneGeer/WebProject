       
<?php $a='Regionální učebnice - Mapy'; ?>         
<?php
?>         
<!DOCTYPE HTML>
<html>  
  <head>    
    <meta charset="UTF-8" />      
    <meta name="keywords" content="">    
    <meta name="description" content="">    
    <meta http-equiv="content-type" content="text/html; charset=utf-8">    
    <meta name="generator" content="PSPad editor, www.pspad.com">    
    <link rel="stylesheet" href="Styles.css">    
    <title>
      <?php echo $a?>
    </title>  
  </head>  
  <body>    
    <div id="Main">        
      <div id="hlavicka">        
        <div class="textHlavicka">          
          <h1 style="margin-top= 0px;">Regionální učebnice Říčansko</h1>          <h2>Učíme se o místě, kde žijeme</h2>        
        </div>        
        <div class="logoHlavicka" style="text-align:right;">          
          <img src="Pics/Logo.png">          
        </div>         
      </div>      
      <div class="navbar">            
        <a href="/">AKTUÁLNĚ</a>          
        <a href="historie.php">HISTORIE</a>     
        <a href="priroda.php">PŘÍRODA</a>     
        <a href="mapa.php">MAPY</a>     
        <a href="projekty.php">PROJEKTY PRO ŠKOLY</a>
      </div>     
      <div class="text">         <h1>MAPY</h1>                
        <p>Připravujeme zjednodušené mapky Říčan a Říčanska, které budou vhodné i pro děti z 1. stupně.
        </p>          
        <img src="Pics/Maps/Map1.jpg" usemap="#Pravek">       
        <map name="Pravek">                
          <area target="_self" alt="" title="" hre="#popup1" coords="243,205,12" shape="circle" data-reveal-id="one">                
          <area coords="183,247,12" shape="circle">                
          <!--<area target="" alt="" title="" href="" coords="193,271,12" shape="circle">           
              <area target="" alt="" title="" href="" coords="219,265,12" shape="circle">           
              <area target="" alt="" title="" href="" coords="307,153,12" shape="circle">           
              <area target="" alt="" title="" href="" coords="154,56,12" shape="circle">           
              <area target="" alt="" title="" href="" coords="55,225,12" shape="circle">           
              <area target="" alt="" title="" href="" coords="143,443,12" shape="circle">           
              <area target="" alt="" title="" href="" coords="81,306,12" shape="circle">           
              <area target="" alt="" title="" href="" coords="386,548,12" shape="circle"> -->        
        </map>     <h2>Popup</h2>
        <div class="popup" onclick="myFunction()">Click me to toggle the popup!   
          <span class="popuptext" id="myPopup">A Simple Popup!
          </span>
        </div>
<script>
// When the user clicks on div, open the popup
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>
      </div>                      
    </div>       
  </body>
</html>