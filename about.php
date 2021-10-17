<?php
  // To make sure we don't need to create the header section of the website on multiple pages, we instead create the header HTML markup in a separate file which we then attach to the top of every HTML page on our website. In this way if we need to make a small change to our header we just need to do it in one place. This is a VERY cool feature in PHP!
  require "header.php";
?>

    <main>
      <div class="wrapper-main">
        <section class="section-default">
          <!--
          We can choose whether or not to show ANY content on our pages depending on if we are logged in or not. I talk more about SESSION variables in the login.inc.php file!
          -->
        <p>

        <h2><br>Welcome to the website!</br></h2>

        <p><br> I am an IB student that has created this website as part of his internal assessment for the Computer science subject!
        </br></p>

        <p><br>The main project is a web-based program which utilizes html, php and javascript in order to develop an educational website about cryptography. It will showcase the theory behind cryptography, including the different types of vryptographic methods, the basic mathematics involved , the ethics behind its use, and finally a section that allows users to encrypt strings in a textbox in different encryption styles in the section "PLAYGROUND". Remember to head to the THEORY section in order to learn all about cryptology and cryptography first.
        </br></p>
        <p><br>ENJOY THE WEBSITE!
        </br></p>
      </p>
        </section>
      </div>
    </main>

<?php
  // And just like we include the header from a separate file, we do the same with the footer.
  require "footer.php";
?>
