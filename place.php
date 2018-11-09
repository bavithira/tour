<?php include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title> Easy Tour </title>
  
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

<style>
  
@gray-darker:               #444444;
@gray-dark:                 #696969;
@gray:                      #999999;
@gray-light:                #cccccc;
@gray-lighter:              #ececec;
@gray-lightest:             lighten(@gray-lighter,4%);

*,
*::before,
*::after { 
  box-sizing: border-box;
}

html {
  background-color: #f0f0f0;
}

body {
  color: @gray;
  font-family: 'Roboto','Helvetica Neue', Helvetica, Arial, sans-serif;
  font-style: normal;
  font-weight: 400;
  letter-spacing: 0;
  padding: 1rem;
  text-rendering: optimizeLegibility;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  -moz-font-feature-settings: "liga" on;
}

img {
  height: auto;
  max-width: 100%;
  vertical-align: middle;
}

.btn {
  background-color: white;
  border: 1px solid @gray-light;
  //border-radius: 1rem;
  color: @gray-dark;
  padding: 0.5rem;
  text-transform: lowercase;
}

.btn--block {
  display: block;
  width: 100%;
}
 
.cards {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  margin: 0;
  padding: 0;
}

.cards__item {
  display: flex;
  padding: 1rem;
  @media(min-width: 40rem) {
    width: 50%;
  }
  @media(min-width: 56rem) {
    width: 33.3333%;
  }
}

.card {
  background-color: white;
  border-radius: 0.25rem;
  box-shadow: 0 20px 40px -14px rgba(0,0,0,0.25);
  display: flex;
  flex-direction: column;
  overflow: hidden;
  &:hover {
    .card__image {
      filter: contrast(100%);
    }
  }
}

.card__content {
  display: flex;
  flex: 1 1 auto;
  flex-direction: column;
  padding: 1rem;
}

.card__image {
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
  filter: contrast(70%);
  //filter: saturate(180%);
  overflow: hidden;
  position: relative;
  transition: filter 0.5s cubic-bezier(.43,.41,.22,.91);;
  &::before {
    content: "";
    display: block;
    padding-top: 56.25%; // 16:9 aspect ratio
  }
  @media(min-width: 40rem) {
    &::before {
      padding-top: 66.6%; // 3:2 aspect ratio
    }
  }
}

.card__image--flowers {
  background-image: url(https://unsplash.it/800/600?image=82);
}

.card__image--river {
  background-image: url(https://unsplash.it/800/600?image=11);
}

.card__image--record {
  background-image: url(https://unsplash.it/800/600?image=39);
}

.card__image--fence {
  background-image: url(https://unsplash.it/800/600?image=59);
}

.card__title {
  color: @gray-dark;
  font-size: 1.25rem;
  font-weight: 300;
  letter-spacing: 2px;
  text-transform: uppercase;
}

.card__text {
  flex: 1 1 auto;
  font-size: 0.875rem;
  line-height: 1.5;
  margin-bottom: 1.25rem;
}




</style>

</head> 

<div class="head">
  <section id="services" style="background-color: transparent; margin-top:30px;">
                   <div class="container">

                   <header class="section-header">
                    <div class="col-md-4 pull-left">
                    <ul class="breadcrumbs" style="margin-top:30px;">
                        <li><a href="index.php" title="">Home</a></li>
                        <li><a href="place.php" title="">Places</a></li>
                    </ul></div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4 pull-right">
                      <h1 style="margin-left: 250px;"> <b> <span> OUR </span> PLACES </b> </h1>
                    </div></header></div></section></div>

  <section id="services">
      <div class="container">

       

<ul class="cards">
  <li class="cards__item">
    <div class="card">
      <div class="card__image card__image--fence"></div>
      <div class="card__content">
        <div class="card__title">Flex</div>
        <p class="card__text">This is the shorthand for flex-grow, flex-shrink and flex-basis combined. The second and third parameters (flex-shrink and flex-basis) are optional. Default is 0 1 auto. </p>
        <button class="btn btn--block card__btn">Button</button>
      </div>
    </div>
  </li>
  <li class="cards__item">
    <div class="card">
      <div class="card__image card__image--river"></div>
      <div class="card__content">
        <div class="card__title">Flex Grow</div>
        <p class="card__text">This defines the ability for a flex item to grow if necessary. It accepts a unitless value that serves as a proportion. It dictates what amount of the available space inside the flex container the item should take up.</p>
        <button class="btn btn--block card__btn">Button</button>
      </div>
    </div>
  </li>
  <li class="cards__item">
    <div class="card">
      <div class="card__image card__image--record"></div>
      <div class="card__content">
        <div class="card__title">Flex Shrink</div>
        <p class="card__text">This defines the ability for a flex item to shrink if necessary. Negative numbers are invalid.</p>
        <button class="btn btn--block card__btn">Button</button>
      </div>
    </div>
  </li>
  <li class="cards__item">
    <div class="card">
      <div class="card__image card__image--flowers"></div>
      <div class="card__content">
        <div class="card__title">Flex Basis</div>
        <p class="card__text">This defines the default size of an element before the remaining space is distributed. It can be a length (e.g. 20%, 5rem, etc.) or a keyword. The auto keyword means "look at my width or height property."</p>
        <button class="btn btn--block card__btn">Button</button>
      </div>
    </div>
  </li>
</ul>
          

        

        </div>        
    </section><!-- #services -->
</body>   
</html>

<?php include "footer.php";
?>
