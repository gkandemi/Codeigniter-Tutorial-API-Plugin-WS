<?php foreach ($rows as $row){ ?>
    <tr>
        <td><?php echo $row->id; ?></td>
        <td><?php echo $row->ad_soyad; ?></td>
        <td><?php echo $row->email; ?></td>
        <td><?php echo $row->telefon; ?></td>
        <td><?php echo $row->adres; ?></td>
        <td><a href="#">[Sil]</a>|<a href="#">[Düzenle]</a></td>
    </tr>
<?php } ?>