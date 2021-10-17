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
          <h2> PLAYGROUND </h2>


          <?php
          if(isset($_SESSION['id'])) {
            ?>
            <h3> TYPE OF Encryption: OPENSSL </h3>
            <?php
            echo '<form method=post>
              <input type=text name=PreOpenSSL placeholder=Input>
              </form>';

              if(isset($_POST['PreOpenSSL'])) {
                $PreOpenSSL = htmlspecialchars($_POST['PreOpenSSL']);
                $ciphering = "AES-128-CTR";
                $iv_length = openssl_cipher_iv_length($ciphering);
                $options = 0;

                $encryption_iv = '1234567891011121';
                $encryption_key = 'OpenSSLKey';
                $PostOpenSSL = openssl_encrypt($PreOpenSSL, $ciphering,
                              $encryption_key, $options, $encryption_iv);

              echo "<textarea title = 'textarea' name='delay' cols='50' rows='5' id='delay'>".$PostOpenSSL."</textarea>";
            }
            else {

              echo "<textarea title= 'textarea' name='delay' cols='50' rows='5' id='delay'>no input received</textarea>";
            }

            ?>
            <h3> TYPE OF Encryption: HASH (ripmed160) </h3>
            <?php
            echo '<form method=post>
              <input type=text name=PreHash placeholder=Input>
              </form>';

              if(isset($_POST['PreHash'])) {

                $PostHash = hash('ripemd160', 'PreHash');

              echo "<textarea title = 'textarea' name='delay' cols='50' rows='5' id='delay'>".$PostHash."</textarea>";
            }
            else {

              echo "<textarea title= 'textarea' name='delay' cols='50' rows='5' id='delay'>no input received</textarea>";
            }

            ?>
            <h3> TYPE OF Encryption: BLOWFISH </h3>
            <?php
            echo '<form method=post>
              <input type=text name=PreBlow placeholder=Input>
              </form>';

              if(isset($_POST['PreBlow'])) {
                $PreBlow = htmlspecialchars($_POST['PreBlow']);
                $ciphering = "CBL-567-AES";
                $iv_length = openssl_cipher_iv_length($ciphering);
                $options = 0;

                $encryption_iv = '985746785910125';
                $encryption_key = 'PreBlow';
                $PostBlow = cryptblow_encrypt($PreBlow, $ciphering,
                              $encryption_key, $options, $encryption_iv);

              echo "<textarea title = 'textarea' name='delay' cols='50' rows='5' id='delay'>".$PostBlow."</textarea>";
            }
            else {

              echo "<textarea title= 'textarea' name='delay' cols='50' rows='5' id='delay'>no input received</textarea>";
            }
            ?>
            <h3> TYPE OF Encryption: AES </h3>

            <?php
            echo '<form method=post>
              <input type=text name=PreAES placeholder=Input>
              </form>';

              if(isset($_POST['PreAES'])) {
                // DEFINE our cipher
                define('AES_256_CBC', 'aes-256-cbc');

                // Generate a 256-bit encryption key
                $encryption_key = openssl_random_pseudo_bytes(32);

                // Generate an initialization vector
                // This must be available for decryption as well
                $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length(AES_256_CBC));

                // Create some data to encrypt
                $data = 'PreAES';
                echo "Before encryption: $data\n";

                // Encrypt $data using aes-256-cbc cipher with the given encryption key
                $encrypted = openssl_encrypt($data, AES_256_CBC, $encryption_key, 0, $iv);
                echo "Encrypted: $encrypted\n";
                $encrypted = $encrypted . ':' . base64_encode($iv);

              echo "<textarea title = 'textarea' name='delay' cols='50' rows='5' id='delay'>".$encrypted."</textarea>";
            }
            else {

              echo "<textarea title= 'textarea' name='delay' cols='50' rows='5' id='delay'>no input received</textarea>";
            }
          }
          else {
            echo "you need to be logged in";
          }

          ?>




        </section>
      </div>
    </main>

<?php
  // And just like we include the header from a separate file, we do the same with the footer.
  require "footer.php";
?>
