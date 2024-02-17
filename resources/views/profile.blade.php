<form method="post" action="/profile">
    @csrf
    <label for="name">Nama:</label><br>
    <input type="text" id="nama" nama="name"><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email"><br><br>
    <button type="submit">Simpan</button>
</form>
    
