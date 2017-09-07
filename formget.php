<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Form Using the method GET</title>
<link href="css/form.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="container">
<header>
  <h1>Feedback - Form Using the method GET</h1>
</header>
<section>
<form method="get" action="formgetprocess.php">
 <fieldset>
        <legend>Personal Details</legend>
        <p>
            <label for="firstname">First name</label>
            <input type="text" name="firstname" id="firstname" />   
        </p>   
        <p>

            <label for="surname">Surname</label>
            <input type="text" name="surname" id="surname" />   
        </p>    
        <p>
            <label for="Email">Email</label>
            <input type="email" name="email" id="Email" />   
        </p>  
        <p>
            <label for="Tel">Contact Telephone</label>
            <input type="tel" name="telephone" id="Tel" />   
        </p>  
        <p>
            <label for="mem">Membership Number</label>
            <input type="number" name="membershipNo" id="mem" />   
        </p> 
        <p>
        <span class="label">Gender</span>

          <label class="inline" for="Male">Male</label>
            <input name="gender" type="radio" class="inline" id="Male" value="m" />
          <label class="inline" for="Female">Female</label>
            <input name="gender" type="radio" class="inline" id="Female" value="f" />
        </p>
    </fieldset>
    <fieldset>
        <legend>Feedback</legend>

        <p>
            <label for="comments">Leave us your comments</label>
            <textarea name="comments" id="comments"></textarea>
        </p>
     </fieldset>
     <fieldset>
        <legend>Marketing</legend>

        <p>
            <label for="mailingList">Join mailing list</label>
            <input type="checkbox" name="list" id="mailingList" value="1" />
        </p>
        <p>
            <label for="marketing">How did you hear about us?</label>
            <select name="marketing" id="marketing">
              <option value="Web">Web</option>
              <option value="Friend">Friend</option>
              <option value="Other">Other</option>
            </select>
        </p>
    </fieldset>
    <p class="right">
    	<input type="submit" value="Send" class="sendButton" />
    </p>

</form>
</section>
<footer>
&copy; mustbebuilt 2017
</footer>
</div>
</body>
</html>
