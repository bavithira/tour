<?php include "header.php";
?>

<html>
<head>
<title> Contact Us </title>



<style>

.head {
 background-color: #ffffff;
background-image:url("img/intro-carousel/8.jpg");
background-repeat: no-repeat;
background-position: absolute;
 background-size: cover;
  padding: 50px;
  text-align: center;
height: 290px;


}
@media only screen and (max-width: 320px){
  .head{
    display: none;
  }
  .breadcrumbs{
    display: none;
  }
  .head h1{
   display: none;
  }
}
 
.head h1{

font-size: 25px;
color:#fff;
text-transform: uppercase;
/*padding: 30px 0px 0px 3px;
*/
}

.head h1 span{

font-size: 25px;
color:#44bd32;
text-transform: uppercase;

}

.breadcrumbs{
    background:#555;
    float:left;
    width:auto;
    list-style:outside none none;
    /*margin:30px 0 0;*/
    padding:5px 12px 3px;
    
}
.breadcrumbs > li{
    color:#fff;
    float:left;
    font-size:12px;
    letter-spacing:0.1px;
    line-height:13px;
    font-weight:600;
    padding:0 13px;
    position:relative;
    width:auto;
    text-transform:uppercase;
}
.breadcrumbs > li a:hover{color:#C4E538}
.breadcrumbs > li:before{
    content:"\f105";
    font-family:fontawesome;
    font-size:15px;
    color:#FFF;
    line-height:10px;
    position:absolute;
    left:auto;
    right:-3px;
    top:1px;
}
.breadcrumbs > li:last-child:before{display:none}
.pagetop-inner h1{
    color:#fff;
    float:right;
    font-family:great vibes;
    font-weight:200;
    font-size:60px;
}
</style>

</head> 

<div class="head">
  <section id="services" style="background-color: transparent; margin-top:30px;"">
                   <div class="container">

                   <header class="section-header">
                    <div class="col-md-4 pull-left">
                    <ul class="breadcrumbs" style="margin-top:20px;">
                        <li><a href="index.php" title="">Home</a></li>
                        <li><a href="contact.php" title="">Contact us</a></li>
                    </ul></div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4 pull-right">
                      <h1 style="margin-left: 250px;"> <b> <span> CONTACT </span> US </b> </h1>
                    </div></header></div></section></div>


   <section id="contact" class="section-bg">
      <div class="container">

        <div class="section-header">
          <h3 class=" wow fadeInLeft">Contact Us</h3>
          <p class=" wow fadeInLeft">How can we help you?</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4  wow fadeInLeft">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>Easy Tour<br>5th Cross Street,<br>Murugan Road, Jaffna.
</address>
            </div>
          </div>

          <div class="col-md-4  wow fadeInLeft">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a>+94 12 345 678</a></p>

            </div>
          </div>

          <div class="col-md-4  wow fadeInLeft">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:easytour@gmail.com">easytour@gmail.com</a></p>
              
            </div>
          </div>

        </div>

        <div class="form wow fadeInLeft">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">

            <div class="form-row">
              
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

    </body>   
</html>
<?php include "footer.php";
?>
