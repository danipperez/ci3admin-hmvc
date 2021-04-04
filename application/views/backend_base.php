<h1>BACKEND</h1>
<ul>
    <li><a href="<?php echo base_url('admin/dashboard'); ?>">Dashboard</a></li>
    <li><a href="<?php echo base_url('admin/noticias'); ?>">Noticias(admin)</a></li>
    <li><a href="<?php echo base_url('auth/logout'); ?>">Logout</a></li>
</ul>
<ul>
    <li><a href="<?php echo base_url(); ?>">Home</a></li>
    <li><a href="<?php echo base_url('noticias'); ?>">Noticias(web)</a></li>
    
    
</ul>

<?php if(isset($content)) echo $content; ?>