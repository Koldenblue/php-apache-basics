<?php echo 'hello' ?>
Hi <?php echo htmlspecialchars($_POST['name']); ?>.
You are <?php echo (int)$_POST['age']; ?> years old.

<?php if ((int)$_POST['age'] == 0): ?>
How are you typing? 
 <?php elseif ((int)$_POST['age'] == 1): ?>
Congrats on 1 year
<?php else: ?>
you are not a baby
<?php endif; ?>

<br />
  <?php echo 'The age entered is of the ';
     echo gettype($_POST['age']);
      echo ' type.';
       ?>
<br />