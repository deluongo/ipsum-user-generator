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

            /* Updated version - 24th Nov 2014 */
        /*
        html, body, div, span, applet, object, iframe,
        h1, h2, h3, h4, h5, h6, p, blockquote, pre,
        a, abbr, acronym, address, big, cite, code,
        del, dfn, em, img, ins, kbd, q, s, samp,
        small, strike, strong, sub, sup, tt, var,
        b, u, i, center,
        dl, dt, dd, ol, ul, li,
        fieldset, form, label, legend,
        table, caption, tbody, tfoot, thead, tr, th, td,
        article, aside, canvas, details, embed,
        figure, figcaption, footer, header, hgroup,
        menu, nav, output, ruby, section, summary,
        time, mark, audio, video {
        margin: 0;
        padding: 0;
        border: 0;
        font: inherit;
        font-size: 100%;
        vertical-align: baseline;
        }

        html {
        line-height: 1;
        }

        ol, ul {
        list-style: none;
        }

        table {
        border-collapse: collapse;
        border-spacing: 0;
        }

        caption, th, td {
        text-align: left;
        font-weight: normal;
        vertical-align: middle;
        }

        q, blockquote {
        quotes: none;
        }
        q:before, q:after, blockquote:before, blockquote:after {
        content: "";
        content: none;
        }

        a img {
        border: none;
        }

        article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
        display: block;
        }


        body {
        background: #f77462;
        font-family: Lato, sans-serif;
        }

        @font-face {
        font-family: 'Genericons';
        src: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/53819/genericons-regular-webfont.eot");
        src: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/53819/genericons-regular-webfont.woff") format("woff"), url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/53819/genericons-regular-webfont.eot") format("truetype");
        font-weight: normal;
        font-style: normal;
        }
        [class*="genericon"] {
        display: inline-block;
        width: 16px;
        height: 16px;
        -webkit-font-smoothing: antialiased;
        font-size: 16px;
        line-height: 1;
        font-family: 'Genericons';
        text-decoration: inherit;
        font-weight: normal;
        font-style: normal;
        vertical-align: top;
        }


        [class*="genericon"] {
        *overflow: auto;
        *zoom: 1;
        *display: inline;
        }

        .container {
        margin: 0px auto;
        }

        .accordion {
        background: #5ab2ca;
        width: 100%;
        min-width: 950px;
        display: block;
        list-style-type: none;
        overflow: hidden;
        height: 200px;
        font-size: 0;
        }

        .tabs {
        display: inline-block;
        background-color: #6dc5dd;
        border-right: #5ab2ca 1px solid;
        width: 80px;
        height: 200px;
        overflow: hidden;
        position: relative;
        margin: 0;
        font-size: 16px;
        -moz-transition: all 0.4s ease-in-out 0.1s;
        -o-transition: all 0.4s ease-in-out 0.1s;
        -webkit-transition: all 0.4s ease-in-out;
        -webkit-transition-delay: 0.1s;
        transition: all 0.4s ease-in-out 0.1s;
        }
        .tabs:hover {
        width: 450px;
        }
        .tabs:hover .social-links a:before {
        margin-left: -100px;
        }
        .tabs:hover .social-links a:after {
        margin-left: -5px;
        }
        .tabs .paragraph {
        position: relative;
        width: 500px;
        margin-left: 80px;
        padding: 50px 0 0 10px;
        height: 200px;
        background: #fff;
        }
        .tabs .paragraph h1 {
        font-size: 2.5em;
        margin-bottom: 10px;
        }
        .tabs .paragraph p {
        font-size: 0.88em;
        line-height: 1.5em;
        padding-right: 30px;
        }

        .social-links {
        display: block;
        }
        .social-links a {
        display: block;
        text-indent: -9999px;
        font-size: 0;
        line-height: 0;
        }
        .social-links a:before, .social-links a:after {
        -moz-transition: all 0.4s ease-in-out 0.1s;
        -o-transition: all 0.4s ease-in-out 0.1s;
        -webkit-transition: all 0.4s ease-in-out;
        -webkit-transition-delay: 0.1s;
        transition: all 0.4s ease-in-out 0.1s;
        width: 80px;
        height: 200px;
        position: absolute;
        text-indent: 0;
        padding-top: 90px;
        padding-left: 25px;
        display: block;
        font: normal 30px Genericons;
        color: #fff;
        }
        .social-links a:after {
        font-size: 48px;
        padding-left: 20px;
        padding-top: 80px;
        margin-left: 85px;
        }

        .twitter-icon a:before, .twitter-icon a:after {
        content: '\f202';
        }
        .twitter-icon a:after {
        background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjAuMCIgeDI9IjAuNSIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzdhZGNmOSIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzRiYzlmNSIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==');
        background-size: 100%;
        background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #7adcf9), color-stop(100%, #4bc9f5));
        background-image: -moz-linear-gradient(#7adcf9, #4bc9f5);
        background-image: -webkit-linear-gradient(#7adcf9, #4bc9f5);
        background-image: linear-gradient(#7adcf9, #4bc9f5);
        }

        .facebook-icon a:before, .facebook-icon a:after {
        content: '\f204';
        }
        .facebook-icon a:after {
        background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjAuMCIgeDI9IjAuNSIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzU0OGFiZiIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzI5NWI5ZSIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==');
        background-size: 100%;
        background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #548abf), color-stop(100%, #295b9e));
        background-image: -moz-linear-gradient(#548abf, #295b9e);
        background-image: -webkit-linear-gradient(#548abf, #295b9e);
        background-image: linear-gradient(#548abf, #295b9e);
        }

        .linkedin-icon a:before, .linkedin-icon a:after {
        content: '\f208';
        }
        .linkedin-icon a:after {
        background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjAuMCIgeDI9IjAuNSIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzAwYTljZCIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzAwODNiNCIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==');
        background-size: 100%;
        background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #00a9cd), color-stop(100%, #0083b4));
        background-image: -moz-linear-gradient(#00a9cd, #0083b4);
        background-image: -webkit-linear-gradient(#00a9cd, #0083b4);
        background-image: linear-gradient(#00a9cd, #0083b4);
        }

        .insta-icon a:before, .insta-icon a:after {
        content: '\f215';
        }
        .insta-icon a:after {
        background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjAuMCIgeDI9IjAuNSIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzdmYzEyMSIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzI5ODczMyIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==');
        background-size: 100%;
        background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #7fc121), color-stop(100%, #298733));
        background-image: -moz-linear-gradient(#7fc121, #298733);
        background-image: -webkit-linear-gradient(#7fc121, #298733);
        background-image: linear-gradient(#7fc121, #298733);
        }

        .youtube-icon a:before, .youtube-icon a:after {
        content: '\f213';
        }
        .youtube-icon a:after {
        background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjAuMCIgeDI9IjAuNSIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2RmMTkyYSIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iI2M0MTIyMiIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==');
        background-size: 100%;
        background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #df192a), color-stop(100%, #c41222));
        background-image: -moz-linear-gradient(#df192a, #c41222);
        background-image: -webkit-linear-gradient(#df192a, #c41222);
        background-image: linear-gradient(#df192a, #c41222);
        }

        .tumblr-icon a:before, .tumblr-icon a:after {
        content: '\f214';
        }
        .tumblr-icon a:after {
        background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjAuMCIgeDI9IjAuNSIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzI4M2U1NiIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzMyNTM3MiIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==');
        background-size: 100%;
        background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #283e56), color-stop(100%, #325372));
        background-image: -moz-linear-gradient(#283e56, #325372);
        background-image: -webkit-linear-gradient(#283e56, #325372);
        background-image: linear-gradient(#283e56, #325372);
        }

        .dribbble-icon a:before, .dribbble-icon a:after {
        content: '\f201';
        }
        .dribbble-icon a:after {
        background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjAuMCIgeDI9IjAuNSIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2UwM2E3MCIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iI2YxODliOCIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==');
        background-size: 100%;
        background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #e03a70), color-stop(100%, #f189b8));
        background-image: -moz-linear-gradient(#e03a70, #f189b8);
        background-image: -webkit-linear-gradient(#e03a70, #f189b8);
        background-image: linear-gradient(#e03a70, #f189b8);
        }
        Updated version - 24th Nov 2014 */

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
        	position: absolute;
        	top: 25%;
        	left: 15%;
        	margin: -150px 0 0 -150px;
        	width:300px;
        	height:300px;
        }
        .filter h1 { color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.3); letter-spacing:1px; text-align:center; }

        input {
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
        input:focus { box-shadow: inset 0 -5px 45px rgba(100,100,100,0.4), 0 1px 1px rgba(255,255,255,0.2); }


    </style>

</head>
<body>
  <!-- Nav
  <section>
    <div class="container">
      <ul class="accordion">
        <li class="tabs">
          <div class="social-links twitter-icon">
            <a href="http://twitter.com/renettarenula">Twitter</a>
          </div>
          <div class="paragraph">
            <h1>Users</h1>
            <p>Generate dummy users.</p>
          </div>
        </li>
        <li class="tabs">
          <div class="social-links facebook-icon">
            <a href="http://facebook.com">Facebook</a>
          </div>
          <div class="paragraph">
            <h1>Ipsum</h1>
            <p>Generate ipsum text.</p>
          </div>
        </li>
        <li class="tabs">
          <div class="social-links linkedin-icon">
             <a href="http://my.linkedin.com/pub/aysha-anggraini/49/a82/a05/">Password</a>
          </div>
          <div class="paragraph">
            <h1>LinkedIn</h1>
            <p>Generate an xkcd Password.</p>
          </div>
        </li>
      </ul>
    </div>
  </section>
  Nav end-->

  <section>
      {{-- Main page content will be yielded here --}}
      @yield('content')
  </section>

  <footer>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

  {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
  @yield('body')

</body>
</html>
