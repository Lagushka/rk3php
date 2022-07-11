
    <h2>Комментарии</h2>
    <ul>
    <?php

    foreach($comments as $comment){
        echo "<li>" . $comment->getText() . " <a href='/student/321/OOP/www/comments/".$comment->getId()."/edit'>Редактировать</a></li>";
    }
    ?>
    </ul>

       