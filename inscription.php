<!DOCTYPE html>
<html>
<head>
  <title>Inscription au tournoi de jeux vidéo</title>
  
  
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    .container {
      width: 800px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      position: relative;
      left:350px;
      margin-top:50px;
      margin-bottom:10px;
    }

    .left-image,
    .right-image {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      width: 720px;
      height: 630px;
    }
    .right-image {
      right: 830px;
    }

    h1 {
      text-align: center;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="email"],
    select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type="file"] {
      margin-top: 5px;
    }

    input[type="submit"] {
      background-color: #4caf50;
      color: #fff;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
      border-radius: 4px;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <img src="game.jpg" alt="Right Image" class="right-image">
    <h1>Inscription au tournoi de jeux vidéo</h1>
    <form action="create_pgame.php" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="name">Nom du Groupe :</label>
        <input type="text" id="name" name="nom" required>
      </div>
      <div class="form-group">
        <label for="email">Adresse e-mail :</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="number">Nombre de participant du groupe :</label>
        <input type="text" id="number" name="number" required>
      </div>
      <div class="form-group">
        <label for="game">Jeu :</label>
        <select id="game" name="name_game" required>
          <option value="">Sélectionnez le jeu</option>
          <option value="Call of Duty">Call of duty</option>
          <option value="Blur">Blur</option>
          <option value="Free Fire">Free Fire</option>
          <option value="FIFA">FIFA</option>
          <option value="Escape Game">Escape Game</option>
          <!-- Ajoutez d'autres options de jeu ici -->
        </select>
      </div>
      <div class="form-group">
        <label for="team">Contact:</label>
        <input type="text" id="team" name="phone">
      </div>
      <div class="form-group">
        <label for="image">Image de groupe:</label>
        <input type="file" id="image" name="image" accept="image/*">
        <small>Sélectionnez une image (format JPG, JPEG, PNG) de taille maximale 5 Mo.</small>
      </div>
      <input type="submit" value="S'inscrire">
    </form>
  </div>
 <footer id="footer">
  <div class="container">
    <div class="footer-content">
      <div class="footer-text">
        &copy; <span class="current-year"></span> FIANARA TECH EXPO || 2023. Tous droits réservés.
      </div>
    </div>
  </div>
  <style>
    #footer {
      background-color: #333;
      color: #fff;
      padding: 15px 0;
      text-align: center;
    }

    .footer-content {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .footer-text {
      font-size: 20px;
      color:black;
    }

    .current-year {
      font-weight: bold;
    }
  </style>
  <script>
    document.querySelector('.current-year').textContent = new Date().getFullYear();
  </script>
</footer>

</body>
</html>
