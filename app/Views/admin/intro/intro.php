<h1><?= $title ?></h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Title Content</th>
            <th>Description</th>
            <th>Image</th>
            <th>Content</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($intro as $row) : ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['title'] ?></td>
                <td><?= $row['title_content'] ?></td>
                <td><?= $row['description'] ?></td>
                <td><?= $row['img'] ?></td>
                <td><?= $row['content'] ?></td>
                <td><?= $row['status'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>