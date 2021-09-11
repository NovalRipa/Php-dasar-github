

<html>
<head>
 <title> Registrasi Siswa Baru </title>
 <link href ="css_submit.css" rel="stylesheet" type="text/css">
 
 
</head>
<body style = 'margin : 20px; font : 16px arial;'>
 <center>
 <p> Registrasi Siswa Baru </p>
 
 <form method = 'POST' action = 'aksi_tambah.php'>
 <table border = '1' cellspacing = '1' cellpadding = '10'
 style = 'border : #aaa; color: #101; font-family : arial; fot-size : 12px;'>
 <tr>
  <td> Nama Siswa </td>
  <td width = '5' align = 'center'> : </td>
  <td> <input type = 'text' placeholder='Nama Siswa' name = 'nama' /> </td>
  </tr>
 <tr>
  <td> Jenis Kelamin </td>
  <td align = 'center'> : </td>
  <td> <input type = 'text' placeholder='Jenis Kelamin' name = 'Jenis_Kelamin' /> </td>
  </tr>
 <tr>
  <td> Kelas </td>
  <td align = 'center'> : </td>
  <td> <input type = 'text' placeholder='Kelas' name = 'kelas' /> </td>
  </tr>
 <tr>
  <td> Alamat </td>
  <td width = '5' align = 'center'> : </td>
  <td> <textarea name = 'alamat' placeholder='Alamat' ></textarea> </td>
  </tr>
  
 
  
 <tr>
 <td colspan = '3' align = 'center'>
 <input type = 'submit' name = 'submit' value = 'Submit'/>
 <input type = 'reset' name = 'Reset' value = 'Reset' /> </td>
 </tr>
</table>
<a href = '1.php'> Ripa Noval Kh</a>
</form>
</body>
</html> 