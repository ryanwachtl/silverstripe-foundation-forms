<div <% if $Name %>id="$Name"<% end_if %> class="field row $Type $extraClass">
	<% if $Title %><label class="left">$Title</label><% end_if %>
		<% loop $FieldList %>
			$SmallFieldHolder
		<% end_loop %>
	<% if $RightTitle %><label class="right">$RightTitle</label><% end_if %>
</div>
