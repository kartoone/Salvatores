<div class="actions" id="login">
	<table cellpadding="0" cellspacing="0">
            <tr>
		<td><?php echo $this->Html->link((__('Login')),array('controller'=>'users','action'=>'login')); ?>&nbsp;</td>
		<td><?php echo $this->Html->link((__('Sign Up')),array('controller'=>'users','action'=>'add')); ?>&nbsp;</td>
            </tr>
	</table>
</div>
