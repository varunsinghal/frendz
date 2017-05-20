{extends file="_templates/layout.tpl"}

{block name=title}Create message{/block}

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
<a href="{URL}message/"><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> Back to messages</a>
<br/><br/>
<form method="post" action="{URL}message/create">
	<table>
		<tr>
			<td>To</td>
			<td><input id="to" name="to" value="" placeholder="Name of the user..." required> <span id="view_profile"><i class="fa fa-user-o" aria-hidden="true"></i></span></td>
		</tr>
		<tr>
			<td>
				Message
			</td>
			<td><textarea name="message_content" style="margin: 0px;height: 60px;width: 190px;"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="hidden" id="to_user_id" name="to_user_id" value="">
				<input type="submit" name="send_message" value="Send">
			</td>
		</tr>
	</table>

</form>
{/block}