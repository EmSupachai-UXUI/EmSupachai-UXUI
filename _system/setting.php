<?php 

// SELECT Setting home page
$setting_home = query("SELECT * FROM setting_home WHERE id=?", [1])->fetch();
// SELECT Setting prehome page
$setting_prehome = query("SELECT * FROM setting_prehome WHERE id=?", [1])->fetch();
// SELECT Setting rank page
$setting_rank = query("SELECT * FROM setting_rank WHERE id=?", [1])->fetch();