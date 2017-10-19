<?php

include_once 'Server_connection.php';
require_once 'validate.php' ;

if(isset($_POST['btn-signup']))
{
 $name = mysql_real_escape_string($_POST['q18_name']);
 $username = mysql_real_escape_string($_POST['q19_username']);
 $password = mysql_real_escape_string($_POST['q20_password']); 
 $email = mysql_real_escape_string($_POST['q4_email']);
 $yearsinceservingindepartment=mysql_real_escape_string($_POST['q9_yearsinceservingindepartment']);
 $designation=mysql_real_escape_string($_POST['q17_designation']);
 $qualification=mysql_real_escape_string($_POST['q7_qualification']);
 
 
 
 if(mysql_query("INSERT INTO staff(name,username,password,yearsinceservingindepartment,email,designation,qualification) VALUES('$name','$username','$password','$yearsinceservingindepartment','$email','$designation','$qualification')"))
 {
  ?>
        <script>alert('successfully registered ');</script>
        <?php
 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html class="supernova"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="alternate" type="application/json+oembed" href="https://www.jotform.com/oembed/?format=json&amp;url=http%3A%2F%2Fwww.jotform.com%2Fform%2F70173843495462" title="oEmbed Form"><link rel="alternate" type="text/xml+oembed" href="https://www.jotform.com/oembed/?format=xml&amp;url=http%3A%2F%2Fwww.jotform.com%2Fform%2F70173843495462" title="oEmbed Form">
<meta property="og:title" content="REGISTRATION FORM" >
<meta property="og:url" content="http://www.jotform.me/form/70173843495462" >
<meta property="og:description" content="Please click the link to complete this form.">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="HandheldFriendly" content="true" />
<title>REGISTRATION FORM</title>
<link href="https://cdn.jotfor.ms/static/formCss.css?3.3.16627" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.16627" />
<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.16627" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/54951ab6700cc4eb458b4567.css?themeRevisionID=57debcf89a11c732be8b4567"/>
<style type="text/css">
    .form-label-left{
        width:150px !important;
    }
    .form-line{
        padding-top:12px;
        padding-bottom:12px;
    }
    .form-label-right{
        width:150px !important;
    }
    body, html{
        margin:0;
        padding:0;
        background:rgba(255, 255, 255, 0.68);
    }

    .form-all{
        margin:0px auto;
        padding-top:0px;
        width:550px;
        color:rgb(27, 27, 26) !important;
        font-family:'Muli';
        font-size:14px;
    }
    .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
        color: rgb(255, 255, 255);
    }

</style>

<script src="log.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.16627" type="text/javascript"></script>
<script src="https://js.jotform.com/vendor/postMessage.js?3.3.16627" type="text/javascript"></script>
<script src="https://js.jotform.com/WidgetsServer.js?v=1485084935576" type="text/javascript"></script>
<script type="text/javascript">
   JotForm.init(function(){
      setTimeout(function() {
          $('input_9').hint('Roll No');
       }, 20);
      setTimeout(function() {
          $('input_15').hint('ex: 986543210');
       }, 20);
	JotForm.clearFieldOnHide="disable";
	JotForm.onSubmissionError="jumpToFirstError";
   });
</script>
</head>
<body>
<form class="jotform-form"  method="post" name="form_70173843495462" id="70173843495462" accept-charset="utf-8">
  <input type="hidden" name="formID" value="70173843495462" />
  <div class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group ">
          <div class="header-text httal htvam">
            <h2 id="header_1" class="form-header" data-component="header">
              STAFF REGISTRATION FORM
            </h2>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_textbox" id="id_18">
        <label class="form-label form-label-left form-label-auto" id="label_18" for="input_18">
          Name
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_18" class="form-input jf-required">
          <input type="text" id="input_18" name="q18_name" data-type="input-textbox" class="form-textbox validate[required]" size="20" value="" placeholder=" " data-component="textbox" />
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_textbox" id="id_19">
        <label class="form-label form-label-left form-label-auto" id="label_19" for="input_19">
          username
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_19" class="form-input jf-required">
          <input type="text" id="input_19" name="q19_username" data-type="input-textbox" class="form-textbox validate[required]" size="20" value="" placeholder=" " data-component="textbox" />
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_textbox" id="id_20">
        <label class="form-label form-label-left form-label-auto" id="label_20" for="input_20">
          Password
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_20" class="form-input jf-required">
          <input type="password" id="input_20" name="q20_password" data-type="input-textbox" class="form-textbox validate[required]" size="20" value="" placeholder=" " data-component="textbox" />
        </div>
      </li>
     
      <li class="form-line jf-required" data-type="control_email" id="id_4">
        <label class="form-label form-label-left form-label-auto" id="label_4" for="input_4">
          E-mail
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_4" class="form-input jf-required">
          <input type="email" id="input_4" name="q4_email" class="form-textbox validate[required, Email]" size="30" value="" placeholder=" " data-component="email" />
        </div>
      </li>
        <li class="form-line jf-required" data-type="control_textbox" id="id_7">
        <label class="form-label form-label-left form-label-auto" id="label_7" for="input_7">
          Qualification
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_7" class="form-input jf-required">
          <input type="text" id="input_7" name="q7_qualification" data-type="input-textbox" class="form-textbox validate[required]" size="20" value="" placeholder=" " data-component="textbox" />
        </div>
      </li> 
	   <li class="form-line" data-type="control_dropdown" id="id_9">
        <label class="form-label form-label-left form-label-auto" id="label_9" for="input_9"> Year Since Serving in Department </label>
        <div id="cid_9" class="form-input jf-required">
          <select class="form-dropdown" id="input_9" name="q9_yearsinceservingindepartment" style="width:150px;" data-component="dropdown">
            <option disabled selected value> -- select an option -- </option>
			 <option value="2016"> 2020 </option>
            <option value="2015"> 2019 </option>
            <option value="2014"> 2018 </option>
            <option value="2013"> 2017 </option>
		   <option value="2016"> 2016 </option>
            <option value="2015"> 2015 </option>
            <option value="2014"> 2014 </option>
            <option value="2013"> 2013 </option>
            <option value="2012"> 2012 </option>
            <option value="2011"> 2011 </option>
            <option value="2010"> 2010 </option>
            <option value="2009"> 2009 </option>
            <option value="2008"> 2008 </option>
            <option value="2007"> 2007 </option>
            <option value="2006"> 2006 </option>
            <option value="2005"> 2005 </option>
            <option value="2004"> 2004 </option>
            <option value="2003"> 2003 </option>
            <option value="2002"> 2002 </option>
            <option value="2001"> 2001 </option>
            <option value="2000"> 2000 </option>
            <option value="1999"> 1999 </option>
            <option value="1998"> 1998 </option>
            <option value="1997"> 1997 </option>
            <option value="1996"> 1996 </option>
            <option value="1995"> 1995 </option>
            <option value="1994"> 1994 </option>
            <option value="1993"> 1993 </option>
            <option value="1992"> 1992 </option>
            <option value="1991"> 1991 </option>
            <option value="1990"> 1990 </option>
            <option value="1989"> 1989 </option>
            <option value="1988"> 1988 </option>
            <option value="1987"> 1987 </option>
			<option value="1984"> 1984</option>
           </select>
        </div>
      </li>
      <li class="form-line" data-type="control_dropdown" id="id_17">
        <label class="form-label form-label-left form-label-auto" id="label_17" for="input_17">Designation </label>
        <div id="cid_17" class="form-input jf-required">
          <select class="form-dropdown" id="input_17" name="q17_designation" style="width:150px;" data-component="dropdown">
            <option disabled selected value> -- select an option -- </option>
			 <option value="Junior Research Fellow">Junior Research Fellow</option>
            <option value="Programmer Analyst">Programmer analyst</option>
            <option value="Office Assistant">Office Assistant</option>
            <option value="Assistant Programmer">Assistant Programmer</option>
		   <option value="Office Assistant cum Typist">Office Assistant cum Typist</option>
           </select>
        </div>
      </li>
       <li class="form-line" data-type="control_widget" id="id_14">
        <div id="cid_14" class=" jf-required">
          <div style="width:100%;text-align:Left;" data-component="widget-directEmbed">
            <div class="direct-embed-widgets widget-static" data-type="direct-embed" style="width:1px;height:1px;">
              <script type="text/javascript" src="https://widgets.jotform.io/mobileResponsive/mobile.responsive.js"></script>
            </div>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_11">
        <div id="cid_11" class="form-input-wide">
          <div style="margin-left:156px;" class="form-buttons-wrapper">
            <button id="input_11" type="submit" name="btn-signup" class="form-submit-button" data-component="button">
              Submit
            </button>
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>
  <script>
  JotForm.showJotFormPowered = false;
  </script>
  <input type="hidden" id="simple_spc" name="simple_spc" value="70173843495462" />
  <script type="text/javascript">
  document.getElementById("si" + "mple" + "_spc").value = "70173843495462-70173843495462";
  </script>
  <script src="https://cdn.jotfor.ms/js/widgetResizer.js?REV=3.3.16627" type="text/javascript"></script>
  <a class="btn btn-lg btn-primary btn-block" href="stafflogin.php">Login</a>
</form><!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script></body>
</html>
