<!DOCTYPE html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'Foobooks' --}}
        @yield('title','P3')
    </title>

    <meta charset='utf-8'>
    <link href="/css/p3.css" type='text/css' rel='stylesheet'>

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

    <style>

        @import url(http://fonts.googleapis.com/css?family=Open+Sans);
        .btn { display: inline-block; *display: inline; *zoom: 1; padding: 4px 10px 4px; margin-bottom: 0; font-size: 13px; line-height: 18px; color: #333333; text-align: center;text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75); vertical-align: middle; background-color: #f5f5f5; background-image: -moz-linear-gradient(top, #ffffff, #e6e6e6); background-image: -ms-linear-gradient(top, #ffffff, #e6e6e6); background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#e6e6e6)); background-image: -webkit-linear-gradient(top, #ffffff, #e6e6e6); background-image: -o-linear-gradient(top, #ffffff, #e6e6e6); background-image: linear-gradient(top, #ffffff, #e6e6e6); background-repeat: repeat-x; filter: progid:dximagetransform.microsoft.gradient(startColorstr=#ffffff, endColorstr=#e6e6e6, GradientType=0); border-color: #e6e6e6 #e6e6e6 #e6e6e6; border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25); border: 1px solid #e6e6e6; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); cursor: pointer; *margin-left: .3em; }
        .btn:hover, .btn:active, .btn.active, .btn.disabled, .btn[disabled] { background-color: #e6e6e6; }
        .btn-large { padding: 9px 14px; font-size: 15px; line-height: normal; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; }
        .btn:hover { color: #333333; text-decoration: none; background-color: #e6e6e6; background-position: 0 -15px; -webkit-transition: background-position 0.1s linear; -moz-transition: background-position 0.1s linear; -ms-transition: background-position 0.1s linear; -o-transition: background-position 0.1s linear; transition: background-position 0.1s linear; }
        .btn-primary, .btn-primary:hover { text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25); color: #ffffff; }
        .btn-primary.active { color: rgba(255, 255, 255, 0.75); }
        .btn-primary { background-color: #4a77d4; background-image: -moz-linear-gradient(top, #6eb6de, #4a77d4); background-image: -ms-linear-gradient(top, #6eb6de, #4a77d4); background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#6eb6de), to(#4a77d4)); background-image: -webkit-linear-gradient(top, #6eb6de, #4a77d4); background-image: -o-linear-gradient(top, #6eb6de, #4a77d4); background-image: linear-gradient(top, #6eb6de, #4a77d4); background-repeat: repeat-x; filter: progid:dximagetransform.microsoft.gradient(startColorstr=#6eb6de, endColorstr=#4a77d4, GradientType=0);  border: 1px solid #3762bc; text-shadow: 1px 1px 1px rgba(0,0,0,0.4); box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.5); }
        .btn-primary:hover, .btn-primary:active, .btn-primary.active, .btn-primary.disabled, .btn-primary[disabled] { filter: none; background-color: #4a77d4; }
        .btn-block { width: 100%; display:block; }

        * { -webkit-box-sizing:border-box; -moz-box-sizing:border-box; -ms-box-sizing:border-box; -o-box-sizing:border-box; box-sizing:border-box; }

        html { width: 100%; height:100%; overflow:hidden; }

        body {
        	width: 100%;
        	height:100%;
        	font-family: 'Open Sans', sans-serif;
        	background: #092756;
        	background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%),-moz-linear-gradient(top,  rgba(57,173,219,.25) 0%, rgba(42,60,87,.4) 100%), -moz-linear-gradient(-45deg,  #670d10 0%, #092756 100%);
        	background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -webkit-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -webkit-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
        	background: -o-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -o-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -o-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
        	background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -ms-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -ms-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
        	background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg,  #670d10 0%,#092756 100%);
        	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3E1D6D', endColorstr='#092756',GradientType=1 );
        }
        .filter {
        	width:300px;
        	height:300px;
        }
        h1 { color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.3); letter-spacing:1px; text-align:center; }

        input[type="text"] {
        	width: 100%;
        	margin-bottom: 10px;
        	background: rgba(0,0,0,0.3);
        	border: none;
        	outline: none;
        	padding: 10px;
        	font-size: 13px;
        	color: #fff;
        	text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
        	border: 1px solid rgba(0,0,0,0.3);
        	border-radius: 4px;
        	box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
        	-webkit-transition: box-shadow .5s ease;
        	-moz-transition: box-shadow .5s ease;
        	-o-transition: box-shadow .5s ease;
        	-ms-transition: box-shadow .5s ease;
        	transition: box-shadow .5s ease;
        }
        input[type="text"]:focus { box-shadow: inset 0 -5px 45px rgba(100,100,100,0.4), 0 1px 1px rgba(255,255,255,0.2); }

        .output {
          position: absolute;
          top: 25%;
          left: 45%;
          margin: -150px 0 0 -150px;
          width:800px;
          height:300px;
          color: #fff;
        }

        .wrapper{
          width: 100%;
          margin: 0 auto;
        }

        /* Reset */
        @import url(//codepen.io/chrisdothtml/pen/ojLzJK.css);
        .animate, .butn, .btn-border-o:before, .btn-border-o:after, .btn-border:before, .btn-border:after, .btn-border-rev-o:before, .btn-border-rev-o:after, .btn-border-rev:before, .btn-border-rev:after, .btn-fill-vert-o:before, .btn-fill-vert-o:after, .btn-fill-vert:before, .btn-fill-vert:after, .btn-fill-horz-o:before, .btn-fill-horz-o:after, .btn-fill-horz:before, .btn-fill-horz:after {
          -webkit-transition: all 0.3s;
          transition: all 0.3s;
        }

        /* Main Styles */
        .main-container {
          width: 100%;
          max-width: 750px;
          margin: 0 auto;
        }

        h1 {
          line-height: 1;
          border-bottom: 1px solid #2c3e50;
          font-size: 35px;
          color: #2c3e50;
          text-align: center;
        }

        section {
          padding: 5px 0 61px;
          text-align: center;
          position: relative;
        }
        section h2 {
          margin-bottom: 15px;
          font-weight: normal;
          font-size: 17px;
          color: #D2D2D2;
          text-align: center;
        }
        section:not(:last-child):after {
          content: '';
          width: 70%;
          height: 1px;
          border-bottom: 1px dashed #2c3e50;
          opacity: .5;
          position: absolute;
          bottom: -1px;
          left: 15%;
        }

        .butn {
          display: inline-block;
          line-height: 35px;
          margin: 8px;
          padding: 0 15px;
          font-size: 15px;
          position: relative;
          opacity: .999;
          border-radius: 3px;
        }

        .btn-fill-home {
          background-color: #2ecc71;
          border: 1px solid #2ecc71;
          color: #fff;
          overflow: hidden;
        }

        .btn-fill-vert {
          background-color: #e5e5e5;
          border: 1px solid #e5e5e5;
          color: #a6a6a6;
          overflow: hidden;
        }

        .btn-fill-home:before, .btn-fill-home:after {
          content: '';
          width: 100%;
          height: 0;
          opacity: 0;
          position: absolute;
          left: 0;
          z-index: -1;
        }

        .btn-fill-vert:before, .btn-fill-vert:after {
          content: '';
          width: 100%;
          height: 0;
          opacity: 0;
          position: absolute;
          left: 0;
          z-index: -1;
        }

        .btn-fill-vert:before {
          top: 50%;
        }
        .btn-fill-vert:after {
          bottom: 50%;
        }
        .btn-fill-vert:hover {
          color: #fff;
        }
        .btn-fill-vert:hover:before, .btn-fill-vert:hover:after {
          height: 50%;
          opacity: 1;
        }

        .btn-fill-home.btn-green:before, .btn-fill-home.btn-green:after {
          background-color: #2ecc71;
        }
        .btn-fill-home.btn-green:hover {
          background-color: #2ecD99;
          border-color: #2ecc71;
        }

        .btn-fill-vert.btn-blue:before, .btn-fill-vert.btn-blue:after {
          background-color: #3498db;
        }
        .btn-fill-vert.btn-blue:hover {
          border-color: #3498db;
        }

        .btn-fill-vert.btn-purple:before, .btn-fill-vert.btn-purple:after {
          background-color: #9b59b6;
        }
        .btn-fill-vert.btn-purple:hover {
          border-color: #9b59b6;
        }
        .btn-fill-vert.btn-navy:before, .btn-fill-vert.btn-navy:after {
          background-color: #34495e;
        }
        .btn-fill-vert.btn-navy:hover {
          border-color: #34495e;
        }
        .btn-fill-vert.btn-orange:before, .btn-fill-vert.btn-orange:after {
          background-color: #e67e22;
        }
        .btn-fill-vert.btn-orange:hover {
          border-color: #e67e22;
        }
        .btn-fill-vert.btn-red:before, .btn-fill-vert.btn-red:after {
          background-color: #e74c3c;
        }
        .btn-fill-vert.btn-red:hover {
          border-color: #e74c3c;
        }


        /* menu base styles */

        nav{
          background: #3C3752;
        }

        nav ul{
          list-style-type: none;
          padding: 0;
        }

        nav li{
          text-decoration: none;
          text-align: center;
          color: #fff;
          display: block;
        }

        /* grid vs flex base styles */
        #blocks{
          margin: 20px;
        }

        article{
          background: #fff;
          margin-bottom: 20px;
          padding: 10px;
          box-sizing: border-box;
        }

        article h2{
          text-align: center;
          font-size: 20px;
          margin: 10px;
        }

        /* flex styles */

        nav ul.social li{
          flex: 1 1 0;
        }

        nav ul.social{
          flex: 1 1 0;
          display: flex;
        }

        @media screen and (min-width: 500px){

        nav ul{
          display: flex;
        }

        nav li{
          flex: 1 1 0;
        }

        nav{
          display: flex;
          justify-content: space-between;
        }

        ul.social{
          margin: 0;
        }

        nav button{
          justify-content: center;
        }

        #blocks{
          display: flex;
          justify-content: space-between;
          flex-wrap: wrap;
        }

        article{
          flex: 0 1 32%;
          transition: flex-basis 0.2s linear;
        }

        article.stack{
          flex: 0 1 100%
        }
        /* Main Styles */
        .flex-container {
          display: flex;
        }

        .flex-item {
          /* Width = Height when flex-flow: column;*/
          height: 100px;
          /*Combines flex-grow, flex-shrink, and flex-basis
          in that order*/
          flex: 1 0 200px;
          /*Flex-basis prevents scrolling*/
          flex-basis: 200px;
        }

        .one {
          flex-grow: 1;

        }

        .two {
          flex-grow: 2;

        }
      } /* end media 768 */
    </style>

</head>
<body>
  <div class="wrapper">
    <section>
      <nav>
        <ul>
          <li><button class="butn btn-green btn-fill-home">Home</button></li>
          <li><button class="butn btn-blue btn-fill-vert">Ipsum</button></li>
          <li><button class="butn btn-red btn-fill-vert">Users</button></li>
          <li><button class="butn btn-orange btn-fill-vert">Passwords</button></li>
        </ul>
      </nav>
    </section>

    <section>
      {{-- Main page content will be yielded here --}}
      @yield('content')
    </section>

  </div>

  <footer>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

  {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
  @yield('body')

</body>
</html>
