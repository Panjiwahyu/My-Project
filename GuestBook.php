<head>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300">
      <link rel="stylesheet" href="Style.css">
  <title>Guest Book</title>
  <style>
    	 ul li {
            display: inline-block;
            padding: 15px;
            border-radius: 10px;
            list-style: none;
          }
          ul li a{
            color: black;
            text-decoration: none;
          }
          h2 {
            font-family: 'times new roman';
          }
  </style>
</head>
<html>
<ul>
<li><a href="Awal.php"><i class="fa fa-home"></i><span>Home</span></a></li>
    </ul>
 <form method="POST" action="GuestBook2.php">  
 <table width="500" border="1" cellpadding="0" cellspacing="0" align="center">
  <tr>
    <th><h2> GUEST BOOK </h2></th>
  </tr>
  <tr>
    <td>
      <table width="500" border="0" cellpadding="6" cellspacing="6" align="center">

        <tr height="30">
          <td width="200" valign="center">Nama </td>
          <td width="10" valign="center"> : </td>
          <td><input name="namcus" type="text" size="20" /></td>
        </tr>

        <tr height="30"> 
          <td width="200" valign="center">Email</td>
          <td width="10" valign="center"> : </td>
          <td><input  name="Email" type="text" size="20"  /></td>
        </tr>

        <tr height="30"> 
          <td width="200" valign="center">message</td>
          <td width="10" valign="center"> : </td>
          <td><input  name="komentar" type="text" size="20"  /></td>
        </tr>

        <tr>
          <td align="right" colspan="2"><input type="submit" name="btnOk" value="Simpan" /></td>
          <td><input type="reset" name="btnCancel" value="Cancel" /></td>
        </tr>

      </table>
      </table>
      <br>
      <br>
      
 <table width="500" border="0" cellpadding="0" cellspacing="0" align="center">
 </table>
</form>
</center>

</html>