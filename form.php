<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman | SignUp</title>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap");
      html,
      body {
        scroll-behavior: smooth;
      }

      body {
        font-family: rubik, sans-serif;
        background-color: #8cabff;
        margin: 25px;
        padding: 0;
      }

      h1 {
        color: #35155d;
        font-size: 3rem;
        text-align: center;
        text-transform: uppercase;
      }

      h2 {
        padding: -50em;
        color: #512b81;
        text-align: center;
        text-transform: lowercase;
        padding-inline-start: 10px;
        margin-top: -35px;
        font-size: 25px;
      }

      form {
        font-family: poppins, sans-serif;
        max-width: 500px;
        margin: auto;
        background: #4477ce;
        opacity: 85%;
        padding: 6vh;
        height: 64rem;
        border-radius: 45px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      }

      input[type="text"],
      select,
      textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 2px solid #ccc;
        border-radius: 15px;
        font-family: poppins, sans-serif;
        text-size-adjust: 20px;
      }

      input[type="radio"],
      input[type="checkbox"] {
        margin-right: 5px;
      }

      input[type="submit"] {
        text-decoration: none;
        margin-right: 2px;
        background-color: #1f6e8c;
        color: #fff;
        padding: 9px 18px;
        border: none;
        border-radius: 7px;
        cursor: pointer;
        display: inline-block;
        margin-top: 20px;
        text-transform: uppercase;
      }

      input[type="submit"]:hover {
        background-color: #0e2954;
      }

      a {
        text-decoration: none;
        margin-right: 2px;
      }

      .signIn-button {
        background-color: #1F6E8C;
        color: #fff;
        padding: 9px 18px;
        border: none;
        border-radius: 7px;
        cursor: pointer;
        display: inline-block;
        margin-top: 20px;
        text-transform: uppercase;
      } 

      .signIn-button:hover {
        background-color: #0E2954;
      }

      .back-button {
        background-color: transparent;
        color: #fff;
        padding: 9px 18px;
        border: none;
        border-radius: 7px;
        cursor: pointer;
        display: inline-block;
        margin-top: 20px;
        text-transform: uppercase;
      }

      .back-button:hover {
        background-color: #0e2954;
      }

      .btn-input {
        align-items: center;
        text-align: center;
        justify-content: center;
        size: 100px;
      }

      input:focus::placeholder {
        color: transparent;
      }

      @media (max-width: 600px) {
        h1 {
          margin-top: 40px;
          color: #35155d;
          font-size: 30px;
          text-align: center;
          text-transform: uppercase;
        }

        h2 {
          padding: -50em;
          color: #512b81;
          text-align: center;
          text-transform: lowercase;
          padding-inline-start: 10px;
          margin-top: -20px;
          font-size: 25px;
        }
      }
    </style>
  </head>
  <body>
    <h1>Buat account Baru</h1>
    <h2>Sign up form</h2>
    <br />
    <form action="welcome.php" method="POST">
      <label for="First-nama">First Name :</label><br /><br />
      <input
        type="text"
        name="First-nama"
        id="First-nama"
        placeholder="Isi dulu bre"
        required
      /><br /><br />
      <label for="last-name">Last Name :</label><br /><br />
      <input
        type="text"
        name="last-name"
        id="last-name"
        placeholder="Ini juga bre janlup"
        required
      />
      <br /><br />
      <label for="gender">Gender</label><br /><br />
      <input type="radio" name="input-gender" id="gender-option1" value="Laki-Laki" required />
      <label for="gender-option1">Lanang</label><br />
      <input type="radio" name="input-gender" id="gender-option2" value="Perempuan"  required />
      <label for="gender-option2">cwek</label><br />
      <input type="radio" name="input-gender" id="gender-option3" value="Opsional" required/>
      <label for="gender-option3">Opsional</label>
      <br /><br />
      <label for="negara">Nationality</label><br /><br />
      <select name="negara" id="dropdown-negara" required>
        <option value="konoha">konoha</option>
        <option value="bekasi">Bekasi</option>
        <option value="dengklok-selatan" selected>Dengklok selatan</option>
        <option value="javanese">Jawa</option>
        <option value="indonesia">indonesia</option>
      </select>
      <br /><br />
      <label for="input-bahasa">Language spoken</label><br /><br />
      <input type="checkbox" name="bahasa[]" id="input-bahasa" value="jawir"/>jawir<br />
      <input type="checkbox" name="bahasa[]" id="input-bahasa" value="Dengklokske"/>Dengklokske<br />
      <input type="checkbox" name="bahasa[]" id="input-bahasa" value="suwir"/>suwir <br />
      <input type="checkbox" name="bahasa[]" id="input-bahasa" value="konoha"/>konoha <br />
      <input type="checkbox" name="bahasa[]" id="input-bahasa" value="indonesia"/>indonesia <br />
      <input type="checkbox" name="bahasa[]" id="input-bahasa" value="zimbabwe"/>zimbabwe <br />
      <br /><br />
      <label for="bio-textarea">Bio</label><br /><br />
      <textarea
        name="bio-textarea"
        id="bio"
        cols="30"
        rows="5"
        placeholder="Isi aku dong mas..."
        fixed
        required
      ></textarea>
      <br /><br />
      <div class="btn-input">
        <!-- <a href="welcome.html" class="signIn-button">Sign In</a> -->
        <input type="submit" value="Sign in" />
        <a href="index.html" class="back-button">Kembali</a>
      </div>
    </form>
  </body>
</html>
