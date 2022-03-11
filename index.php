<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form action="#" method="post">
      <input type="text" name="name" placeholder="Name..." id="name-form">
      <input type="email" name="email" placeholder="Email Address..." id="email-form"><br>
      <input type="text" name="comment" placeholder="Comment..." id="comment-form"><br>
      <select name="type" id="type-form">
        <option value="query">Query</option>
        <option value="feedback">Feedback</option>
        <option value="complaint">Complaint</option>
        <option value="other">Other</option>
      </select>
      <button type="submit" name="submit" id="comment-submit">Submit</button>
    </form><br><br>

    <?php
      if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $type = $_POST['type'];
        $comment = $_POST['comment'];
     ?>
     <div id="customer">
       <?php if (isset($_POST['submit'])) {} ?>
         <h4 id="name"><?php echo $name; ?></h4>
         <h4 id="email"><?php echo $email; ?></h4><br>
         <h4 id="type"><?php echo $type . ":";?></h4><br>
         <h4 id="comment"><?php echo $comment; ?></h4>
       <?php } ?>
    </div>
  </body>
</html>
