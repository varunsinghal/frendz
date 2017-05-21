{extends file="_templates/layout.tpl"}

{block name=title}Connections{/block}
{block name=body}
<a href="{URL}connection"><i class="fa fa-users" aria-hidden="true"></i> My connections</a>
&nbsp;&nbsp; &nbsp;&nbsp; 
<a href="{URL}connection/add"><i class="fa fa-user-plus" aria-hidden="true"></i> Add connection</a>
&nbsp;&nbsp; &nbsp;&nbsp; 
<a href="{URL}connection/pending"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Received requests</a>
&nbsp;&nbsp; &nbsp;&nbsp;
<a href="{URL}connection/requested"><i class="fa fa-paper-plane" aria-hidden="true"></i> Sent requests</a>


<br/><br/>
<table class="connectiontable">
	{foreach $threads as $thread}
	<tr>
		<td>
			<a href="{URL}connection/id/{$thread->user_id}">{getgravatar email=$thread->user_email}</a>

		</td>
		<td>
			<a href="{URL}connection/id/{$thread->user_id}">{$thread->user_first_name} {$thread->user_last_name}</a>
			{if $thread->note|default:FALSE}
			<br/><i class="fa fa-sticky-note-o" aria-hidden="true"></i> {$thread->note}
			{/if}
			<br/>
			request sent {$thread->created_on|relativedate}


		</td>
	</tr>
	{/foreach}
</table>

{/block}