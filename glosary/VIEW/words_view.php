<?php
if ($words) {
    foreach ($words as $word): ?>
        <li>
            <?php echo $word['WORD']; ?>
            <?php echo $word['TRANSLATION']; ?>
            <?php echo $word['NAME']; ?>
        </li>
    <?php endforeach;
} else {
    echo "No se encontraron palabras.";
}
 

?>