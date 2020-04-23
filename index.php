<html>
<head>
<title>Kartu Anggota</title>
<style>
body {
    width: 50%;
    margin: 1em auto;
}
input {
    display: block;
    margin-bottom: .5em;
}
</style>
</head>
<body>

<h1>Formulir Kartu Anggota</h1>

<form action="card.php" method="post">
<input type="text" name="name" placeholder="Nama Lengkap">
<input type="text" name="address" placeholder="Alamat">
<input type="text" name="birth_place" placeholder="Tempat Lahir">
<input type="date" name="birth_date" placeholder="Tanggal Lahir">
<button type="submit">Kirim</button>
</form>

</body>
</html>