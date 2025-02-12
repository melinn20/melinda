<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kalkulator Weton Jawa</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      background: #f4f4f9;
      color: #333;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .container {
      text-align: center;
      background: #fffbf1;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      max-width: 400px;
      width: 90%;
    }
    h1 {
      font-size: 1.8em;
      color: #6b4226;
    }
    label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
    }
    select, button {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    button {
      background: #6b4226;
      color: white;
      cursor: pointer;
      transition: background 0.3s ease;
    }
    button:hover {
      background: #55331e;
    }
    .result {
      margin-top: 20px;
      font-size: 1.2em;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Kalkulator Weton Jawa</h1>
    <label for="hari">Pilih Hari Lahir:</label>
    <select id="hari">
      <option value="5">Minggu</option>
      <option value="4">Senin</option>
      <option value="3">Selasa</option>
      <option value="7">Rabu</option>
      <option value="8">Kamis</option>
      <option value="6">Jumat</option>
      <option value="9">Sabtu</option>
    </select>
    <label for="pasaran">Pilih Pasaran:</label>
    <select id="pasaran">
      <option value="8">Kliwon</option>
      <option value="5">Legi</option>
      <option value="9">Pahing</option>
      <option value="7">Pon</option>
      <option value="4">Wage</option>
    </select>
    <button onclick="hitungWeton()">Hitung Weton</button>
    <div class="result" id="result">Masukkan data di atas untuk mengetahui wetonmu.</div>
  </div>

  <script>
    function hitungWeton() {
      const hari = parseInt(document.getElementById("hari").value);
      const pasaran = parseInt(document.getElementById("pasaran").value);
      const neptu = hari + pasaran;

      const resultDiv = document.getElementById("result");
      resultDiv.textContent = `Jumlah Neptu Wetonmu adalah: ${neptu}`;
    }
  </script>
</body>
</html>
