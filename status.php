<?php
date_default_timezone_set('Asia/Kolkata');
include 'includes/header.php';
?>

<section>

<h2>Application Status Dashboard</h2>

<table border="1" cellpadding="10" cellspacing="0" width="100%">

<tr>
<th>Component</th>
<th>Status</th>
</tr>

<tr>
<td>AWS EC2 Instance</td>
<td style="color:green;">🟢 Running</td>
</tr>

<tr>
<td>Docker Container</td>
<td style="color:green;">🟢 Running</td>
</tr>

<tr>
<td>Jenkins CI/CD</td>
<td style="color:green;">🟢 Operational</td>
</tr>

<tr>
<td>PHP Application</td>
<td style="color:green;">🟢 Healthy</td>
</tr>

<tr>
<td>Web Server</td>
<td style="color:green;">🟢 Apache Running</td>
</tr>

<tr>
<td>Deployment</td>
<td>Docker on AWS EC2</td>
</tr>

<tr>
<td>Version</td>
<td>1.0.0</td>
</tr>

<tr>
<td>Environment</td>
<td>Production</td>
</tr>

<tr>
<td>Last Updated</td>
<td><?php echo date("d-m-Y H:i:s"); ?></td>
</tr>

</table>

</section>

<?php include 'includes/footer.php'; ?>
