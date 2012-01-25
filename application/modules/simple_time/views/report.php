<?php
foreach ($users_radios as $user)
	$radios[] = form_label($user.' '.form_radio('selected_user', $user, $user == $selected_user));

echo form_open().

form_fieldset('User', array('style' => 'display: inline;')).
	implode(', ', $radios).
form_fieldset_close().

form_label('From:', 'from_month').
form_dropdown('from_month', $this->arrays->months(), $from[0]).'/'.
form_dropdown('from_day', $this->arrays->days(), $from[1]).'/'.
form_dropdown('from_year', $this->arrays->years(), $from[2]).

form_label('To:', 'to_month').
form_dropdown('to_month', $this->arrays->months(), $to[0]).'/'.
form_dropdown('to_day', $this->arrays->days(), $to[1]).'/'.
form_dropdown('to_year', $this->arrays->years(), $to[2]).

form_submit('submit', 'submit').
form_close();

if (isset($reports))
{
	foreach ($reports as $report)
	{
		$anchor = anchor($report, 'report');
		echo "$anchor<br /><iframe style=\"width: 100%; height: 750px;\" src=\"$report\">$anchor</iframe>";
	}
}	
?>
