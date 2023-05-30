<a href="<?= base_url('category/new') ?>">Create</a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Slug</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($categories as $category) : ?>
            <tr>
                <td><?= $category['id'] ?></td>
                <td><?= $category['name'] ?></td>
                <td><?= $category['slug'] ?></td>
                <td><?= $category['description'] ?></td>
                <td>
                    <a href="<?= base_url('category/' . $category['id'] . '/edit') ?>">Edit</a>
                    <form action="<?= base_url('category/' . $category['id']) ?>" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <a onclick="this.closest('form').submit(); return false;" href="#">Delete</a>
                    </form>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>