<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <ul class="mb-4">
            <?php
            foreach ($notes as $note) {
            ?>
                <li>
                    <a href="<?php echo '/note?id=' . $note['id']; ?>" class=" px-3 py-2 rounded-md text-lg text-primary font-medium">
                        <?php echo $note['body'] ?>
                    </a>
                <?php
            }
                ?>
        </ul>

        <!-- create new note button -->
        <a href="<?php echo '/notes/create'; ?>" class="bg-blue-500 my-4 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">
            Create New Note
        </a>
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>