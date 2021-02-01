<?php
  echo <<<This_is_a_heredoc_identifier
    This string in between the identifiers will be printed.
  This_is_a_heredoc_identifier;
?>

<p>
  <?php
    echo <<<'This_is_a_nowdoc'
      While heredocs resemble double quotes, nowdocs resemble single quotes. Meaning that chars can't be escaped.
    This_is_a_nowdoc;
  ?>
</p>

<p>
  <?php
    $name = 'Kevin';
    echo "<p>My name is ${name}.</p>";
    echo "My bane is $name.";
  ?>
</p>
