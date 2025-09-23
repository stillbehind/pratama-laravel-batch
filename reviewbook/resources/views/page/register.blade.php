<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Buat Account Baru</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 40px;
    }
    form {
      max-width: 500px;
      margin: auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 8px;
    }
    label {
      display: block;
      margin-top: 15px;
      font-weight: bold;
    }
    input[type="text"],
    select,
    textarea {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      box-sizing: border-box;
    }
    .gender,
    .language {
      margin-top: 5px;
    }
    .gender input,
    .language input {
      margin-right: 5px;
    }
    button {
      margin-top: 20px;
      padding: 10px 20px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    button:hover {
      background-color: #0056b3;
    }
  </style>
</head>

<body>

  <h2>Buat Account Baru</h2>
  
  <form action="/welcome" method="POST">
  @csrf
<label for="first_name">First Name:</label>
    <input type="text" id="first_name" name="first_name" value="">

    <label for="last_name">Last Name:</label>
    <input type="text" id="last_name" name="last_name" value="">

    <label>Gender:</label>
    <div class="gender">
      <input type="radio" id="man" name="gender" value="Man">
      <label for="man">Man</label>
      <input type="radio" id="woman" name="gender" value="Woman">
      <label for="woman">Woman</label>
      <input type="radio" id="other" name="gender" value="Other">
      <label for="other">Other</label>
    </div>

    <label for="nationality">Nationality:</label>
    <select id="nationality" name="nationality">
      <option value="Indonesia" selected>Indonesia</option>
      <option value="Malaysia">Malaysia</option>
      <option value="Singapore">Singapore</option>
      <option value="Other">Other</option>
    </select>

  <label>Language Spoken:</label>
    <div class="language">
      <input type="checkbox" id="bahasa" name="language[]" value="Bahasa Indonesia">
      <label for="bahasa"> Bahasa Indonesia</label><br>
      <input type="checkbox" id="english" name="language[]" value="English">
      <label for="english">English</label><br>
      <input type="checkbox" id="arabic" name="language[]" value="Arabic">
      <label for="arabic">Arabic</label><br>
      <input type="checkbox" id="japanese" name="language[]" value="Japanese">
      <label for="japanese">Japanese</label>
    </div>

    <label for="bio">Bio:</label>
    <textarea id="bio" name="bio" rows="4" placeholder="Tulis sedikit tentang dirimu..."></textarea>

    <button type="submit">Sign Up</button>
  </form>

</body>
</html>
