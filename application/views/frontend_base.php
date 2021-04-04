<h1>FRONTEND</h1>
<ul>
    <li><a href="<?php echo base_url(); ?>">Home</a></li>
    <li><a href="<?php echo base_url('noticias'); ?>">Noticias</a></li>
    <li><a href="<?php echo base_url('auth/login'); ?>">Login</a></li>
</ul>    
<ul>
    <li><a href="<?php echo base_url('admin/dashboard'); ?>">Dashboard</a></li>
</ul>

<?php if(isset($content)) echo $content; ?>