<center>
    <?= $this->tag->form(['user/cari', 'role' => 'form']) ?>
    <input type="text" name="nama_user" placeholder="cari nama">
    <input type="submit" value="cari">
    </form>
</center>
<?php $v171977554235606029231iterated = false; ?><?php $v171977554235606029231iterator = $data; $v171977554235606029231incr = 0; $v171977554235606029231loop = new stdClass(); $v171977554235606029231loop->self = &$v171977554235606029231loop; $v171977554235606029231loop->length = count($v171977554235606029231iterator); $v171977554235606029231loop->index = 1; $v171977554235606029231loop->index0 = 1; $v171977554235606029231loop->revindex = $v171977554235606029231loop->length; $v171977554235606029231loop->revindex0 = $v171977554235606029231loop->length - 1; ?><?php foreach ($v171977554235606029231iterator as $datas) { ?><?php $v171977554235606029231loop->first = ($v171977554235606029231incr == 0); $v171977554235606029231loop->index = $v171977554235606029231incr + 1; $v171977554235606029231loop->index0 = $v171977554235606029231incr; $v171977554235606029231loop->revindex = $v171977554235606029231loop->length - $v171977554235606029231incr; $v171977554235606029231loop->revindex0 = $v171977554235606029231loop->length - ($v171977554235606029231incr + 1); $v171977554235606029231loop->last = ($v171977554235606029231incr == ($v171977554235606029231loop->length - 1)); ?><?php $v171977554235606029231iterated = true; ?>
<?php if ($v171977554235606029231loop->first) { ?>
<table border=1 align="center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th colspan=2>Action</th>
        </tr>
    </thead>
<?php } ?>
    <tbody>
        <tr>
            <td><?= $datas->id_user ?></td>
            <td><?= $datas->nama_user ?></td>
            <td><?= $datas->email_user ?></td>
            <td> <a href="<?= $this->url->get('user/edit/' . $datas->id_user) ?>">Edit</a> </td>
            <td> <a href="<?= $this->url->get('user/hapus/' . $datas->id_user) ?>" onclick="return confirm('Apakah anda akan menghapus data ? ');">Hapus</a> </td>
        </tr>
    </tbody>
<?php if ($v171977554235606029231loop->last) { ?>
    </table>
<?php } ?>
<?php $v171977554235606029231incr++; } if (!$v171977554235606029231iterated) { ?>
    No data
<?php } ?>

<center><a href="<?= $this->url->get('/user') ?>">Input data</a> </center>
