<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Contact</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="css/style2.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="css/owl.theme.default.min.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
</head>

<body>
   <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>

   <div id="perspective">
      <div id="container">
         <div class="face front">
            <div class="aboutimgborder">
               <center>
                  <div class="about_img"><img src="images/adournalogo.jpg">
                  <p>Click the logo for a surprise!</p>
               </div>
                  
               </center>
            </div>
         </div>
         <div class="face back">
            <div id="open"></div>
            <div id="folds"></div>
            <div class="button con"> Click Me </div>
            <div id="letter">
               <hgroup>
                  <h1 id="info" class="info">About Adourna:</h1>
               </hgroup>
               <p>
               Adourna is a creation of eco-friendly earrings crafted from rotten leaves and waste paper. We are part of the sustainable fashion industry that focuses on offering unique, environmentally conscious accessories that embody the beauty and transformation symbolized by the mythical Adarna bird. 
"Adourna" was inspired by the word "adornments", which means “accessory” that is commonly worn to enhance the beauty and status of the customer. The brand name is pronounced as "Adarna". This reflects our mission to transform waste into beauty, similar to the mythical bird. 
<br>
Our advocacy at Adourna not goes beyond just sustainability and eco-friendliness. We’re also committed to helping stray dogs and cats. That’s why 45% of the proceeds from our earrings will be donated to local animal shelters near Pangasinan and towards efforts to feed hungry strays. 
<br>
We don't only change waste into crafts. We only change lives.
<br>
Follow our Facebook (Adourna) page and Instagram (adournacreates) to witness the beauty of these earrings.
               </p>
            </div>
         </div>
      </div>
   </div>
   <div id="wrapper"></div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script>
      var C = $('#container'),
         A = $('#open'),
         L = $('#letter'),
         B = $('.button.con'),
         H = $('#letter hgroup h2'),
         F = $('.front'),
         W = $('#wrapper'),
         P = $('#perspective'),
         closed = true;

      $(function () {
         // Handler for .ready() called.
         $("textarea").text("");
      });

      F.click(function () {
         C.css({
            'transition': 'all 1s',
            'transform': 'rotateY(180deg)',
         });
         A.css({
            'transition': 'all 1s .5s',
            'transform': 'rotateX(180deg)',
            'z-index': '0'
         });
         W.css({
            'visibility': 'visible'
         });
      });

      // open/close and spin
      W.click(function () {
         var message = $.trim($('textarea').val());
         if (message.length > 0) { // they wrote something in the message
            var r = confirm("You have not sent your message, would you still like to close the form?");
            if (r == false) { // they don't want to close
               return;
            } else { // they do want to close. clear message
               document.getElementById("myform").reset();
            }
         }
         if (closed === false) {
            var screenWidth = window.innerWidth;

    var newWidth = screenWidth <= 480 ? '98%' : '98%';
    var newLeft = screenWidth <= 480 ? '-1%' : '0';
            L.css({
               'transition': 'all .7s',
               'top': '3px',
               'height': '160px',
               'width': newWidth,
               'left': newLeft
            });
            P.css({
               'transform': 'translateY(0px)'
            });
            F.css({
               'transform': 'rotateZ(0deg)'
            });
            H.css({
               'transition': 'all .5s',
               'transform': 'rotateZ(0deg)'
            });
            C.css({
               'transition': 'all 1.2s .95s'
            });
            A.css({
               'transition': 'all 1.2s .7s'
            });
            H.css({
               'transition': 'all .5s'
            });
            document.getElementById("info").innerHTML = "About Adourna:";
            closed = true;
         } else {
            C.css({
               'transition': 'all 1s .5s',
            });
            A.css({
               'transition': 'all .5s',
            });
            closed = false;
         }
         C.css({
            'transform': 'rotateY(0deg) rotate(3deg)'
         });
         A.css({
            'transform': 'rotateX(0deg)',
            'z-index': '10'
         });
         W.css({
            //'transition':'all .5s',
            'visibility': 'hidden'
         });
      });

      // Open letter
      B.click(function () {
    var screenWidth = window.innerWidth;

    var newWidth = screenWidth <= 480 ? '120%' : '100%';
    var newLeft = screenWidth <= 480 ? '-10%' : '0';

    L.css({
        'transition': 'all .5s 1s',
        'top': '-600px',
        'height': '550px',
        'width': newWidth,
        'left': newLeft
    });
    P.css({
        'transition': 'all 1s',
        'transform': 'translateY(450px)'
    });
    H.css({
        'transition': 'all 1s',
        'transform': 'rotateZ(180deg)'
    });
    document.getElementById("info").innerHTML = "About Adourna:";
});
   </script>
</body>

</html>