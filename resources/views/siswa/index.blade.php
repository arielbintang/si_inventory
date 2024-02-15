<a href="{{ route('siswa.create') }}" >TAMBAH Siswa</a>
<br />
<form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">                    
 @csrf
<input type="text" name="nama">
<input type="submit" value="simpan">

</form>

<form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">                    
 @csrf
<input type="text" name="nama" placeholder="nama">
<br />
<input type="text" name="alamat" placeholder="alamat">
<br />
<input type="text" name="hobi" placeholder="hobi">
<br />
<input type="submit" value="simpan">