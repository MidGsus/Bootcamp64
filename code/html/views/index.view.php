<?php require('partials/head.php'); ?>

<h1>Submit Your Name</h1>

<form method="POST" action="/names">
    <input name="name">
    <button type="submit">Submit</button>
</form>

<?php foreach ($names as $name) : ?>
    <li><?php echo $name->name; ?></li>
<?php
endforeach;
?>


<?php require('partials/footer.php'); ?>
