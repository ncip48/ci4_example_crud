<form action="<?= base_url('category/' . $category['id']) ?>" method="POST">
    <input type="hidden" name="_method" value="PATCH">
    <input type="text" name="name" id="name" value="<?= $category['name'] ?>">
    <textarea name="description" id="description"><?= $category['description'] ?></textarea>
    <button type="submit">Submit</button>
</form>