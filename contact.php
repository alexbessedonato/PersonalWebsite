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
          <?php
          echo "In case of any issues with the website contact: alexbessedonato03@gmail.com";
          ?>
        </section>
      </div>
    </main>

    <main>
      <div class="wrapper-main">
        <section class="section-default">
          <!--
          We can choose whether or not to show ANY content on our pages depending on if we are logged in or not. I talk more about SESSION variables in the login.inc.php file!
          -->
          <?php
          echo "In case of any ideas to improve this website, please leave a comment in the text box below :)";
          ?>
        </main>
                <!--
                We can choose whether or not to show ANY content on our pages depending on if we are logged in or not. I talk more about SESSION variables in the login.inc.php file!
                -->
                <main>
                  <div class="wrapper-main">
                    <section class="section-default">
                      <!--
                      We can choose whether or not to show ANY content on our pages depending on if we are logged in or not. I talk more about SESSION variables in the login.inc.php file!
                      -->

                      <h2>SUBMISSIONS</h2>
                      <form>
                          <textarea cols="50" rows="4" name="link"></textarea>
                          <input type="submit" value="Submit">
                      </form>


                    </section>
                  </div>
                </main>

<?php
  // And just like we include the header from a separate file, we do the same with the footer.
  require "footer.php";
?>
