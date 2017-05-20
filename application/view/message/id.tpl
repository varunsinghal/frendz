{extends file="_templates/layout.tpl"}

{block name=title}Create message{/block}

{block name="head"} 

{/block}

{block name=body}
<a href="{URL}message/"><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> Back to messages</a>
<br/><br/>

<table class="messagetable">
	{foreach $threads as $thread}
	<tr>
		<td>
		<a href="{URL}message/id/{$thread->from_user_id}">{getgravatar email=$thread->user_email $size='10'}<br/>
		{$thread->user_first_name} {$thread->user_last_name}</a>

		</td>
		<td>
			{$thread->message_content}
		</td>
	</tr>
	{/foreach}
</table>
{/block}