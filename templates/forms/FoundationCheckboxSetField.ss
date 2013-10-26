<ul id="$ID" class="no-bullet $extraClass">
	<% if $Options.Count %>
		<% loop $Options %>
			<li class="$Class">
				<label for="$ID">
					<input id="$ID" class="checkbox" name="$Name" type="checkbox" value="$Value"<% if $isChecked %> checked="checked"<% end_if %><% if $isDisabled %> disabled="disabled"<% end_if %> />
					$Title
				</label>
			</li> 
		<% end_loop %>
	<% else %>
		<li>No options available</li>
	<% end_if %>
</ul>
