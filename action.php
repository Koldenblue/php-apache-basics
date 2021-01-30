<?php echo 'hello' ?>
Hi <?php echo htmlspecialchars($_POST['name']); ?>.
You are <?php echo (int)$_POST['age']; ?> years old.

<?php if ((int)$_POST['age'] == 0) ?>
How are you typing? 