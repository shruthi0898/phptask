
<html>
<body>
  <form action="insertfin.php" enctype="multipart/form-data" method="post">
  <table style="border-collapse: collapse; font: 12px Tahoma;" border="1" cellspacing="5" cellpadding="5">
<tbody>
  <tr>
<td> <label for="inputName">Name</label>
    <input type="text" name="name"  placeholder="Name"></td></tr>
    <tr>
<td> <label for="inputName">email</label>
    <input type="text" name="email" placeholder="email"></td></tr>
    <tr>
<td> <label for="inputName">contact</label>
    <input type="text" name="contact" placeholder="contact"></td></tr>
    <tr><td>
	<input type="file" name="files[]" multiple="" />
	<input type="submit"/></td></tr>
</form>
</body>
</html>