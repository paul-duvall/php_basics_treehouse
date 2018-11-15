<?php 

//Import the PHPMailer class into the global namespace
// NB These lines are copied from the example file from PHPMailer github repository
// https://github.com/PHPMailer/PHPMailer/blob/master/examples/simple_contact_form.phps
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/src/Exception.php';
require 'vendor/phpmailer/src/SMTP.php';


if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Declare variables to contain the content of each of the fields from the submitted email
    // NB trim removes whitespace from beginning and end of strings incase user accidentally included some
    $name = trim(filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
    $category = trim(filter_input(INPUT_POST, "category", FILTER_SANITIZE_STRING));
    $title = trim(filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING));
    $format = trim(filter_input(INPUT_POST, "format", FILTER_SANITIZE_STRING));
    $genre = trim(filter_input(INPUT_POST, "genre", FILTER_SANITIZE_STRING));
    $year = trim(filter_input(INPUT_POST, "year", FILTER_SANITIZE_NUMBER_INT));
    $details = trim(filter_input(INPUT_POST, "details", FILTER_SANITIZE_SPECIAL_CHARS));

    // Validate form details; checks if any of the fields are blank and returns error message
    if($name == "" || $email == "" || $category == "" || $title == ""){
      $error_message = "Please fill in the required fields: Name, Email, Category and Title";
    }
    // Checks for 'spam honey pot field' and returns error, exiting the code, if the field has been completed
    if(!isset($error_message) && $_POST["address"] != ""){
      $error_message = "Bad form input";
    }
    if(!isset($error_message) && !PHPMailer::validateAddress($email)){
      $error_message = "Invalid email address";
    }

    if(!isset($error_message)){
      // NB These lines are copied from the example file from PHPMailer github repository
      // https://github.com/PHPMailer/PHPMailer/blob/master/examples/simple_contact_form.phps
      
      $email_body = "";
      $email_body .= "Name: " . $name . "\n";
      $email_body .= "Email: " . $email . "\n";
      $email_body .= "\n\nSuggested Item\n\n";
      $email_body .= "Category: " . $category . "\n";
      $email_body .= "Title: " . $title . "\n";
      $email_body .= "Format: " . $format . "\n";
      $email_body .= "Genre: " . $genre . "\n";
      $email_body .= "Year: " . $year . "\n";
      $email_body .= "Details: " . $details . "\n";
      

      // This code is copied from the example code 
      $mail = new PHPMailer;

      //Tell PHPMailer to use SMTP
      $mail->isSMTP();
      //Enable SMTP debugging
      // 0 = off (for production use)
      // 1 = client messages
      // 2 = client and server messages
      $mail->SMTPDebug = 2;
      //Set the hostname of the mail server
      $mail->Host = 'smtp.gmail.com';
      // use
      // $mail->Host = gethostbyname('smtp.gmail.com');
      // if your network does not support SMTP over IPv6
      //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
      $mail->Port = 587;
      //Set the encryption system to use - ssl (deprecated) or tls
      $mail->SMTPSecure = 'tls';
      //Whether to use SMTP authentication
      $mail->SMTPAuth = true;
      //Username to use for SMTP authentication - use full email address for gmail
      $mail->Username = "duvallpj@gmail.com";
      //Password to use for SMTP authentication
      $mail->Password = "ccfhppthahipxrpz";

      //It's important not to use the submitter's address as the from address as it's forgery,
      //which will cause your messages to fail SPF checks.
      //Use an address in your own domain as the from address, put the submitter's address in a reply-to
      $mail->setFrom('alena@teamtreehouse.com', $name);
      $mail->addReplyTo($email, $name);
      $mail->addAddress('alena@teamtreehouse.com', 'Alena');
      $mail->Subject = 'Library suggestion from ' . $name;
      $mail->Body = $email_body;
      if ($mail->send()) {
        header("location:suggest.php?status=thanks"); 
        exit; 
      }
        $error_message = "Mailer Error: " . $mail->ErrorInfo;
    }  
}

$pageTitle = "Suggest a Media Item";
$section = "suggest";

include("inc/header.php"); ?>

<div class="section page">
  <div class="wrapper">
    <h1>Suggest a media item</h1>
    <?php if(isset($_GET["status"]) && $_GET["status"] == "thanks"){
      echo "<p>Thanks for the email! I&rsquo;ll check out your suggestion shortly!</p>";
    } else {
      if(isset($error_message)) {
        echo '<p class="message">' . $error_message . "</p>";
      } else {
        echo "<p>If you think there is something I&rsquo;m missing, let me know! Complete the form to send me an email.</p>";  
      }
      ?>
    <!-- The action field contains the destination file of the form -->
    <form method="post" action="suggest.php">
      <table>
        <tr>
          <th><label for="name">Name (required)</label>  </th>
          <!-- Note that the name field is used by the $_POST function to identify each field -->
          <td><input type="text" name="name" id="name" value="<?php if (isset($name)) echo $name;
          ?>"></td>
        </tr>
        <tr>
          <th><label for="email">Email(required)</label>  </th>
          <td><input type="text" name="email" id="email" value="<?php if (isset($email)) echo $email;
          ?>"></td>
        </tr>
        <tr>
          <th><label for="category">Category(required)</label>  </th>
          <td><select name="category" id="category">
          <option value="">Select one</option>
          <option value="Books"<?php if (isset($category) && $category == "Books") echo " selected"; ?>>Book</option>
          <option value="Movies"<?php if (isset($category) && $category == "Movies") echo " selected"; ?>>Movie</option>
          <option value="Music"<?php if (isset($category) && $category == "Music") echo " selected"; ?>>Music</option>
          </select></td>
        </tr>
        <tr>
          <th><label for="title">Title(required)</label>  </th>
          <td><input type="text" name="title" id="title" value="<?php if (isset($title)){echo $title;}
          ?>"></td>
        </tr>
        <tr>
          <th><label for="format">Format</label>  </th>
          <td><select name="format" id="format">
          <option value="">Select one</option>
          <optgroup value="Books">Book</optgroup>
              <option value="Audio">Audio</option>
              <option value="Ebook">Ebook</option>
              <option value="Hardback">Hardback</option>
              <option value="Paperback">Paperback</option>
          <optgroup value="Movies">Movie</optgroup>
              <option value="Blu-ray">Blu-ray</option>
              <option value="DVD">DVD</option>
              <option value="Streaming">Streaming</option>
              <option value="VHS">VHS</option>
          <optgroup value="Music">Music</optgroup>
              <option value="Cassette">Cassette</option>
              <option value="CD">CD</option>
              <option value="MP3">MP3</option>
              <option value="Vinyl">Vinyl</option>
          </select></td>
        </tr>
        <tr>
                <th>
                    <label for="genre">Genre</label>
                </th>
                <td>
                    <select name="genre" id="genre">
                        <option value="">Select One</option>
                        <optgroup label="Books">
                            <option value="Action">Action</option>
                            <option value="Adventure">Adventure</option>
                            <option value="Comedy">Comedy</option>
                            <option value="Fantasy">Fantasy</option>
                            <option value="Historical">Historical</option>
                            <option value="Historical Fiction">Historical Fiction</option>
                            <option value="Horror">Horror</option>
                            <option value="Magical Realism">Magical Realism</option>
                            <option value="Mystery">Mystery</option>
                            <option value="Paranoid">Paranoid</option>
                            <option value="Philosophical">Philosophical</option>
                            <option value="Political">Political</option>
                            <option value="Romance">Romance</option>
                            <option value="Saga">Saga</option>
                            <option value="Satire">Satire</option>
                            <option value="Sci-Fi">Sci-Fi</option>
                            <option value="Tech">Tech</option>
                            <option value="Thriller">Thriller</option>
                            <option value="Urban">Urban</option>
                        </optgroup>
                        <optgroup label="Movies">
                            <option value="Action">Action</option>
                            <option value="Adventure">Adventure</option>
                            <option value="Animation">Animation</option>
                            <option value="Biography">Biography</option>
                            <option value="Comedy">Comedy</option>
                            <option value="Crime">Crime</option>
                            <option value="Documentary">Documentary</option>
                            <option value="Drama">Drama</option>
                            <option value="Family">Family</option>
                            <option value="Fantasy">Fantasy</option>
                            <option value="Film-Noir">Film-Noir</option>
                            <option value="History">History</option>
                            <option value="Horror">Horror</option>
                            <option value="Musical">Musical</option>
                            <option value="Mystery">Mystery</option>
                            <option value="Romance">Romance</option>
                            <option value="Sci-Fi">Sci-Fi</option>
                            <option value="Sport">Sport</option>
                            <option value="Thriller">Thriller</option>
                            <option value="War">War</option>
                            <option value="Western">Western</option>
                        </optgroup>
                        <optgroup label="Music">
                            <option value="Alternative">Alternative</option>
                            <option value="Blues">Blues</option>
                            <option value="Classical">Classical</option>
                            <option value="Country">Country</option>
                            <option value="Dance">Dance</option>
                            <option value="Easy Listening">Easy Listening</option>
                            <option value="Electronic">Electronic</option>
                            <option value="Folk">Folk</option>
                            <option value="Hip Hop/Rap">Hip Hop/Rap</option>
                            <option value="Inspirational/Gospel">Insirational/Gospel</option>
                            <option value="Jazz">Jazz</option>
                            <option value="Latin">Latin</option>
                            <option value="New Age">New Age</option>
                            <option value="Opera">Opera</option>
                            <option value="Pop">Pop</option>
                            <option value="R&B/Soul">R&amp;B/Soul</option>
                            <option value="Reggae">Reggae</option>
                            <option value="Rock">Rock</option>
                        </optgroup>
                    </select>
                </td>
            </tr>
        <tr>
          <th><label for="details">Suggest item details</label>  </th>
          <td><textarea name="details" id="details" cols="30" rows="10"><?php 
            if(isset($details)) echo $details;
          ?></textarea>
          </td>
        </tr>
        <!-- This is a 'spam honey pot' field, which is invisible and intended to be left blank. Spam bots will, however, fill it in automatically, thus revealing that they are not actual people. -->
        <tr style="display:none">
          <th><label for="email">Address</label>  </th>
          <td><input type="text" name="address" id="address">
          <!-- NB - The following message is for people with screen readers or with CSS switched off, who might see this invisible field -->
          <p>Please leave this field blank.</p></td>
        </tr>
      </table>      
      <input type="submit" value="Send">
    </form>
    <?php } ?>
  </div>

  
</div>

<?php include("inc/footer.php"); ?>