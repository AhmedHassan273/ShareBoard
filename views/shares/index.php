<div>
    <?php if(isset($_SESSION['is_logged_in'])) : ?>
    <a id="sharebtn" class="btn btn-success" href="<?php ROOT_URL ;?>shares/add">Share Now</a>
    <?php endif; ?>
    <?php foreach ($viewmodel as $item): ?>
        <div class="well">
            <h3><?php echo $item['title']; ?></h3>
            <br>
            <small><?php echo "Created at: " . $item['create_date']; ?></small>
            <hr>
            <p><?php echo $item['body']; ?></p>
            <a href="<?php echo $item['link']; ?>" class="btn btn-danger" target="_blank">Visit</a>
        </div>
    <?php endforeach; ?>
</div>