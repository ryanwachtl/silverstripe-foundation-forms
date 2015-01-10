<div class="<% if $extraClass %>$extraClass<% else %>fieldgroup<% end_if %><% if $Zebra %> fieldgroup-zebra<% end_if %>" <% if $ID %>id="$ID"<% end_if %>>
	<% loop $FieldList %>
		$SmallFieldHolder
	<% end_loop %>
</div>
