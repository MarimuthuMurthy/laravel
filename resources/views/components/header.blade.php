<div>
    <h1>hello , I am header component</h1>
    <h2>{{$title}}</h2>
    <ui>
        <h2>fruits are </h2>
        <?php
            foreach($fruits as $fruit)
            {
            echo "<li>";
            echo $fruit;
            echo "</li>";
            }
        ?>
    </ui>
</div>