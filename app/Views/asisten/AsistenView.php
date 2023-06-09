<table class="table table-striped">
    <thead>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Kelas Praktikum</th>
            <th>IPK</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($list as $l) : ?>
            <tr>
                <td>
                    <?= esc($l['NIM']); ?>
                </td>
                <td>
                    <?= esc($l['NAMA']); ?>
                </td>
                <td>
                    <?= esc($l['PRAKTIKUM']); ?>
                </td>
                <td>
                    <?= esc($l['IPK']); ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>