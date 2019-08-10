// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable();

  $('#tableInbox').DataTable({
  	'ordering': false
  });
});
