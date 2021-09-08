<?php

$html='';
$query = query('select * from photos');
while($f = fetch($query)){
	$html .= '
	<tr class="text-muted">		
		<td><a href="javascript:void(0)" class="text-muted">' . $f['name'] . '</a>	
        <td><a href="javascript:void(0)" class="text-muted">' . substr($f['src'],0,100) . '</a>	
		<td>
			<span>
				<a href="' . admin_url('photo_add?id='.$f['id']) . '" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edit">
					<i class="fa fa-pencil color-muted"></i>
				</a>				
			</span>
		</td>
	</tr>
';
}



require view("admin/photos_list");
