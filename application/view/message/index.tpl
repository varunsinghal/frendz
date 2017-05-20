{extends file="_templates/layout.tpl"}

{block name=title}Message{/block}
{block name=body}
<a href="{URL}message/create"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> New Message</a>
<br/><br/>
<table class="messagetable">
	{foreach $threads as $thread}
	<tr>
		<td>
		<a href="{URL}message/id/{$thread->other_user}">{getgravatar email=$thread->user_email}</a>

		</td>
		<td>
			<a href="{URL}message/id/{$thread->other_user}">{$thread->user_first_name} {$thread->user_last_name}</a><br/>
			{if $thread->from_user_id == $smarty.Session.user_id}
			<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
			{else}
			<i class="fa fa-long-arrow-left" aria-hidden="true"></i>
			{/if}{$thread->message_content}
		</td>
	</tr>
	{/foreach}
</table>

{/block}