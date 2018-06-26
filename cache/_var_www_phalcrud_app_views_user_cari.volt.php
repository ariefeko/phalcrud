<center>
  Hasil Cari
</center>
<?php $v171968628900472270231iterated = false; ?><?php $v171968628900472270231iterator = $datacari; $v171968628900472270231incr = 0; $v171968628900472270231loop = new stdClass(); $v171968628900472270231loop->self = &$v171968628900472270231loop; $v171968628900472270231loop->length = count($v171968628900472270231iterator); $v171968628900472270231loop->index = 1; $v171968628900472270231loop->index0 = 1; $v171968628900472270231loop->revindex = $v171968628900472270231loop->length; $v171968628900472270231loop->revindex0 = $v171968628900472270231loop->length - 1; ?><?php foreach ($v171968628900472270231iterator as $datas) { ?><?php $v171968628900472270231loop->first = ($v171968628900472270231incr == 0); $v171968628900472270231loop->index = $v171968628900472270231incr + 1; $v171968628900472270231loop->index0 = $v171968628900472270231incr; $v171968628900472270231loop->revindex = $v171968628900472270231loop->length - $v171968628900472270231incr; $v171968628900472270231loop->revindex0 = $v171968628900472270231loop->length - ($v171968628900472270231incr + 1); $v171968628900472270231loop->last = ($v171968628900472270231incr == ($v171968628900472270231loop->length - 1)); ?><?php $v171968628900472270231iterated = true; ?>
<?php if ($v171968628900472270231loop->first) { ?>
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
<?php if ($v171968628900472270231loop->last) { ?>
    </table>
<?php } ?>
<?php $v171968628900472270231incr++; } if (!$v171968628900472270231iterated) { ?>
    No data
<?php } ?>

<center><a href="<?= $this->url->get('/user/view') ?>">Kembali ke edit data</a> </td></center>