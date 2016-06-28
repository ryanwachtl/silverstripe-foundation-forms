<div <% if $Name %>id="$Name"<% end_if %> class="columns $columnClass">
		<% loop $FieldList %>
			$SmallFieldHolder
		<% end_loop %>
</div>