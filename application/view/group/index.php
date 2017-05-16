Groups joined/Admin

<?php foreach ($groups as $group) { ?>
<?php echo $group->group_id; ?>
<?php echo $group->group_name; ?>
<?php echo $group->group_description; ?>
<br/>

<?php } ?>