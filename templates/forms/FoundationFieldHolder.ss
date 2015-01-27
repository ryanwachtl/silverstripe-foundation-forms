<div <% if $Name %>id="$Name"<% end_if %> class="field <% if extraClass %> $extraClass<% end_if %>">
	<% if $Title %><label for="$ID" class="<% if $Message %>error<% end_if %>">$Title</label><% end_if %>
	$Field
	<% if $RightTitle %><label class="right" for="$ID">$RightTitle</label><% end_if %>
	<% if $Message %><small class="error $MessageType">$Message</small><% end_if %>
	<% if $Description %><span class="description">$Description</span><% end_if %>
</div>
