<?php
$fibonacci_list = array(0, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89);
$estimated_hour = (int)$this->request->data['Issue']['estimated_hours'];
?>
<select id="FibonacciIssueEstimatedHours" name="data[Issue][estimated_hours]">
<?php foreach ($fibonacci_list as $number) { ?>
  <option value="<?php echo $number ?>"<?php if ($estimated_hour == $number) { echo " selected";} ?>><?php echo $number ?> h</option>
<?php } ?>
</select>

<script type="text/javascript">
//<![CDATA[
function wrap_estimated_time_form() {
  var old_est = document.getElementById('IssueEstimatedHours');
  var new_est =  document.getElementById('FibonacciIssueEstimatedHours');

  if (null == old_est || null == new_est) {
    return;
  }

  var parent_node = old_est.parentNode;
  if (null == parent_node){
    return;
  }

  parent_node.insertBefore(new_est, old_est);
  parent_node.removeChild(old_est);
}

wrap_estimated_time_form();
//]]>
</script>
