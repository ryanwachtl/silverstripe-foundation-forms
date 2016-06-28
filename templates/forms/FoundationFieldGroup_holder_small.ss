<div id="$Name" class="ffghs field <% if $extraClass %> $extraClass<% end_if %>">
	<% if $Title %><label for="$ID">$Title</label><% end_if %>
	$Field
	<% if $RightTitle %><label class="right" for="$ID">$RightTitle</label><% end_if %>
    <% if $Message %><div class="parsley-errors-list filled <% if $MessageType=='validation' || $MessageType=='error' %>filled<% end_if %>"><div>$Message</div></div><% end_if %>	<% if $Description %><span class="description">$Description</span><% end_if %>
</div>