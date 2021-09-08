<?php

if(get('delete')){
	query("delete from blogs where id=" . get('delete'));
	$deleteSuccess = "Successfully deleted!";
}
$html='';
$query = query('select * from blogs');
while($f = fetch($query)){
	$html .= '
	<tr class="text-muted">		
		<td><a href="javascript:void(0)" class="text-muted">' . $f['baslik'] . '</a>
		<td><a href="'. site_url('post/'.$f['src']) .'" class="text-muted" target="_blank">' . site_url('post/'.$f['src']) . '</a>
		</td>		
		<td><span>' . dateAgo($f['tarih']) . '</span>
		</td>
		<td>
			<span>
				<a href="' . admin_url('blog_edit?id='.$f['id']) . '" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edit">
					<i class="fa fa-pencil color-muted"></i>
				</a>
				<a href="' . admin_url('blog_list?delete='.$f['id']) . '" onclick="return confirm(\'are you sure?\')' .'" title="Close">
					<i class="fa fa-close color-danger"></i>
				</a>
			</span>
		</td>
	</tr>
';
}



require view("admin/blog_list");
