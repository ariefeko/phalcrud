<?= $this->tag->form(['user/update', 'role' => 'form']) ?>
 <input type="hidden" name="txt_id" value=<?php echo $id ?>>
 <label for="name">Nama</label>
 <input type="text" name="txt_nama" value="<?php echo $nama ?>">


    <label for="email">Email</label>
 <input type="text" name="txt_email" value="<?php echo $email ?>">


    <button type="submit">Save</button>
</form>