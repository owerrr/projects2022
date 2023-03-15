
<h1>Ogłoszenia</h1>

    <?php foreach($data_view as $row) : ?>
        <div class="card">
            <div class="card-header">
                <h3><?php echo $row['title'] ?></h3>
                <span><?php echo $row['create_date'] ?><br/>
                    <?php if(isset($_SESSION["user_data"]) && $row["user_id"] == $_SESSION["user_data"]["id"]): ?>
                        <input type="button" class="btn btn-danger" value="USUŃ" onclick="handleEvent('delete', <?php echo $row['id'] ?>)">
                        <input type="button" class="btn btn-primary" value="EDYTUJ" onclick="handleEvent('openEdit', <?php echo $row['id'] ?>, this)">
                    <?php endif; ?>
                </span>
            </div>
            <div class="card-body">
                <p class="card-text"><?php echo $row['content'] ?></p>
            </div>
        </div>
        <br/>
    <?php endforeach ?>