<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Web</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,900' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>


    <?php include 'nav.php'; ?>
        
    <div class="wrap push">
        <a href="#menu" class="menu-link">&#9776;</a>
    </div>

    <div id="container";>
        <h1>Web Design</h1>
        <div id="web-gallery">
        <table style="width:100%">
          <tr>
            <td><a href="http://www.kingsinnsandiego.com/"><h2>Kings Inn</h2><img src="images/porfolio/websites/kings.png"></a></td>
            <td><a href="http://www.sandcastleinnanaheim.com/"><h2>Super 8</h2><img src="images/porfolio/websites/super_8.png"></a></td> 
           
          </tr>
          <tr>
            <td><a href="http://www.hotelcrestview.com/"><h2>Crestview Hotel</h2><img src="images/porfolio/websites/CrestView.png"></a></td>
            <td><a href="http://www.duderancherlodge.com/"><h2>Dude Rancher Lodge</h2><img src="images/porfolio/websites/dude_rancher.png"></a></td> 
          </tr>
          <tr>
            <td><a href="http://www.tropicanainn-anaheim.com/"><h2>Tropicana Inn</h2><img src="images/porfolio/websites/tropicana.png"></a></td>
            <td><a href="http://www.camelotinn-anaheim.com/"><h2>Camleot Inn</h2><img src="images/porfolio/websites/camleot.png"></a></td> 
          </tr>
          <tr>
            <td><a href="http://www.beverlygarland.com/"><h2>Beverly Garland</h2><img src="images/porfolio/websites/beverly_garland.png"></a></td>
            <td><a href="http://www.hollywoodhotel.net/"><h2>Hollywood Hotel</h2><img src="images/porfolio/websites/hollywood_hotel.png"></a></td> 
          </tr>
        </table>
        </div>
    </div>

<!-- //nav slider  script-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>     
    <script src="js/bigSlide.js"></script>
    <script>
 //nav slider   
        $(document).ready(function() {
            $('.menu-link').bigSlide();
        });
    </script>
      
        
    </body>
</html>
