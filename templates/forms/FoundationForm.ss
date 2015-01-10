<% if $IncludeFormTag %>
<form $AttributesHTML>
<% end_if %>
	<% if $Message %>
	<div id="{$FormName}_error" class="alert-box<% if $MessageType == "bad" %> alert<% end_if %>">$Message<a href="" class="close">&times;</a></div>
	<% else %>
	<div id="{$FormName}_error" class="alert-box secondary" style="display: none;"></div>
	<% end_if %>

	<fieldset>
		<% if $Legend %><legend>$Legend</legend><% end_if %>
		<% loop $Fields %>
			$FieldHolder
		<% end_loop %>
		<div class="clear"><!-- --></div>
	</fieldset>

	<% if $Actions %>
	<div class="Actions">
		<% loop $Actions %>
			$Field
		<% end_loop %>
	</div>
	<% end_if %>
<% if $IncludeFormTag %>
</form>
<% end_if %>
