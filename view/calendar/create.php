<form class="" action="createSave" method="post">
  <p>naam</p>
  <input type="text" name="person" required>
  <p>dag</p>
  <input type="number" name="day" min="1" max="31" required>
  <p>maand</p>
  <select name="month" required>
    <option value="" selected></option>
    <option value="1">Januari</option>
    <option value="2">Februari</option>
    <option value="3">Maart</option>
    <option value="4">April</option>
    <option value="5">Mei</option>
    <option value="6">Juni</option>
    <option value="7">Juli</option>
    <option value="8">Augustus</option>
    <option value="9">September</option>
    <option value="10">Oktober</option>
    <option value="11">November</option>
    <option value="12">December</option>
  </select>
  <p>jaar</p>
  <input type="number" name="year" min="1900" max="<?php echo date('Y');?>"><br><br>
  <button type="submit" name="submit">Toevoegen</button>
</select>
</form>
