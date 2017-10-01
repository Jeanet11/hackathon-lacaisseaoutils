<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>form</title>
  </head>
  <body>
    <div class="container">
      <h2 style="text-align:center;">Formulaire de contact</h2>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Entrer votre email" name="email">
      </div>
        <label for="name">Votre prénom:</label>
        <input type="text" class="form-control" id="name" placeholder="Entrer votre prénom"
        name="name">
        <br>
        <div class="form-group">
          <label for="comment">Laisser un commentaire</label>
            <textarea class="form-control" rows="8" id="comment"></textarea>
        </div>
          <button type="submit" class="btn-danger">Annuler</button>
          <button type="submit" class="btn-primary btn-default">Envoyer</button>
    </div>

  </body>
</html>

