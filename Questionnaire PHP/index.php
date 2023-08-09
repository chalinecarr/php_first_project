<!DOCTYPE HTML>
<html>

  <head>
    <title> CONTACTEZ MOI </title>
    <meta charset= "utf-8" />
    <meta name = "viewport" content = "with-device-width , initial-scale = 1 ">

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js"></script>
      </script>
      <link href= "http://fonts.googleapis.com/css/?family=Lato" rel="stylesheet" type="text/css">
      <link rel= "stylesheet" href = "css/style.css" >
      <script src= "js/script.js"></script>
  </head>

<body>
  <div class="container">
    <div class="divider"></div>
      <div class="heading">
        <h1>Contactez moi</h1>
      </div>

  <div class="row">
    <div class="col-lg-10 col-lg-offset-1">
      <form id = "contact-form" method = "post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" role="form">

        <div class="cards">

          <div class="col-6 mb-3">
            <label for="firstname">Prenom <span class="blue">*</span></label>
              <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Votre Prénom" value="<?php echo $firstname ?>">
              <p class="comments"> <?php echo $firstnameError ?></p>
          </div>

          <div class="col-6 mb-3">
            <label for="firstname">Nom <span class="blue">*</span></label>
              <input type="text" id="name" name="name" class="form-control" placeholder="Votre Nom" value="<?php echo $name ?>">
              <p class="comments"> <?php echo $nameError ?></p>
          </div>

          <div class="col-6 mb-3">
            <label for="email">Email <span class="blue">*</span></label>
              <input type="email" id="email" name="email" class="form-control" placeholder="Votre Email" value="<?php echo $email ?>">
              <p class="comments">  <?php echo $emailError ?></p>
          </div>

          <div class="col-6 mb-3">
            <label for="phone">Telephone</span></label>
              <input type="text" id="mobile" name="phone" class="form-control" placeholder="Votre Telephone" value="<?php echo $phone ?>">
              <p class="comments"> <?php echo $phoneError ?></p>
          </div>

        </div>
          <div class="col-md-12">
            <label for="mesage">Message <span class="blue">*</span></label>
              <textarea type="text" id="message" name="message" class="form-control" placeholder="Votre Message" rows="4"><?php echo $firstmame ?></textarea>
              <p class="comments"> <?php echo $messageError ?></p>
          </div>

          <div class="col-md-12">
              <p class="blue"> <strong>* Ces informations sont requises</strong></p>
          </div>

          <div class="col-md-12">
              <input type="submit" class="button1" value="Envoyer">
          </div>

        </form>
    </div>
  </div>
</body>


</html>
