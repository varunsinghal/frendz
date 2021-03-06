{extends file="_templates/layout.tpl"}

{block name=title}Connections{/block}
{block name="head"} 
<script>
	$( function() {
		var availableTags = {$available_users};
		$( "#to" ).autocomplete({
			source: availableTags,
			select: function( event, ui ) {
				$("#to").val( ui.item.label );
				$("#to_user_id").val( ui.item.value );
				$("#view_profile").html('<a href="{URL}connection/id/' +  ui.item.value +'"><i class="fa fa-user" aria-hidden="true"></i></a>');
				return false;
			},
			change: function (event, ui) {
				if(!ui.item){
					$("#to").val("");
					$("#to_user_id").val("");
					$("#view_profile").html('<i class="fa fa-user-o" aria-hidden="true"></i>');
				}
			}

		});
	} );
</script>
{/block}

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
<form method="post" action="{URL}connection/add">
	<table>
		<tr>
			<td>Name</td>
			<td><input id="to" name="to" value="" placeholder="Name of the user..." required> <span id="view_profile"><i class="fa fa-user-o" aria-hidden="true"></i></span></td>
		</tr>
		<tr>
			<td>
				Note
			</td>
			<td><textarea name="message_content" style="margin: 0px;height: 60px;width: 190px;" placeholder="Introduce yourself..."></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="hidden" id="to_user_id" name="to_user_id" value="">
				<input type="submit" name="send_request" value="Add">
			</td>
		</tr>
	</table>

</form>

{/block}