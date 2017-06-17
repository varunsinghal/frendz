{extends file="_templates/layout.tpl"}

{block name=title}Groups{/block}
{block name=body}
<a href="{URL}group/create"><i class="fa fa-plus-circle" aria-hidden="true"></i> Create group</a>
<br/><br/>

<table class="messagetable">
	{foreach $groups as $group}
	<tr>
		<td>
			<a href="{URL}group/id/{$group->group_id}">{$group->group_name}</a>		
		</td>
		<td>
			{$group->group_description}
		</td>
		<td>
			{if $group->post_title}
			<i class="fa fa-sticky-note-o" aria-hidden="true"></i> {$group->post_title}<br/>
			{if $group->comment_title}
			<i class="fa fa-comment" aria-hidden="true"></i> {$group->comment_title}
			{/if}
			{/if}
		</td>
	</tr>
	{/foreach}
</table>

{/block}