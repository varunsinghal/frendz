{extends file="_templates/layout.tpl"}

{block name=title}{$group_detail->group_name}{/block}
{block name=body}
<div class="sticky">
	<a href="{URL}group/"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back to groups</a>
	&nbsp;&nbsp; &nbsp;&nbsp; 
	<a href="{URL}group/addPost/{$group_detail->group_id}"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add post</a>
</div>

<br/><br/>
Group name: {$group_detail->group_name}
<br/>
Created by: <a href="{URL}connection/id/{$group_detail->user_id}">{$group_detail->user_first_name} {$group_detail->user_last_name}</a>
<br/>
{foreach $posts as $post}
<p>
	<a href="{URL}group/post/id/{$post->post_id}">{$post->post_title}</a><br/>
	<i class="fa fa-user" aria-hidden="true"></i> {$post->user_first_name} &ensp;&ensp; 
	<i class="fa fa-calendar" aria-hidden="true"></i> {$post->created_on|relativedate} &ensp;&ensp;
	<i class="fa fa-comment-o" aria-hidden="true"></i> {$post->comment_count}
	<br/>
</p>

{/foreach}


{/block}