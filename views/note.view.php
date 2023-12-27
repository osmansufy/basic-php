<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            <a href="<?php echo BASE_URI . '/notes'; ?>">Go Back</a>
        </button>
        <p class="mt-4 ">
            <?php echo $note->body; ?>
        </p>

    </div>
</main>

<?php require('partials/footer.php') ?>