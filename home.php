
<?php include_once('header.php'); ?>


        <!-- Plus facile à lire -->
        <?php foreach(get_recipes($recipes, $limit) as $recipe) : ?>
            <article>
                <h3><a href="./recipes/read.php?id=<?php echo($recipe['recipe_id']); ?>"><?php echo($recipe['title']); ?></a></h3>
                <div><?php echo($recipe['recipe']); ?></div>
                <i><?php echo(display_author($recipe['author'], $users)); ?></i>
                <?php if(isset($loggedUser) && $recipe['author'] === $loggedUser['email']): ?>
                    <ul class="list-group list-group-horizontal">
                        <li class="list-group-item"><a class="link-warning" href="./recipes/update.php?id=<?php echo $recipe['recipe_id']; ?>">Editer l'article</a></li>
                        <li class="list-group-item"><a class="link-danger" href="./recipes/delete.php?id=<?php echo $recipe['recipe_id']; ?>">Supprimer l'article</a></li>

                        <?php // echo __DIR__ . '/recipes/update.php?id=' . $recipe['recipe_id']; ?>
                        
                    </ul>
                <?php endif; ?>
            </article>
            
        <?php endforeach ?>
    </div>

    <?php include_once('footer.php'); ?>
</body>
</html>