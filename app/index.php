<!-- should be included in /index.php -->
<script src="app/js/util.js"></script>
<script src="app/js/refresh.js"></script>
<script src="app/js/create.js"></script>
<script src="app/js/edit.js"></script>
<div id="global-messages">
	<div id="global-success" class="global-message" style="display:none">success</div>
	<div id="global-error" class="global-message" style="display:none">error</div>
</div>
<div id="tasks">
	<div id="goals">
		<h2>Goals</h2>
		<table id="goals-table">
			<thead>
				<tr>
					<th><strong>Name</strong></th>
					<th><strong>Description</strong></th>
					<th><strong>Due Date</strong></th>
					<th><strong>Weight</strong></th>
					<th><strong>Completed?</strong>
					<th><!-- empty column for buttons such as Delete --></th>
				</tr>
			</thead>
			<tbody></tbody>
		</table>
		<button id="start-goal">Add goal</button>
	</div>
	<div id="routines">
		<h2>Routines</h2>
		<table id="routines-table">
			<!-- TODO -->
		</table>
		<button id="start-routine" disabled>Add routine</button>
	</div>
</div>
<div id="scores">
	[score visuals here]
</div>
