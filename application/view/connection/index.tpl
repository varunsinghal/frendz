{extends file="_templates/layout.tpl"}

{block name=title}Connections{/block}
{block name=body}
<div class="sticky">
	<a href="{URL}connection"><i class="fa fa-users" aria-hidden="true"></i> My connections</a>
	&nbsp;&nbsp; &nbsp;&nbsp; 
	<a href="{URL}connection/add"><i class="fa fa-user-plus" aria-hidden="true"></i> Add connection</a>
	&nbsp;&nbsp; &nbsp;&nbsp; 
	<a href="{URL}connection/pending"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Received requests</a>
	&nbsp;&nbsp; &nbsp;&nbsp;
	<a href="{URL}connection/requested"><i class="fa fa-paper-plane" aria-hidden="true"></i> Sent requests</a>
</div>
<br/><br/>

<table class="connectiontable">
	{foreach $threads as $thread}
	<tr>
		<td>
			<a href="{URL}connection/id/{$thread->other_user}">{getgravatar email=$thread->user_email}</a>

		</td>
		<td>
			<a href="{URL}connection/id/{$thread->other_user}">{$thread->user_first_name} {$thread->user_last_name}</a><br/>
			connected since {$thread->updated_on|relativedate}
		</td>
	</tr>
	{/foreach}
</table>

{/block}