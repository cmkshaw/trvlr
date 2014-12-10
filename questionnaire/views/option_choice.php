<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>trvlr . travel, canada, cool things to do, toronto, victoria, vancouver</title>
<?php include 'generalLinks.php'; ?>
</head>
<body>
<div id="main_container">
    <?php include 'header.php'; ?>
  <section id="choose">
    <h1>Here are some <? echo $categoryName;?> options:</h1>
    <? // this block of code puts in the option selection divs - Ryan
     foreach ($options as $option) : ?>
     <!-- Get name-value pairs used to load the next page in the sequence -->
     <a href="index.php?optionID=<? echo $option['OptionID']; ?>&optionName=<? echo $option['Name'];
             ?>&newPage=ActivityResult">
          <div class="box" id="<? echo $option['Name'];?>">
            <? echo $option['Name'];
            ?>
          </div></a>
                <?endforeach; // end of option selection divs block of code -Ryan ?>
        
  </section>
  <!--choose-->
  <section id="howitworks">
  <aside id="about"> <!--about/howitworks-->
    <h2>how it works.</h2>
    <br/>
      <p> Venturing to a new city and in need advice from local experts?</p>
      <p> Trvlr seeks to find out what you're all about, and matches you up with things to do in cities you've never been.
        Content added by locals ensures you'll have the inside scoop on the best places to check out.</p>
      &nbsp;&nbsp;&nbsp;
      <p>Simply click through our short questionnaires and find something to do that suits you!</p>
  </aside>
  <!--about-->
  <div id="form">
      <h2>Register now.</h2>
      <br/>
      <form>
        <p style="padding-bottom:5px;">First Name:</p>
        <input type="text"><br/>
        <p style="padding-bottom:5px;">Last Name:</p>
        <input type="text">
        <br/>
        <p>Are you over 13 years old?:</p>
        <br/>
        <p style="float:left; padding-top:5px;">Yes</p>
        <input type="checkbox" name="consent" value="yes" class="checkbox">
        <p style="float:left; padding-top:5px;">No</p>
        <input type="checkbox" name="consent" value="no" class="checkbox">
       
        <br/>
        <input type="submit" name="submit" value="Send" id="submit" />
        </p>
      </form>
    </div>
    </section>
  <section id="team"> <!--team-->
    
    <h4>team trvlr.</h4>
    <p>We are four web developers in Toronto, Ontario who love keeping busy.</p>
    <div class="port"><img src="images/Caroline_03.jpg" width="120" height="120" alt="Caroline"></div>
    <div class="port"><img src="images/Orlando_03.jpg" width="120" height="120" alt="Orlando"></div>
    <div class="port"><img src="images/Alicia_03.jpg" width="120" height="120" alt="Alicia"></div>
    <div class="port"><img src="images/Ryan_03.jpg" width="120" height="120" alt="Ryan"></div>
    </p>
    <aside id="moreinfo"><!--aside for careeers-->
      <h6>Interested in working for us?</h6>
      &nbsp; &nbsp;
      <p>We want you. In a professional way.</p>
      <p>Our office is located in sunny/snowy/rainy Toronto, Ontario. </p>
      &nbsp; &nbsp;
      <h6>Check out our <a href="#">careers page</a> for job postings.</h6>
    </aside>
  </section>
  <!--team-->
    
  <?php include 'footer.php'; ?>
  
</div>
<!--maincontainer-->
</body>
</html>
