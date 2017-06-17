{extends file="_templates/layout.tpl"}

{block name=title}Create Group{/block}
{block name=body}
<a href="{URL}group/"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back to groups</a>
<br/><br/>
<form method="POST" action="{URL}group/create">
	<table>
		<tr>
			<td>
				<label>Name</label>
			</td>
			<td>
				<input type="text" name="group_name" value="" required />
			</td>
		</tr>
		<tr>
			<td>
				<label>Description</label>
			</td>
			<td>
				<input type="text" name="group_des" value="" required />
			</td>
		</tr>
		<tr>
			<td>
			</td>
			<td>
				<input type="submit" name="create_group" value="Create"/>
			</td>
		</tr>
	</table>
</form>

{/block}