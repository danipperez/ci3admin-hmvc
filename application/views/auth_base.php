<h1>AUTH</h1>
<ul>
    <li><a href="<?php echo base_url('auth/login'); ?>">Login</a></li>
    <li><a href="<?php echo base_url('auth/register'); ?>">Register</a></li>    
</ul>
<ul>    
    <li><a href="<?php echo base_url(''); ?>">Home</a></li>
    <li><a href="<?php echo base_url('admin/dashboard'); ?>">Dashboard</a></li>
</ul>

<?php if(isset($content)) echo $content; ?>