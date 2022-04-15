<?php
require_once("header.php");
?>

<div class="container">
    <div class="row justify-content-lg-center">
        <?php
        for($i = 0; $i < 8; $i++){
        ?>
        <div class="col-lg-3 mt-3">
            <div class="card text-center text-white bg-dark">
                <div class="card-header">
                    Skill_<?php echo $i+1; ?>
                </div>
                <div class="card-body">
                    <form action="action/action.php" method="post">
                        <input type="hidden" name="saveskill" value="<?php echo $i+1; ?>">
                        <div class="mt-2">
                            <label>Skill Name</label>
                            <input class="form-control bg-dark text-white" name="skill_name" placeholder="Skill name..."
                                value="<?php $num = $i+1; echo query("SELECT * FROM skill_chart WHERE id=?", [$num])->fetch()["name"]; ?>">
                        </div>
                        <br>
                        <hr>
                        <?php
                        for($b = 1; $b < 9; $b++){
                        ?>
                        <div class="mt-3">
                            <label><?php echo $b; ?></label>
                            <select name="select_<?php echo $b; ?>" class="form-control bg-dark text-white">
                                <option value="<?php echo query("SELECT * FROM skill_chart WHERE id=?", [$num])->fetch()["lesson_".$b]; ?>">- <?php echo query("SELECT * FROM skill_chart WHERE id=?", [$num])->fetch()["lesson_".$b]; ?> -</option>
                                <?php foreach(query("SELECT * FROM lesson")->fetchAll() as $l){ ?>
                                    <option value="<?php echo $l['name']; ?>"><?php echo $l['name']; ?></option>
                                    <?php } ?>
                            </select>
                            <input class="bg-dark form-control text-white" type="text" name="point_<?php echo $b; ?>" value="<?php echo query("SELECT * FROM skill_chart WHERE id=?", [$num])->fetch()["skill_".$b]; ?>">
                        </div>

                        <?php } ?>
                        <hr>
                        <button type="submit" class="btn btn-success">Save</button>
                    </form>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div><br>
<?php
require_once("footer.php");
?>