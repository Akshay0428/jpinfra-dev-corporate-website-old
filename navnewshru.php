<html>
<head>
  <title>nav shru</title>
  <style>
  @import url(https://fonts.googleapis.com/css?family=Varela+Round);

$color-background: #F5F5F5;
$color-main: #1abc9c;
$color-active: #FFF;
$color-link: #FFF;

$button-height: 27px;
$button-width: 35px;

body {
  background: $color-background;
}

.container {
  position: absolute;
  width: 100%;
  heigh: 100%;
  text-align: center;
  top: 40%;
  left: 0;
  margin:  0 auto;
  font-family: 'Varela Round', sans-serif;

  p {
    font-size: 20px;
  }
  
  a {
    display: inline-block;
    position: relative;
    text-align: center;
    color: $color-main;
    text-decoration: none;
    font-size: 20px;
    overflow: hidden;
    top: 5px;
    
    &:after {
      content: '';
      position: absolute;
      background: $color-main;
      height: 2px;
      width: 0%;
      transform: translateX(-50%);
      left: 50%;
      bottom: 0;
      transition: .35s ease;
    }
    &:hover:after,
    &:focus:after,
    &:active:after {
      width: 100%;
    }
  }
}

h1 {
  position: relative;
  text-align: center;
  font-family: 'Varela Round', serif;
}

.button_container {
  position: fixed;
  top: 5%;
  right: 2%;
  height: $button-height;
  width: $button-width;
  cursor: pointer;
  z-index: 100;
  transition: opacity .25s ease;
  
  &:hover {
    opacity: .7;
  }
  
  &.active {
    .top {
      transform: translateY(11px) translateX(0) rotate(45deg);
      background: $color-active;
    }
    .middle {
      opacity: 0;
      background: $color-active;
    }
    
    .bottom {
      transform: translateY(-11px) translateX(0) rotate(-45deg);
      background: $color-active;
    }
  }
  
  span {
  background: $color-main;
  border: none;
  height: 5px;
  width: 100%;
  position: absolute;
  top: 0;
  left: 0;
  transition:  all .35s ease;
  cursor: pointer;
    
    &:nth-of-type(2) {
      top: 11px;
    }
    
    &:nth-of-type(3) {
      top: 22px;
    }
  }
}

.overlay {
  position: fixed;
  background: $color-main;
  top: 0;
  left: 0;
  width: 100%;
  height: 0%;
  opacity: 0;
  visibility: hidden;
  transition: opacity .35s, visibility .35s, height .35s;
  overflow: hidden;
  
  &.open {
    opacity: .9;
    visibility: visible;
    height: 100%;
    
    li {
      animation: fadeInRight .5s ease forwards;
      animation-delay: .35s;
      
      &:nth-of-type(2) {
        animation-delay: .4s;
      }
      &:nth-of-type(3) {
        animation-delay: .45s;
      }
      &:nth-of-type(4) {
        animation-delay: .50s;
      }
    }
  }
  nav {
    position: relative;
    height: 70%;
    top: 50%;
    transform: translateY(-50%);
    font-size: 50px;
    font-family: 'Varela Round', serif;
    font-weight: 400;
    text-align: center;
  }
  ul {
    list-style: none;
    padding: 0;
    margin: 0 auto;
    display: inline-block;
    position: relative;
    height: 100%; 
    
    li {
      display: block;
      height: 25%;
      height: calc(100% / 4);
      min-height: 50px;
      position: relative;
      opacity: 0;
      
      a {
        display: block;
        position: relative;
        color: $color-link;
        text-decoration: none;
        overflow: hidden;
        
        &:hover:after,
         &:focus:after,
         &:active:after {
           width: 100%;
         }
        
        &:after {
          content: '';
          position: absolute;
          bottom: 0;
          left: 50%;
          width: 0%;
          transform: translateX(-50%);
          height: 3px;
          background: $color-link;
          transition: .35s;
        }
      }
    }
  }
}

@keyframes fadeInRight {
  0% {
    opacity: 0;
    left: 20%;
  }
  100% {
    opacity: 1;
    left: 0;
  }
}
  </style>
</head>
 <body>
    <div class="container">
      <h1> Click The Menu</h1>
      
     <p> Be Amazed</p>
      // Everything below this is part of the menu
    <div class="button_container" id="toggle">
      <span class="top"> </span>
      <span class="middle"> </span>
      <span class="bottom"> </span>
      <div class="overlay" id="overlay">
        <nav class="overlay-menu">
          <ul>
            <li><a href=""> Home</a></li>
            <li><a href=""> About</a></li>
            <li><a href=""> Work</a></li>
            <li><a href=""> Contact</a></li>
          </ul>
        </nav>
      </div>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
      $('#toggle').click(function() {
   $(this).toggleClass('active');
   $('#overlay').toggleClass('open');
  });
    </script>
  </body>
  </html>


