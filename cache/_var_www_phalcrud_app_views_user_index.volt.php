<br>
<?= $this->tag->form(['/user/create', 'role' => 'form']) ?>
<p>
 <label for="name">Nama</label>
 <input type="text" name="txt_nama">
</p>
<p>
    <label for="email">Email</label>
 <input type="text" name="txt_email">
</p>

    <button type="submit">Save</button>
</form>

<?php
echo Phalcon\Tag::linkTo("user/view", "Lihat Data");
?>