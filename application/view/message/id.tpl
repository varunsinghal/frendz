{extends file="_templates/layout.tpl"}

{block name=title}Create message{/block}

{block name="head"} 

{/block}

{block name=body}
<div id="sticky">
	<a href="{URL}message/"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back to messages</a>
</div>
<br/>

<table class="messagetable">
	{foreach $threads as $thread}
	<tr>
		<td>
			<a href="{URL}connection/id/{$thread->from_user_id}">{getgravatar email=$thread->user_email size='40'}</a>
		</td>
		<td>
			<small>{$thread->created_on|relativedate}</small> <br/>
			{$thread->user_first_name} : {$thread->message_content}
		</td>
	</tr>
	{/foreach}
	</table>
<form method="post" action="{URL}/message/id/{$other_user_id}">
	<table class="middletable">
		<tr>
			<td>{getgravatar email=$smarty.session.user_email size='40'}</td>
			<td><input type="text" name="message_content" placeholder="Type your message..."/></td>
			<td><input type="submit" name="send_message" value="Send" />  &nbsp; <a href="{URL}/message/id/{$other_user_id}"><i class="fa fa-refresh" aria-hidden="true"></i></a></td>
		</tr>
	</table>
</form>
{/block}