<?php
/**
 * Layout Object CSS
 *
 * Image blocks, lists, tables, gallery, messages
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>

/* ***************************************
	Perfil de círculos
*************************************** */

div.elgg-module-info > .elgg-head {
background: #269283;
border: 0px solid #ccc;
padding: 7px 15px;
margin-bottom: 10px;
-webkit-border-radius: 0px;
-moz-border-radius: 0px;
border-radius: 0px;
color:#fff;
}

div.elgg-module-info > .elgg-head h3, div.elgg-module-info > .elgg-head span a {
color:#fff;
}

div.dokuwiki div.bar {
border: 0px solid #612d62;
border-radius:5px;
moz-border-radius:5px;
webkit-border-radius:5px;
background: #c3a6cf;
padding: 0.1em 0.15em;
clear: both;
}

div.dokuwiki input.button, div.dokuwiki button.button {
border: 0px solid #8cacbb!important;
color: #612d62!important;
background: #fff!important;
vertical-align: middle;
text-decoration: none;
font-size: 100%;
cursor: pointer;
margin: 1px;
padding: 0.125em 0.4em;
}

div.dokuwiki div.breadcrumbs {
background-color: #f9f9f9!important;
color: #666;
font-size: 80%;
padding: 0 0 0 4px;
border:0px solid #fff!important;
border-radius:3px;
moz-border-radius:3px;
webkit-border-radius:3px;
}

div.groups-profile-fields div{
background: #f9f9f9!important;
padding: 3px 10px;
margin-bottom: 5px;
border-radius: 5px;
moz-border-radius: 5px;
webkit-border-radius: 5px;
border:0px solid #fff!important;
}

div.groups-profile-fields b{
color: #954e99;
}

 div.groups-stats b {
color:#269283;
}

 div.groups-stats p {
 font-weight:bold;
color:#269283;
}

div.groups-stats {
border: 0px solid #ccc;
background: #f9f9f9;
padding: 10px 15px;
margin-top: 10px;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;
}

/* ***************************************
	Usuarios - Menu desplegable
*************************************** */

ul.elgg-menu-hover > li {
border-bottom: 0px solid #bbb;
}


ul.elgg-menu-hover li a {
background-color:#f7f7f7;
margin-bottom:5px;
border:0px!important;
}

ul.elgg-menu-hover li a:hover {
color: #fff;
background-color:#612d62;
}

ul.elgg-menu-hover-admin li a:hover {
color: #fff!important;
background-color: #f00;
}

ul.elgg-menu-hover {
font-weight:bold;
display: none;
position: absolute;
z-index: 10000;
overflow: hidden;
min-width: 170px;
max-width: 250px;
border: solid 0px;
border-color: #888;
background-color: #fff;
border-top-right-radius: 20px;
moz-border-top-right-radius: 20px;
webkit-border-top-right-radius: 20px;
-webkit-box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
-moz-box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
}
ol, ul {
list-style: none;
}

/* ***************************************
	Reportar footer
*************************************** */

li.elgg-menu-item-report-this a {
color:#f6f6f6!important;
}

/* ***************************************
	Walledgarden
*************************************** */


.elgg-heading-walledgarden, .elgg-body-walledgarden h3, .elgg-body-walledgarden h2, .entrada label, .elgg-body-walledgarden fieldset .mtm {
color:#fff;
}

.elgg-walledgarden-double > .elgg-head, .elgg-walledgarden-single > .elgg-head, .elgg-walledgarden-double > .elgg-foot,
.elgg-walledgarden-double > .elgg-body, .elgg-walledgarden-single > .elgg-body, .elgg-walledgarden-single > .elgg-foot {
background: transparent!important;
}

.entrada {

background:#612d62;
width:100%;
}

/* ***************************************
	Barra de búsqueda
*************************************** */

.busquedasmovil .elgg-search input[type=text] {
width: 100%;
height: 25px;
-webkit-border-radius: 0px;
-moz-border-radius: 0px;
border-radius: 0px;
border: 1px solid rgba(0, 0, 0, 0.25);
color: #fff;
font-size: 13px;
font-weight: bold;
line-height: 1.5em;
padding: 3px 15px;
background-color: #333;
}

.busquedasmovil {
display:none;
}

/* ***************************************
	Menu móviles
*************************************** */


#eltoggle {
float:left;
margin-bottom:10px;
cursor:pointer;
width:90px;
text-align:center;
margin-left:10px;
padding:7px 14px;
background-color:#333;
color:#fff;
font-weight:bold;
background: #333 url(<?php echo elgg_get_site_url(); ?>mod/bright-theme/graphics/button.png) repeat-x left top;
border:1px solid #333;
border-radius:5px;
moz-border-radius:5px;
webkit-border-radius:5px;
display:none;

}

div.menumoviles ul.elgg-menu-site, div.menumoviles {
float:left; position:relative!important; width:100%;
border:0px; display:none;}

/* ***************************************
	Responsive
*************************************** */

@media (max-width: 1032px) {


div.elgg-module-walledgarden {
width:100%;
position: absolute;
top: 0;
left: 0;
}

div.elgg-page-footer {
width:96%;
padding:2%;
}

.profile.elgg-col-2of3 {
width: 100%;
}

.elgg-col-1of3 {
width: 100%!important;
}

div.elgg-page-topbar > .elgg-inner {

padding: 8px 0px 6px 0px!important;
}

div#login-dropdown {
position: absolute;
top: 35px;
right: 10px;
z-index: 100;
}

div#eltoggle {
display:block;
}

div.menumoviles {display:none; border-bottom:5px solid #333333;}

div.menumoviles ul.elgg-menu-site {display:block;}

li.elgg-more {
width:100%!important;

}

div.menumoviles  .elgg-menu-site-more > li:last-child > a, .elgg-menu-site-more > li:last-child > a:hover {
-webkit-border-radius: 0 0 0px 0px;
-moz-border-radius: 0 0 0px 0px;
border-radius: 0 0 0px 0px;
}


.elgg-menu-site-default > .elgg-state-selected > a,
.elgg-menu-site-default > li:hover > a {
	background: transparent!important;
	color: #fff;
	
	 border-color: transparent!important;

	-webkit-border-radius: 0px;
	-moz-border-radius: 0px;
	border-radius: 0px;

	text-shadow: none;
	
	}

div.menumoviles ul.elgg-menu-site-more, div.menumoviles ul.elgg-menu-site-more:hover  {
position: relative;
width: 100%;
min-width: auto!important;
border: 0px solid #888;
border-top: 0;
left: 0px;
-webkit-border-radius: 0 0 0px 0px;
-moz-border-radius: 0 0 0px 0px;
border-radius: 0 0 0px 0px;
-webkit-box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.4);
-moz-box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.4);
box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.4);
background:333333!important;
background-color:333333!important;
}



ul.elgg-menu-site {
display:none;
}




div.menumoviles ul.elgg-menu-site, div.menumoviles, div.menumoviles .elgg-menu-site-default {

height:auto!important;
background-color: #333333;
border-color: rgba(0, 0, 0, 0.25);
border-style: solid;
-webkit-border-top-left-radius: 0px;
-webkit-border-top-right-radius: 0px;
-moz-border-radius-topleft: 0px;
-moz-border-radius-topright: 0px;
border-top-left-radius: 0px;
border-top-right-radius: 0px;
}

div.elgg-sidebar {
position: relative;
padding: 20px 0px!important;
float: left;
width: 100%!important;
margin: 0;
}


div.elgg-page-default .elgg-page-body > .elgg-inner {
width: 92%!important;
margin: 0 auto;
}


.elgg-page-default {
min-width: 100%!important;
}


.elgg-page-topbar > .elgg-inner {
padding: 8px 0px 6px 0px;
width: 100%!important;
margin: auto;
}


.elgg-page-default .elgg-page-header > .elgg-inner {
width: 100%!important;
height: 150px;
margin: 0 auto;
background: #612d62;
}

.elgg-inner {
width:100%!important; padding:0px!important;
}

}


@media (max-width: 960px) {

div#homepage-cms [id|=elgg-widget-col] {
width: 50%!important;
float: left;
min-height: 0 !important;
}

}



@media (max-width: 769px) {


ul.elgg-menu-topbar-alt li.elgg-menu-item-administration a {
font-size:0px;

}

#groups-tools > li {
width: 100%!important;
min-height: 200px;
margin-bottom: 20px;
}

div.elgg-main {
padding: 1px!important;
width: 99%;
float: left;
}

.elgg-heading-walledgarden {
margin-top: 0px!important;

}

div.elgg-body-walledgarden {
margin: 40px auto 0 auto!important;

}

.elgg-body-walledgarden {
width:100%!important;
}

div.elgg-page-default .elgg-page-body > div.elgg-inner {
width: 100%!important;
margin: 0 auto;
}

div#homepage-cms [id|=elgg-widget-col] {
width: 100%!important;
float: left;
min-height: 0 !important;
}

}

@media (max-width: 640px) {




div.elgg-page-topbar {
background: #2C2F36!important;

}

}



@media (max-width: 444px) {


div#eltoggle {
width:96%;
margin-left:2%;
margin-right:2%;
padding:7px 0px;
border:0px;


}


div.groups-profile-fields {
width:100%; float:left;
margin-top:10px;
}

div.busquedasmovil {
display:block;
margin-bottom:10px;
}


.elgg-search-header {
display:none;
}

.elgg-col-1of2 {
width: 100%;
}


}



@media (max-width: 360px) { 

div#login-dropdown, div#eltoggle {
margin-top:35px;
}

div#login-dropdown {
width:100%;
position:absolute!important;
right:0px;
top:35px;
}

div#login-dropdown a {
width:96%!important;
margin-left:2%;
margin-right:2%;
text-align:center!important;
padding: 10px 0px!important;
}

}

/* ***************************************
	Widgets Index
*************************************** */



.elgg-module-widget > div.elgg-body {
background-color: #f9f9f9;
width: 100%;
overflow: hidden;
border-top: 0px solid #ddd;
}

div.elgg-module-widget, div.elgg-module-widget:hover {
background-color: #fff;
padding: 2px;
margin: 0px 5px 15px 5px;
position: relative;
}

.elgg-module-featured > div.elgg-head, .elgg-module-widget > div.elgg-head {

background-color: #269283;
border-bottom: 0px solid #06b;
}

.elgg-module-widget > div.elgg-head h3 a, .elgg-module-widget > div.elgg-head a, .elgg-module-widget > div.elgg-head h3  {
color:#fff!important;
}

.elgg-module-featured {
background-color: #fff;
border: 1px solid #269283;
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 3px;
-webkit-box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
-moz-box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
}

.elgg-module-featured > div.elgg-head * {
color: #fff;
padding: 0px;
text-shadow: 0px 1px 1px #000;
}

.elgg-module-featured >  {
background-color: #fff;
border: 1px solid #269283;
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 3px;
-webkit-box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
-moz-box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
}


/* ***************************************
	Perfil
*************************************** */


div.profile .elgg-inner {
margin: 0 5px;
border: 0px solid #ddd;
border-top-right-radius:40px;
border-bottom-right-radius:10px;
background: #f9f9f9;
}

div#profile-owner-block {
width: 200px;
float: left;
background-color: #f1f1f1;
padding: 15px;
border-right: 1px solid #ddd;
}


span.elgg-heading-basic {
color: #269283;
font-size: 1.2em;
font-weight: bold;
}

/* ***************************************
	LOGO ELGG EN EL FOOTER
*************************************** */

div.elgg-page-footer .mts.clearfloat.float-alt {
display:none;
}


/* ***************************************
	Image Block
*************************************** */
.elgg-image-block {
	padding: 5px 0;
}
.elgg-image-block .elgg-image {
	float: left;
	margin-right: 10px;
}
.elgg-image-block .elgg-image img {
  border: 2px solid #fff;

	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;

	-webkit-box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
	box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
}
.elgg-image-block .elgg-image-alt {
	float: right;
	margin-left: 5px;
}


/* ***************************************
	List
*************************************** */
.elgg-list {
	clear: both;
}
.elgg-list > li {
  padding: 5px 0;
	border-bottom: 1px dashed #ccc;
}
.elgg-list > li:first-child {
  padding-bottom: 5px;
}
.elgg-list > li:last-child {
  padding-top: 5px;
  border-bottom: none;
}

.elgg-item .elgg-subtext {
	margin-bottom: 5px;
}
.elgg-item .elgg-content {
	margin: 5px 0;
}


/* ***************************************
	Gallery
*************************************** */
.elgg-gallery {
	border: none;
	margin-right: auto;
	margin-left: auto;
}
.elgg-gallery td {
	padding: 5px;
}
.elgg-gallery-fluid > li {
	float: left;
}
.elgg-gallery-users > li {
  margin: 0px 5px 0px 0px;
}
.elgg-gallery-users > li img {
  border: 2px solid #fff;

	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;

	-webkit-box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
	box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
}


/* ***************************************
	Tables
*************************************** */
.elgg-table {
	width: 100%;
	border-top: 1px solid #ccc;
}
.elgg-table td, .elgg-table th {
	padding: 4px 8px;
	border: 1px solid #ccc;
}
.elgg-table th {
	background-color: #ddd;
  font-weight: bold;
}
.elgg-table tr:nth-child(odd), .elgg-table tr.odd {
	background-color: #fff;
}
.elgg-table tr:nth-child(even), .elgg-table tr.even {
	background-color: #eee;
}
.elgg-table-alt {
	width: 100%;
	border-top: 1px solid #ccc;
}
.elgg-table-alt td {
	padding: 3px 5px;
	border-bottom: 1px solid #ccc;
}
.elgg-table-alt td:first-child {
	width: 200px;
}
.elgg-table-alt tr:hover {
	background: #E4E4E4;
}


/* ***************************************
	Owner Block
*************************************** */
.elgg-owner-block {
	margin-bottom: 20px;
}


/* ***************************************
	Messages
*************************************** */
.elgg-message {
	color: #fff;
	font-weight: bold;
	display: block;
	padding: 5px 15px;
	cursor: pointer;
	opacity: 0.9;
  border: 2px solid #eee;
  background-color: #777;
	text-shadow: 0px 1px 1px #000;
	
	-webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
	box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
	
	-webkit-border-radius: 7px;
	-moz-border-radius: 7px;
	border-radius: 7px;
}
.elgg-state-success {
	background-color: #092;
}
.elgg-state-error {
	background-color: #e10;
}
.elgg-state-notice {
	background-color: #06d;
}


/* ***************************************
	River
*************************************** */
.elgg-list-river > li {
	border-bottom: 1px dashed #ccc;
}
.elgg-river-item .elgg-pict {
	margin-right: 20px;
}
.elgg-river-timestamp {
	color: #666;
	font-style: italic;
}

.elgg-river-attachments,
.elgg-river-message,
.elgg-river-content {
	border-left: 1px solid #ccc;
	line-height: 1.5em;
	margin: 5px 0px;
	padding-left: 10px;
}
.elgg-river-attachments .elgg-avatar,
.elgg-river-attachments .elgg-icon {
	float: left;
}
.elgg-river-layout .elgg-input-dropdown {
	float: right;
	margin: 10px 0;
}

.elgg-river-comments-tab {
	display: block;
	background-color: #eee;
	color: #666;
	width: auto;
	float: right;
	padding: 3px 15px;
	
	-webkit-border-radius: 5px 5px 0 0;
	-moz-border-radius: 5px 5px 0 0;
	border-radius: 5px 5px 0 0;
}

<?php //@todo components.php ?>
.elgg-river-comments {
	margin: 0;
	border-top: none;
}
.elgg-river-comments li:first-child {
	-webkit-border-radius: 5px 0 0 0;
	-moz-border-radius: 5px 0 0 0;
	border-radius: 5px 0 0 0;
}
.elgg-river-comments li:last-child {
	-webkit-border-radius: 0 0 5px 5px;
	-moz-border-radius-bottomleft: 0 0 5px 5px;
	border-radius-bottomleft: 0 0 5px 5px;
}
.elgg-river-comments li {
	background-color: #eee;
	border-bottom: none;
	padding: 5px 5px 5px 10px;
	margin-bottom: 1px;
}
.elgg-river-comments .elgg-media {
	padding: 0;
}
.elgg-river-more {
	background-color: #eee;
	
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	
	padding: 5px 10px;
	margin-bottom: 5px;
}

<?php //@todo location-dependent styles ?>
.elgg-river-item form {
	background-color: #eee;
	padding: 5px 10px;
	
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;

  height: 35px;
}
.elgg-river-item input[type=text] {
	width: 80%;
}
.elgg-river-item input[type=submit] {
	margin: 0 0 0 10px;
}


/* **************************************
	Comments (from elgg_view_comments)
************************************** */
.elgg-comments {
	margin-top: 30px;
}
.elgg-comments > form {
	margin-top: 30px;
}


/* ***************************************
	Image-related
*************************************** */
.elgg-photo {
}


/* ***************************************
	Tags
*************************************** */
.elgg-tags {
	display: inline;
}
.elgg-tags li {
	display: inline;
	margin-right: 5px;
}
.elgg-tags li:after {
	content: ",";
}
.elgg-tags li:last-child:after {
	content: "";
}
.elgg-tagcloud {
	text-align: justify;
}
