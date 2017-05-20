{extends file="_templates/layout.tpl"}

{block name=title}Groups{/block}
{block name=body}
Groups joined/Admin

{foreach $groups as $group}
{$group->group_id}
{$group->group_name}
{$group->group_description}
<br/>

{/foreach}

{/block}