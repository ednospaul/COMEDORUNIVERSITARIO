<?php
	  echo '<center>';
	  echo '<table border=0 class="ventanas" width="650" cellspacing="0" cellpadding="0">';
	  echo '<tr>';
	  echo "<td height='10' class='tabla_ventanas_login' height='10' colspan='3'><legend align='center'>.: Nuevo Comensal :.</legend></td>";
	  echo '</tr>';
	  echo '<tr><td colspan=3>';
	  $attributes = array("class" => "form-horizontal", "id" => "form", "name" => "form");
	  //echo form_open("clientes/Save", $attributes);
	  echo form_open();
	  echo '<center>';
	  echo '<table border=0>';
	  
	#dibujamos campos texto
	$dni 	  = array(
	'name'        => 'dni',
	'id'          => 'dni',
	'size'        => 50,
	'value'		  => set_value('dni',@$datos_usuarios[0]->dni),
	'placeholder' => 'dni',
	'type'        => 'text',
	);
	echo '<tr>';
	echo '<td>'.form_label("dni:",'dni').'</td>';
	echo '<td>';
	echo form_input($dni);
	echo '</td>';
	echo '<td><font color="red">'.form_error('dni').'</font></td>';
	echo '</tr>';
	
	$cod_matricula = array(
	'name'        => 'cod_matricula',
	'id'          => 'cod_matricula',
	'size'        => 50,
	'value'		  => set_value('cod_matricula',@$datos_usuarios[0]->cod_matricula),
	'placeholder' => 'cod_matricula',
	'type'        => 'text',
	);
	echo '<tr>';
	echo '<td>'.form_label("cod_matricula",'cod_matricula').'</td>';
	echo '<td>';
	echo form_input($cod_matricula);
	echo '</td>';
	echo '<td><font color="red">'.form_error('cod_matricula').'</font></td>';
	echo '</tr>';
	
	$Nombres 		  = array(
	'name'        => 'Nombres',
	'id'          => 'Nombres',
	'size'        => 50,
	'value'		  => set_value('Nombres',@$datos_usuarios[0]->Nombres),
	'placeholder' => 'Nombres',
	'type'        => 'text',
	);
	echo '<tr>';
	echo '<td>'.form_label("Nombres:",'Nombres').'</td>';
	echo '<td>';
	echo form_input($Nombres);
	echo '</td>';
	echo '<td><font color="red">'.form_error('Nombres').'</font></td>';
	echo '</tr>';

	$Apellidos		  = array(
	'name'        => 'Apellidos',
	'id'          => 'Apellidos',
	'size'        => 50,
	'value'		  => set_value('Apellidos',@$datos_usuarios[0]->Apellidos),
	'placeholder' => 'Apellidos',
	'type'        => 'text',
	);
	echo '<tr>';
	echo '<td>'.form_label("Apellidos:",'Apellidos').'</td>';
	echo '<td>';
	echo form_input($Apellidos);
	echo '</td>';
	echo '<td><font color="red">'.form_error('Apellidos').'</font></td>';
	echo '</tr>';


	
	$genero = array(
	'0'               	=> '---SELECCIONE SU GENERO---',
	'Masculino'		=> 'Masculino',
	'Femenino'	    	=> 'Femenino',
	);
	echo '<tr>';
    echo '<td>'.form_label("genero:",'genero').'</td>';
    echo '<td>';
    echo  form_dropdown('genero', $genero, set_value('genero',@$datos_usuarios[0]->genero));
    echo '</td>';
    echo '<td><font color="red">'.form_error('genero').'</font></td>';
    echo '</tr>';
	
	$Estatus = array(
	'NONE'   => '---SELECCIONE FACULDAD---',
	'0'	     => 'INGENIERIA',
	'1'      => 'CIENCIAS SOCIALES',
	'0'	     => 'EDUCACION',
	'1'      => 'ADMINISTRACION',
		'1'      => 'MEDICINA VETERINARIA',
	);
	echo '<tr>';
	echo '<td>'.form_label("Estatus:",'ESTATUS').'</td>';
	echo '<td>';
	echo  form_dropdown('ESTATUS', $Estatus, set_value('ESTATUS',@$datos_usuarios[0]->ESTATUS));
	echo '</td>';
	echo '<td><font color="red">'.form_error('ESTATUS').'</font></td>';
	echo '</tr>';     
		
	echo '<tr>';
	echo '<td colspan=3>'.$this->session->flashdata('msg').'</td>';
	echo '</tr>';
	echo '<tr><td colspan=3><hr/></td></tr>';
	echo '<tr>';
	echo '<td colspan=3><center>';
	echo '<input type="submit" class="btn btn-success" value="Guardar">';
    echo '</center></td></tr>';
    echo '</table></center>';
    echo form_close(); 
    echo '</td></tr>';
    echo '</table>';
    echo '</center>';
?>