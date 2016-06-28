<div <% if $Name %>id="$Name"<% end_if %> class="row $rowClass">
		<% loop $FieldList %>
			$SmallFieldHolder
		<% end_loop %>
</div>