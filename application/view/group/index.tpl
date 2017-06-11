{extends file="_templates/layout.tpl"}

{block name=title}Groups{/block}
{block name=body}
<a href="{URL}group/create"><i class="fa fa-plus" aria-hidden="true"></i> Create group</a>
<br/><br/>

<table class="messagetable">
	{foreach $groups as $group}
	<tr>
		<td>
			{}
		</td>
		<td>
			<a href="{URL}group/id/{$group->group_id}">{$group->group_name}</a> ({}) <br/>
			{$group->group_description}
		</td>
		<td>
			{}
			Posts
		</td>
		<td>
			{}
			Members
		</td>
		<td>
			Last active post title with comment
		</td>
	</tr>
	{/foreach}
</table>

{/block}