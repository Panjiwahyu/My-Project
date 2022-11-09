<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>contact us</title>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300">
      <link rel="stylesheet" href="Style.css">
      <style>
    	 ul li {
            display: inline-block;
            padding: 15px;
            border-radius: 10px;
            list-style: none;
          }
          ul li a{
            color: black;
            text-decoration: none;
          }
          h2 {
            font-family: 'times new roman';
          }
     </style>
</head>
<body>
<ul>
      <li><a href="Awal.php"><i class="fa fa-home"></i><span>Home</span></a></li>
</ul>
<link href="contact.css" rel="stylesheet">
<div class="fcf-body">
    <div id="fcf-form">
    <center>
    <h3 class="fcf-h3">Contact us</h3>
    </center>
    <form id="fcf-form-id" class="fcf-form-class" method="post" action="ContactUs2.php">
        <div class="fcf-form-group">
            <label for="Name" class="fcf-label">Your name</label>
            <div class="fcf-input-group">
                <input type="text" id="Name" name="Name" class="fcf-form-control" required>
            </div>
        </div>
        <div class="fcf-form-group">
            <label for="Email" class="fcf-label">Your email address</label>
            <div class="fcf-input-group">
                <input type="email" id="Email" name="Email" class="fcf-form-control" required>
            </div>
        </div>
        <div class="fcf-form-group">
            <label for="Message" class="fcf-label">Your message</label>
            <div class="fcf-input-group">
                <textarea id="Message" name="Message" class="fcf-form-control" rows="6" maxlength="3000" required></textarea>
            </div>
        </div>
        <div class="fcf-form-group">
            <button type="submit" id="fcf-button" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block">Send Message</button>
        </div>
    </form>
    </div>
</div>
</body>
</html>