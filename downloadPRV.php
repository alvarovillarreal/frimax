<?php
include_once 'include/clases/tcpdf/tcpdf.php';

// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {
	public $total_query;
	public $hora;
	public $fecha;
	public $var;

	//Page header
	public function Header() {
		$this->conect();
	}

	public function mostrarEntrega(){
		$dir = "uploadsEntrega/".$this->folio."/";
		if(file_exists($dir)) {
			return true;
		}
	}

	public function encabezado(){
		$this->setCellPaddings(1, 1, 1, 1);
		$this->setCellMargins(1, 1, 1, 1);
		$this->SetFillColor(0, 50, 160);
		$this->SetTextColor(255, 255, 255);
		$this->SetFont('helvetica', '', 5);		
		$image_file = 'images/logo-frimax.png';
		$this->Image($image_file, 0, 0, 40, '', 'PNG', 'https://frimax.mx', 'C', true, 300, 'M', false, false, 0, false, false, true);
		$text='<span style="font-weight: bold;">FRIMAX MATRIZ</span><br/><small>Camino a Santa Cruz del Valle 121<br/>Colonia Valle de la Misericordia<br/>Tlaquepaque, Jalisco, México<br/>Teléfono:3336011808<small>';
		$text2='<span style="font-weight: bold;">FRIMAX MÉXICO</span><br/><small>Camino a Santa Cruz del Valle 121<br/>Colonia Valle de la Misericordia<br/>Tlaquepaque, Jalisco, México<br/>Teléfono:3336011808<small>';
		$text3='<span style="font-weight: bold;">FRIMAX PACÍFICO</span><br/><small>Camino a Santa Cruz del Valle 121<br/>Colonia Valle de la Misericordia<br/>Tlaquepaque, Jalisco, México<br/>Teléfono:3336011808<small>';
		$text4='<span style="font-weight: bold;">FRIMAX PENÍNSULA</span><br/><small>Camino a Santa Cruz del Valle 121<br/>Colonia Valle de la Misericordia<br/>Tlaquepaque, Jalisco, México<br/>Teléfono:3336011808<small>';
		$text5='<span style="font-weight: bold;">FRIMAX QUERETARO</span><br/><small>Camino a Santa Cruz del Valle 121<br/>Colonia Valle de la Misericordia<br/>Tlaquepaque, Jalisco, México<br/>Teléfono:3336011808<small>';		

		$this->writeHTMLCell(22, 12,45," ",$text, 0, 0, 1,false,'L',true);
		$this->writeHTMLCell(22, 12,'','',$text2, 0, 0, 1,false,'L',true);
		$this->writeHTMLCell(22, 12,'','',$text3, 0, 0, 1,false,'L',true);
		$this->writeHTMLCell(22, 12,'','',$text4, 0, 0, 1,false,'L',true);
		$this->writeHTMLCell(22, 12,'','',$text5, 0, 1, 1,false,'L',true);
		$image_file1 = 'images/ESR.png';
		$this->Image($image_file1, 167, 2, 30, '', 'PNG', '', 'C', true, 300, 'M', false, false, 0, false, false, true);
		$style5 = array('width' => 0.25, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(108, 192, 115));
		$this->SetLineStyle($style5);
		$this->Circle(57,16,2);
		$this->Circle(81,16,2);
		$this->Circle(105,16,2);
		$this->Circle(129,16,2);
		$this->Circle(153,16,2);
		$this->Ln(5);		
		$this->SetFont('helvetica', '', 10);
		$this->SetTextColor(108, 192, 115);
		$html='<h3><small style="color:rgb(0, 50, 160);">¡Queremos escucharte!</small>01 800 836 4909</h3>';
		$this->writeHTML($html, true, 0, true, 0);
		$style = array('width' => 0.2, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0));
		$this->Line(85, 25, 165, 25, $style);

		$this->RoundedRect(10, 27, 105, 10, 3, '1100', 'DF',$style5, array(108, 192, 115));
		$this->SetFont('helvetica', 'B', 15);
		$this->setY(30);
		$this->SetTextColor(255, 255, 255);
		$this->Cell(0, 25, ' Imágenes de Recepción de Vehículo', 0, false, 'L', 0, '', 0, false, 'M', 'M');
		$this->Ln(6);
	}

	public function encabezado2(){
		$this->setCellPaddings(1, 1, 1, 1);
		$this->setCellMargins(1, 1, 1, 1);
		$this->SetFillColor(0, 50, 160);
		$this->SetTextColor(255, 255, 255);
		$this->SetFont('helvetica', '', 5);		
		$image_file = 'images/logo-frimax.png';
		$this->Image($image_file, 10, 5, 30, '', 'PNG', 'https://frimax.mx', 'C', true, 300, 'M', false, false, 0, false, false, true);
		$text='<span style="font-weight: bold;">FRIMAX MATRIZ</span><br/><small>Camino a Santa Cruz del Valle 121<br/>Colonia Valle de la Misericordia<br/>Tlaquepaque, Jalisco, México<br/>Teléfono:3336011808<small>';
		$text2='<span style="font-weight: bold;">FRIMAX MÉXICO</span><br/><small>Camino a Santa Cruz del Valle 121<br/>Colonia Valle de la Misericordia<br/>Tlaquepaque, Jalisco, México<br/>Teléfono:3336011808<small>';
		$text3='<span style="font-weight: bold;">FRIMAX PACÍFICO</span><br/><small>Camino a Santa Cruz del Valle 121<br/>Colonia Valle de la Misericordia<br/>Tlaquepaque, Jalisco, México<br/>Teléfono:3336011808<small>';
		$text4='<span style="font-weight: bold;">FRIMAX PENÍNSULA</span><br/><small>Camino a Santa Cruz del Valle 121<br/>Colonia Valle de la Misericordia<br/>Tlaquepaque, Jalisco, México<br/>Teléfono:3336011808<small>';
		$text5='<span style="font-weight: bold;">FRIMAX QUERETARO</span><br/><small>Camino a Santa Cruz del Valle 121<br/>Colonia Valle de la Misericordia<br/>Tlaquepaque, Jalisco, México<br/>Teléfono:3336011808<small>';		

		$this->writeHTMLCell(22, 12,45," ",$text, 0, 0, 1,false,'L',true);
		$this->writeHTMLCell(22, 12,'','',$text2, 0, 0, 1,false,'L',true);
		$this->writeHTMLCell(22, 12,'','',$text3, 0, 0, 1,false,'L',true);
		$this->writeHTMLCell(22, 12,'','',$text4, 0, 0, 1,false,'L',true);
		$this->writeHTMLCell(22, 12,'','',$text5, 0, 1, 1,false,'L',true);
		$image_file1 = 'images/ESR.png';
		$this->Image($image_file1, 167, 2, 30, '', 'PNG', '', 'C', true, 300, 'M', false, false, 0, false, false, true);
		$style5 = array('width' => 0.25, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(108, 192, 115));
		$this->SetLineStyle($style5);
		$this->Circle(57,16,2);
		$this->Circle(81,16,2);
		$this->Circle(105,16,2);
		$this->Circle(129,16,2);
		$this->Circle(153,16,2);
		$this->Ln(5);		
		$this->SetFont('helvetica', '', 10);
		$this->SetTextColor(108, 192, 115);
		$html='<h3><small style="color:rgb(0, 50, 160);">¡Queremos escucharte!</small>01 800 836 4909</h3>';
		$this->writeHTML($html, true, 0, true, 0);
		$style = array('width' => 0.2, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0));
		$this->Line(85, 25, 165, 25, $style);

		$this->RoundedRect(10, 27, 105, 10, 3, '1100', 'DF',$style5, array(108, 192, 115));
		$this->SetFont('helvetica', 'B', 15);
		$this->setY(30);
		$this->SetTextColor(255, 255, 255);
		$this->Cell(0, 25, 'Imágenes de entrega de Vehiculo', 0, false, 'L', 0, '', 0, false, 'M', 'M');
		$this->Ln(6);
	}


	public function Footer() {
		#1b408e
        // Position at 15 mm from bottom
		$this->SetY(-14);
		 // Position at 15 mm from bottom
		$this->SetX(0);
        // Set font
		$this->SetFont('helvetica', 'B', 10,'',true);
		$this->SetTextColor(255, 255, 255);
		$this->SetFillColor(0, 50, 160);		
		$this->MultiCell(70, 20, 'RE-LV-002-02', 0, 'C', 1, 0, '', '', true, 0, false, true, 15, 'M');
		$this->MultiCell(70, 20, 'Logística de Vehículos', 0, 'C', 1, 0, '', '', true, 0, false, true, 15, 'M');
		
		$this->MultiCell(70, 20, 'Revisión: 03 Septiembre 2019', 0, 'C', 1, 0, '', '', true, 0, false, true, 15, 'M');
	}
	public function setImagen($tipo){
		$image_file = $tipo == 1 ? 'images/bg_1.jpg' : 'images/bg_2.jpg';
		$this->SetAutoPageBreak(false, 0);
		$this->Image($image_file, 0, 0, 210, 297, '', '', '', false, 300, '', false, false, 0);
	}
	public function informacion(){
		$this->SetFont('dejavusans', '', 10, '', true);
		$this->responsable().
		$this->cliente().
		$this->asesorComercial().
		$this->fecha().
		$this->folio().
		$this->hora().
		$this->noPedido().
		$this->noOperacion().
		$this->noSerie().
		$this->chasis().
		$this->modelo().
		$this->anio().
		$this->placa();
		
	}
	/*BEGIN: Métodos para imprimir la información de la parte superior de la hoja*/
	private function responsable(){

		$this->writeHTMLCell(100, 0, 52, 46, $this->info['usuarioRec'], 0, 1, 0, true, '', true);
	}
	private function cliente(){

		$this->writeHTMLCell(100, 0, 52, 52, $this->info['nombre'], 0, 1, 0, true, '', true);
	}
	private function asesorComercial(){

		$this->writeHTMLCell(100, 0, 52, 58, $this->info['usuarioAsigna'], 0, 1, 0, true, '', true);
	}
	private function fecha(){

		$this->writeHTMLCell(40, 0, 165, 46, $this->fecha, 0, 1, 0, true, '', true);
	}
	private function folio(){

		$this->writeHTMLCell(40, 0, 165, 54, $this->folio, 0, 1, 0, true, '', true);
	}
	private function hora(){

		$this->writeHTMLCell(20, 0, 175, 62, $this->hora, 0, 1, 0, true, '', true);
	}
	private function noPedido(){

		$this->SetFont('dejavusans', '', 9, '', true);
		$this->writeHTMLCell(23, 0, 37, 68, $this->info['noPedido'], 0, 1, 0, true, '', true);
	}
	private function noOperacion(){

		$this->writeHTMLCell(30, 0, 73, 68, $this->info['noOperacion'], 0, 1, 0, true, '', true);	
	}
	private function noSerie(){

		$this->writeHTMLCell(75, 0, 125, 68, $this->info['noSerie'], 0, 1, 0, true, '', true);	
	}
	private function chasis(){

		$this->writeHTMLCell(33, 0, 25, 74, $this->info['chasis'], 0, 1, 0, true, '', true);	
	}
	private function modelo(){

		$this->writeHTMLCell(30, 0, 73, 74, $this->info['modelo'], 0, 1, 0, true, '', true);	
	}
	private function anio(){

		$this->writeHTMLCell(30, 0, 112, 74, $this->info['anio'], 0, 1, 0, true, '', true);	
	}
	private function placa(){

		$this->writeHTMLCell(35, 0, 163, 74, $this->info['placa'], 0, 1, 0, true, '', true);	
	}
	/*END: Métodos para imprimir la información de la parte superior de la hoja*/
	public function accesorios(){
		$this->colOne();
		$this->colTwo();
		$this->colThree();
		
	}


	public function anomalias(){
		$imgdata2 = $this->info['ladoIzq'];			
		$this->Image($imgdata2, 10, 157, 50, 35, '', '', '', false, 300, '', false, false, 0);

		$imgdata1 = $this->info['frente'];			
		$this->Image($imgdata1, 62, 157, 30, 35, '', '', '', false, 300, '', false, false, 0);

		$imgdata3 = $this->info['arriba'];			
		$this->Image($imgdata3, 94, 157, 50, 35, '', '', '', false, 300, '', false, false, 0);
		
		$imgdata4 = $this->info['ladoDer'];			
		$this->Image($imgdata4, 148, 157, 50, 35, '', '', '', false, 300, '', false, false, 0);

		$imgdata5 = $this->info['panel'];			
		$this->Image($imgdata5, 10, 191, 35, 35, '', '', '', false, 300, '', false, false, 0);

		$imgdata6 = $this->info['asientos'];			
		$this->Image($imgdata6, 47, 192, 32, 32, '', '', '', false, 300, '', false, false, 0);
	}

	public function linkChasis(){
		$html='<a href="chasisPDF.php?folio='.$this->info['folio'].'" target="_blank">Ver medidas del chasis</a>';
		$this->SetFont('helvetica', 'B', 10);
		$this->SetFillColor(0, 50, 160);	
		$this->SetTextColor(108, 192, 115);
		$this->writeHTMLCell(75, 0, 15, 220, $html, 0, 1, 0, true, '', true);		
	}

	/*BEGIN: Métodos para mostrar la lista de accesorios*/
	private function colOne(){
		$x = 4.6;
		$alt = 90;
		$acc = $this->query('
			SELECT controlAccesorios.idEstatus, controlAccesorios.cantidad, controlAccesorios.idAccesorio 
			FROM controlAccesorios 
			INNER JOIN in_accesorios ON in_accesorios.id = controlAccesorios.idAccesorio AND in_accesorios.columna = 1
			WHERE controlAccesorios.idControlRecibe = "'.$this->info['id'].'"');
		while($dat = $this->fetch_array($acc)){
			$pos = $dat['idEstatus'] == "1" ? 50 : ($dat['idEstatus'] == "2" ? 58 : 66);
			$alt = $alt + $x; 
			$this->writeHTMLCell(5, 0, $pos, $alt, "x", 0, 1, 0, true, '', true);	
			$cant = $dat['cantidad'] == "0" ? " " : ($dat['cantidad']);
			$this->writeHTMLCell(5, 0, 65, $alt, $cant, 0, 1, 0, true, '', true);
		}
	}
	private function colTwo(){
		$x = 4.6;
		$alt = 90;
		$acc = $this->query('
			SELECT controlAccesorios.idEstatus, controlAccesorios.cantidad, controlAccesorios.idAccesorio 
			FROM controlAccesorios 
			INNER JOIN in_accesorios ON in_accesorios.id = controlAccesorios.idAccesorio AND in_accesorios.columna = 2
			WHERE controlAccesorios.idControlRecibe = "'.$this->info['id'].'"');
		while($dat = $this->fetch_array($acc)){
			$pos = $dat['idEstatus'] == "1" ? 113 : ($dat['idEstatus'] == "2" ? 120 : 128);
			$alt = $alt + $x; 
			$this->writeHTMLCell(5, 0, $pos, $alt, "x", 0, 1, 0, true, '', true);	
			$cant = $dat['cantidad'] == "0" ? " " : ($dat['cantidad']);
			$this->writeHTMLCell(5, 0, 127, $alt, $cant, 0, 1, 0, true, '', true);
		}
	}
	private function colThree(){
		$x = 4.6;
		$alt = 90;
		$acc = $this->query('
			SELECT controlAccesorios.idEstatus, controlAccesorios.cantidad, controlAccesorios.idAccesorio 
			FROM controlAccesorios 
			INNER JOIN in_accesorios ON in_accesorios.id = controlAccesorios.idAccesorio AND in_accesorios.columna = 3
			WHERE controlAccesorios.idControlRecibe = "'.$this->info['id'].'"');
		while($dat = $this->fetch_array($acc)){
			$pos = $dat['idEstatus'] == "1" ? 175 : ($dat['idEstatus'] == "2" ? 182 : 189);
			$alt = $alt + $x; 
			$this->writeHTMLCell(5, 0, $pos, $alt, "x", 0, 1, 0, true, '', true);
			$cant = $dat['cantidad'] == "0" ? " " : ($dat['cantidad']);
			$this->writeHTMLCell(5, 0, 188, $alt, $cant, 0, 1, 0, true, '', true);	
		}
	}
	/*END: Métodos para mostrar la lista de accesorios*/
	public function inferior(){
		$this->SetFont('dejavusans', '', 10, '', true);
		$this->tablero().
		$this->alarma().
		$this->bateria().
		$this->otro().
		$this->observaciones().
		$this->kilometraje().
		$this->combustible().
		$this->reversa();
		$this->carga();
		$this->aire();
	}
	public function telefonos(){

		$responsableTelefono = $this->info['responsableTelefono'];
		$this->SetFont('dejavusans', '', 6, '', true);
		$txt = $responsableTelefono;
		$this->writeHTMLCell(50, 0, 10, 268, $txt, 1, 1, 0, true, 'C', true);

		$telefonoRecibe = $this->info['telefonoRecibe'];
		$this->SetFont('dejavusans', '', 6, '', true);
		$txt = $telefonoRecibe;
		$this->writeHTMLCell(50, 0, 155, 268, $txt, 1, 1, 0, true, 'C', true);
	}

	public function firmas(){


		if ($this->info['firma']!="") {
			$imgdatafirma = $this->info['firma'];				
		}
		else{
			$imgdatafirma=" ";
		}	

		$this->Image($imgdatafirma, 65, 242, 35, 15, '', '', '', false, 300, '', false, false, 0);

		$usuarioRec = $this->info['usuarioRec'];
		$this->SetFont('dejavusans', '', 6, '', true);
		$txt = $usuarioRec;
		$txt = $txt.' '.$this->info['fecha'];
		$this->writeHTMLCell(50, 0, 55, 255, $txt, 1, 1, 0, true, 'C', true);

		if ($this->info['firmaEntrega']!="") {
			$imgdata = $this->info['firmaEntrega'];	
			$this->Image($imgdata, 10, 242, 35, 15, '', '', '', false, 300, '', false, false, 0);
		}
		else{
			$imgdata=" ";
		}	

		$usuarioEntrega = $this->info['usuarioEntrega'];
		$this->SetFont('dejavusans', '', 6, '', true);
		$txt = $usuarioEntrega;
		$txt = $txt.' '.$this->info['fecha'];
		$this->writeHTMLCell(50, 0, 5, 255, $txt, 0, 1, 0, true, 'C', true);

		if ($this->info['firmaRecibe']!="") {
			$imgdata = $this->info['firmaRecibe'];	
			$this->Image($imgdata, 155, 242, 35, 15, '', '', '', false, 300, '', false, false, 0);
		}
		else{
			$imgdata=" ";
		}	

		$responsableRecibe = $this->info['responsableRecibe'];
		$this->SetFont('dejavusans', '', 6, '', true);
		$txt = $responsableRecibe;
		$txt = $txt.' '.$this->info['fechaEntrega'];
		$this->writeHTMLCell(250, 0, 55, 255, $txt, 1, 1, 0, true, 'C', true);


		$usuarioEntre = $this->info['usuarioEntre'];
		$this->SetFont('dejavusans', '', 6, '', true);
		$txt = $usuarioEntre;
		$txt = $txt.' '.$this->info['fechaEntrega'];
		$this->writeHTMLCell(150, 0, 55, 255, $txt, 1, 1, 0, true, 'C', true);

		if ($this->info['firmaEntre']!="") {
			$imgdata = $this->info['firmaEntre'];	
			$this->Image($imgdata, 115, 240, 35, 15, '', '', '', false, 300, '', false, false, 0);
		}
		else{
			$imgdata=" ";
		}	


	}

	public function sucursal(){


		$this->SetFont('dejavusans', '', 8, '', true);

		$folio = $this->info['folio'];

		$folio_separado = explode('-',$folio);
		$sucursal = $folio_separado[0];



		$posiciones['GD'] = array('x'=>58.9,'y'=>16);
		$posiciones['MX'] = array('x'=>86.3,'y'=>16);
		$posiciones['CU'] = array('x'=>113,'y'=>16);
		$posiciones['CA'] = array('x'=>139.4,'y'=>16);
		$posiciones['QR'] = array('x'=>165,'y'=>16);

		$x = $posiciones[$sucursal]['x'];
		$y = $posiciones[$sucursal]['y'];

		$this->writeHTMLCell(5, 5, $x, $y, 'X', 1, 1, 0, true, 'C', true);


	}


	public function sucursalp2(){
		$this->setCellPaddings(0, 0, 0, 0);
		$this->setCellMargins(0, 0, 0, 0);
		$this->SetFillColor(255, 255, 255);
		$this->SetTextColor(0, 0, 0);

		$this->SetFont('dejavusans', '', 8, '', true);

		$folio = $this->info['folio'];

		$folio_separado = explode('-',$folio);
		$sucursal = $folio_separado[0];



		$posiciones['GD'] = array('x'=>54.5,'y'=>14.5);
		$posiciones['MX'] = array('x'=>78.5,'y'=>14.5);
		$posiciones['CU'] = array('x'=>102.5,'y'=>14.5);
		$posiciones['CA'] = array('x'=>126.5,'y'=>14.5);
		$posiciones['QR'] = array('x'=>150.5,'y'=>14.5);

		$x = $posiciones[$sucursal]['x'];
		$y = $posiciones[$sucursal]['y'];

		$this->writeHTMLCell(5, 5, $x, $y, 'X', 0, 0, 0, true, 'C', true);


	}


	/*BEGIN: Métodos para imprimir la información de la parte inferior de la hoja*/
	private function tablero(){

		$x = $this->info['tablero'] == 1 ? 40 : 50;

		$this->writeHTMLCell(5, 0, $x, 187, "x", 0, 1, 0, true, 'C', true);	
	}
	private function alarma(){

		$x = $this->info['alarma'] == 1 ? 99 : 109;
		$this->writeHTMLCell(5, 0, $x, 187, "x", 0, 1, 0, true, 'C', true);	
	}
	private function reversa(){

		$this->SetFont('dejavusans', '', 14, '', true);
		$x = $this->info['reversa'] == 1 ? 177 : 183;
		$this->writeHTMLCell(5, 0, $x, 211, "x", 0, 1, 0, true, 'C', true);	
	}
	private function bateria(){		
		$this->SetFont('dejavusans', '', 9, '', true);
		$this->writeHTMLCell(25, 0, 62, 146, $this->info['volts'], 0, 1, 0, true, '', true);
	}

	private function otro(){
		$this->SetFont('dejavusans', '', 6, '', true);
		$this->writeHTMLCell(80, 0, 127, 188, $this->info['otro'], 0, 1, 0, true, '', true);	
	}
	private function observaciones(){
		$this->SetFont('dejavusans', '', 6, '', true);
		$this->writeHTMLCell(60, 10, 80, 203, $this->info['observaciones'], 0, 1, 0, true, '', true);	
	}
	private function kilometraje(){
		$this->SetFont('dejavusans', '', 10, '', true);
		$this->writeHTMLCell(25, 0, 175, 201, $this->info['kilometraje'], 0, 1, 0, true, '', true);	
	}
	private function carga(){
		$this->SetFont('dejavusans', '', 9, '', true);
		$x = $this->info['carga'] == 1 ? 103 : 110;
		$this->writeHTMLCell(25, 0, $x, 145, "x", 0, 1, 0, true, 'C', true);	
	}
	private function aire(){
		$this->SetFont('dejavusans', '', 9, '', true);
		$x = $this->info['aire'] == 1 ? 165 : 172;
		$this->writeHTMLCell(25, 0, $x, 145, "x", 0, 1, 0, true, 'C', true);

	}

	private function combustible(){
		$val = $this->info['combustible'];
		$posX = $val == 0 ?  145 : ($val == 1 ? 146.5 : ($val == 2 ? 148.5 : ($val == 3 ? 151 : ($val == 4 ? 153.3 : ($val == 5 ? 156 : ($val == 6 ? 158 : ($val == 7 ? 160 : 162)))))));

		$posY = $val == 0 ?  201 : ($val == 1 ? 199 : ($val == 2 ? 197 : ($val == 3 ? 196 : ($val == 4 ? 196 : ($val == 5 ? 196 : ($val == 6 ? 197 : ($val == 7 ? 199 : 201)))))));
		//$posY = $val == 0 ?  201 : ($val == 1 ? 197 : ($val == 2 ? 196 : ($val == 3 ? 197 : 201)));
		//$this->writeHTMLCell(20, 0, $posX, $posY, "O", 0, 0, 0, true, '', true);		
		$this->SetLineWidth(.5  );
		$this->Line(156,208,$posX+2,$posY+2);
	}
	/*END: Métodos para imprimir la información de la parte inferior de la hoja*/
	public function contenido(){
		$dato = '				
		'.$this->getImagenes(1).'
		<br/><br/>		
		'.$this->getImagenes(2).'
		<br/><br/>		
		'.$this->getImagenes(3).'
		<br/><br/>		
		'.$this->getImagenes(4).'
		<br/><br/>		
		'.$this->getImagenes(5).'
		<br/><br/>	
		'.$this->getImagenes(6).'
		<br/><br/>		
		'.$this->getImagenes(7);

		$this->writeHTML($dato, true, 0, true, true);
		return $dato;
	}
	public function contenidoEntrega(){
		$dato = '				
		'.$this->getImagenesEntrega(1).'
		<br/><br/>		
		'.$this->getImagenesEntrega(2).'
		<br/><br/>		
		'.$this->getImagenesEntrega(3).'
		<br/><br/>		
		'.$this->getImagenesEntrega(4).'
		<br/><br/>		
		'.$this->getImagenesEntrega(5).'
		<br/><br/>	
		'.$this->getImagenesEntrega(6).'
		<br/><br/>		
		'.$this->getImagenesEntrega(7);

		$this->writeHTML($dato, true, 0, true, true);
		return $dato;
	}

	public function getImagenes($tipo){
		$dir = $this->getCarpImg($tipo);
		$dato = '';
		if(file_exists($dir)) {
			$directorio = opendir($dir);  
			$canti=0;
			$lado = $this->getLado($tipo);         
			$x = 15;
			$y = $tipo == 1 ? 53 : ($tipo == 2 ? 80 : ($tipo == 3 ? 108 : ($tipo == 4 ? 135 : ($tipo == 5 ? 162 : ($tipo == 6 ? 190 : 220)))));
			$this->SetTextColor(0, 0, 0);
			$this->SetFont('helvetica', 'B', 12);	
			$this->WriteHTMLCell(100, 10, $x-5, $y-4.5,'Imágenes '.$lado, 0, 0, 0, true, 'L', true);			
			$total_imagenes =count(glob($dir.'*.jpg', GLOB_BRACE));	
			$this->SetFont('helvetica', 'N', 12);	
			$this->WriteHTMLCell(50, 10, 190, $y-5,$total_imagenes, 0, 0, 0, true, 'L', true);	

			
            while (false !==($archivo = readdir($directorio))) //obtenemos un archivo y luego otro sucesivamente            
            {            	

            	if($canti==5 or $canti==10)$x=15;
            	if ($archivo != "." AND $archivo != "..") {
            		if ($canti<=4) {
            			$this->Image($dir . $archivo,$x, $y, 30, '', 'JPG', 'https://frimax.mx/recepcion/'.$dir.$archivo, 'L', true, 300, 'T', false, false, 0, true, false, false); 

            		}elseif ($canti>4 && $canti<=9){            			
            			$y=243;              			
            			$this->Image($dir . $archivo,$x, $y, 30, '', 'JPG', 'https://frimax.mx/recepcion/'.$dir.$archivo, 'L', true, 300, 'T', false, false, 0, true, false, false);            			
            		}else{
            			$y=262;                  			    			
            			$this->Image($dir . $archivo,$x, $y, 30, '', 'JPG', 'https://frimax.mx/recepcion/'.$dir.$archivo, 'L', true, 300, 'T', false, false, 0, true, false, false);    
            		}
            		$x += 32; 
            		$canti+=1;
            	}

            	
            }            
        }

        return $dato;
    }

    public function getImagenesEntrega($tipo){
    	$dir = $this->getCarpImgEntrega($tipo);
    	$dato = '';
    	if(file_exists($dir)) {
    		$directorio = opendir($dir);  
    		$canti=0;
    		$lado = $this->getLadoEntrega($tipo);         
    		$x = 15;
    		$y = $tipo == 1 ? 53 : ($tipo == 2 ? 80 : ($tipo == 3 ? 108 : ($tipo == 4 ? 135 : ($tipo == 5 ? 162 : ($tipo == 6 ? 190 : 220)))));
    		$this->SetTextColor(0, 0, 0);
    		$this->SetFont('helvetica', 'B', 12);	
    		$this->WriteHTMLCell(100, 10, $x-5, $y-4.5,'Imágenes '.$lado, 0, 0, 0, true, 'L', true);			
    		$total_imagenes =count(glob($dir.'*.jpg', GLOB_BRACE));	
    		$this->SetFont('helvetica', 'N', 12);	
    		$this->WriteHTMLCell(50, 10, 190, $y-5,$total_imagenes, 0, 0, 0, true, 'L', true);	


            while (false !==($archivo = readdir($directorio))) //obtenemos un archivo y luego otro sucesivamente            
            {            	

            	if($canti==5 or $canti==10)$x=15;
            	if ($archivo != "." AND $archivo != "..") {
            		if ($canti<=4) {
            			$this->Image($dir . $archivo,$x, $y, 30, '', 'JPG', 'https://frimax.mx/recepcion/'.$dir.$archivo, 'L', true, 300, 'T', false, false, 0, true, false, false); 

            		}elseif ($canti>4 && $canti<=9){            			
            			$y=243;              			
            			$this->Image($dir . $archivo,$x, $y, 30, '', 'JPG', 'https://frimax.mx/recepcion/'.$dir.$archivo, 'L', true, 300, 'T', false, false, 0, true, false, false);            			
            		}else{
            			$y=262;                  			    			
            			$this->Image($dir . $archivo,$x, $y, 30, '', 'JPG', 'https://frimax.mx/recepcion/'.$dir.$archivo, 'L', true, 300, 'T', false, false, 0, true, false, false);    
            		}
            		$x += 32; 
            		$canti+=1;
            	}

            	
            }            
        }

        return $dato;
    }


    public function getCarpImg($tipo){
    	$lado = $tipo == 1 ? "delantera" : ($tipo == 2 ? "trasera" : ($tipo == 3 ? "izquierda" : ($tipo == 4 ? "derecha" : ($tipo == 5 ? "ife" : ($tipo == 6 ? "ine" : "otro")))));

    	$dir = "uploads/".$this->folio."/".$lado."/";

    	return $dir;
    }
    public function getLado($tipo){
    	$lado = $tipo == 1 ? "delantera" : ($tipo == 2 ? "trasera" : ($tipo == 3 ? "izquierda" : ($tipo == 4 ? "derecha" : ($tipo == 5 ? "Tablero y Numero de serie" : ($tipo == 6 ? "Ine" : "motor, batería y otros")))));        

    	return $lado;
    }

    public function getCarpImgEntrega($tipo){
    	$lado = $tipo == 1 ? "delantera" : ($tipo == 2 ? "trasera" : ($tipo == 3 ? "izquierda" : ($tipo == 4 ? "derecha" : ($tipo == 5 ? "ife" : ($tipo == 6 ? "ine" : "otro")))));

    	$dir = "uploadsEntrega/".$this->folio."/".$lado."/";

    	return $dir;
    }
    public function getLadoEntrega($tipo){
    	$lado = $tipo == 1 ? "delantera" : ($tipo == 2 ? "trasera" : ($tipo == 3 ? "izquierda" : ($tipo == 4 ? "derecha" : ($tipo == 5 ? "Tablero y Numero de serie" : ($tipo == 6 ? "Ine" : "motor, batería y otros")))));        

    	return $lado;
    }

    public function politica(){		
    	$this->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
    	$this->SetHeaderMargin(PDF_MARGIN_HEADER);		
    	$this->SetFont('helvetica', 'B', 18);		
    	$this->SetFillColor(108, 192, 115);
    	$this->SetTextColor(255, 255, 255);

    	$this->Cell(0, 15, 'POLÍTICA DE RECEPCIÓN Y ENTREGA DE VEHÍCULOS', 0, 0, 'C', 1, '', 1,FALSE,'M','M');
    	$this->SetFillColor(255, 255, 255);
    	$this->SetTextColor(0, 0, 0);
    	$this->ln();
    	$this->setCellMargins(0, 0, 0, 0);

    	$html = '<span style="text-align:justify;"><b>PRIMERA.-</b>EL PRESTADOR DEL SERVICIO, realizará todos las operaciones y servicios, solicitadas por  el CONSUMIDOR que suscribe en la autorización del pedido correspondiente, de acuerdo al estado de éste y las cuales serán realizadas a cargo  y por cuenta del CONSUMIDOR.</span><br/><br/>
    	<span style="text-align:justify;"><b>SEGUNDA.-</b>Ambas partes están de acuerdo en que el precio de la presente operación será cubierta por el consumidor en la forma que suscribe en la autorización del pedido correspondiente.</span><br/><br/>
    	<span style="text-align:justify;"><b>TERCERA.-</b>EL CONSUMIDOR acepta haber tenido a su disposición los precios de los servicios, mano de obra, refacciones y materiales a usar en los servicios ofrecidos por EL PRESTADOR DE SERVICIO, los incrementos que resulten durante el servicio por costo no previsibles y/o incrementos resultantes al momento de la ejecución del servicio ordenado deberán ser autorizadas por EL CONSUMIDOR en forma escrita, siempre y cuando estos excedan al 20% del presupuesto, si el incremento situado es inferior lo podrá autorizar telefónicamente y si el incremento es menor al 5% no se requiere la autorización DEL CONSUMIDOR. El tiempo que en su caso transcurra para requisitar condición se modificará la fecha de entrega en la misma proporción.</span><br/><br/>
    	<span style="text-align:justify;"><b>CUARTA.-</b>EL PRESTADOR DE SERVICIO se reserva la fecha de entrega del producto.</span><br/><br/>
    	<span style="text-align:justify;"><b>QUINTO.-</b>.-EL PRESTADOR DE SERCIVIOS hará entrega de las refacciones, partes o piezas substituidas  en la reparación o servicios del vehículo al momento de la entrega de esta salvo en los siguientes casos A) Cuando EL CONSUMIDOR exprese lo contrario B) Las partes, refacciones o piezas serán cambiadas en uso de garantía C) Se trate de residuos considerados peligrosos de acuerdo con las disposiciones legales aplicables.</span><br/><br/>
    	<span style="text-align:justify;"><b>SEXTA.-</b>Los productos o servicios a que refiere el presupuesto aceptado por el CONSUMIDOR tienen una garantía por escrito de tiempos determinados por cada unos de ellos, dichas garantías se encuentran publicadas en el portal de internet del PRESTADOR DE SERVICIO: http://www.frimax.mx/ en dichas garantías se estipulan los criterios y tiempos de aplicabilidad de las mismas. En partes hechas por EL PRESTADOR DE SERVICIO o mano de obra y en refacciones la especificada por el fabricante, siempre y cuando no se manifieste mal uso, negligencia o descuido, lo anterior de conformidad a lo establecido con el artículo 81 de la ley federal de protección al CONSUMIDOR. Si el producto o servicio es intervenido por un tercero EL PRESTADOR DE SERVICIO no será responsable y la garantía quedará sin efecto. Las reclamaciones por garantía se harán por medio del portal de internet del PRESTADOR DE SERVICIO en el apartado de servicio post-venta: http://www.frimax.mx/servicio-post-ventas.html como se lo indica cada una de las políticas de garantía de los productos y servicios Frimax. EL CONSUMIDOR deberá presentar su unidad en instalaciones del prestador de servicio, las reparaciones por EL PRESTADOR DE SERVICIO en cumplimiento a la garantía correspondiente, serán sin cargo alguno para EL CONSUMIDOR salvo aquellos trabajos que no deriven en las reparaciones aceptadas por el presupuesto. No se computará dentro del plazo de garantía, el tiempo que se lleve la reparación y/o mantenimiento del vehículo para el cumplimiento de la misma.</span><br/><br/>
    	<span style="text-align:justify;"><b>SÉPTIMA.-</b>EL CONSUMIDOR, autoriza el uso del vehículo en zonas aledañas con un radio ilimitado a el área de la planta a efectos de prueba o traslados efectuados, EL PRESTADOR DEL SERVICIO no podrá utilizar el vehículo para uso personal, con fines propios o de terceros.</span><br/><br/>
    	<span style="text-align:justify;"><b>OCTAVA.-</b>EL PRESTADOR DE SERVICIO se hace responsable por los daños causados al vehículo de EL CONSUMIDOR, dentro de las instalaciones del PRESTADOR DE SERVICIO. El riesgo de daños causados al vehículo, equipo y accesorios fuera de las instalaciones del PRESTADOR DE SERVICIO no son responsabilidad de PRESTADOR DE SERVICIO. EL PRESTADOR DE SERVICIO se hace responsable de los daños que sufran el vehículo dentro de sus instalaciones, mientras se encuentre bajo su resguardo y durante el tiempo de servicio. Para tal efecto EL PRESTADOR DE SERVICIO cuenta con un seguro para cubrir dichas eventualidades.</span>
    	<ol style="display:block;list-style-type: lower-latin; margin-top: 1em;margin-bottom: 1em;margin-left: 0;margin-right: 0;padding-left: 40px;">
    	<li style="text-align:justify;">EL PRESTADOR DE SERVICIO  no se hace responsable por la pérdida de objetos dejados en el interior del vehículo, aún con los compartimentos cerrados, salvo que estos hayan sido notificados y puestos bajo su resguardo al momento de la recepción del vehículo.</li>
    	<li style="text-align:justify;">EL PRESTADOR DE SERVICIO no se hace responsable por daños parciales o totales, que se ocasionen como consecuencia de fenómenos naturales como ciclón, huracán, granizo, terremoto, derrumbe de tierra o piedras, caída o derrumbe de construcciones, estructuras u otros objetos, caídas de árboles o sus ramas, alud, incendios, rayo, explosión aún cuando estos daños prevengan de una causa externa al vehículo.</li>
    	</ol>
    	<span style="text-align:justify;"><b>NOVENA.-</b>EL PRESTADOR DE SERVICIO  se obliga a expedir la factura o comprobante de pago por los trabajos ejecutados, en la que se especificarán los precios por productos o servicios y accesorios empleados, conforme al artículo 62 de la ley federal de protección al consumidor. </span><br/><br/>
    	<span style="text-align:justify;"><b>DÉCIMA.-</b>Se establece como pena convencional para EL CONSUMIDOR por incumplimiento el 30% del valor del producto o servicio correspondiente al pedido.</span><br/><br/>
    	<span style="text-align:justify;"><b>DÉCIMA PRIMERA.-</b>En caso de que la unidad no sea recogida por EL CONSUMIDOR en un término de 48 hrs. Posteriores a que se haya notificado, pagará por concepto de deposito un salario mínimo por cada 24 hrs. que transcurran. </span><br/><br/>
    	<span style="text-align:justify;"><b>DÉCIMA SEGUNDA.-</b>El PRESTADOR DEL SERVICIO podrá trasladar el vehículo a sus Talleres Aliados para la instalación de accesorios adicionales en caso de que EL CONSUMIDOR lo requiera y especifique en su pedido. Para los traslados a los Talleres Aliados se recorrerán 25 km. para la instalación de Equipos de refrigeración y 40 km para el refuerzo y/o modificación de muelles del vehículo. Con el anterior antecedente EL CONSUMIDOR está de acuerdo con el recorrido mencionado. Si llegará a suceder algún incidente con el vehículo durante este traslado EL PRESTADOR DEL SERVICIO no será responsable del daño o caso fortuito.</span><br/><br/>
    	';

    	$this->SetFont('helvetica', '', 7.5,'',true);
		// writeHTML($html, $ln=true, $fill=false, $reseth=false, $cell=false, $align='')
    	$this->writeHTML($html, true, false, true, false, '');		

    }

    public function firmasPolitica(){
    	if ($this->info['firmaEntrega']!="") {
    		$imgdata = $this->info['firmaEntrega'];	
    		
    	}
    	else{
    		$imgdata=" ";
    	}	
    	$this->Image($imgdata, 120, 250, 40, 20, 'PNG', '', '', true, 300, '', false, false, 0);

    	$usuarioEntrega = $this->info['usuarioEntrega'];
    	$responsableRecibe = $this->info['usuarioEntrega'];
    	$this->SetFont('dejavusans', '', 6, '', true);
    	$txt = $responsableRecibe;
    	$txt = $txt.' '.$this->info['fecha'];
    	$this->writeHTMLCell(100, 5, 95, 265, $txt, 0, 1, 0, true, 'C', false);


    	$this->setCellPaddings(1, 1, 1, 1);
    	$this->setCellMargins(1, 1, 1, 1);
    	$this->SetFillColor(255, 255, 255);		
    	$this->SetFont('helvetica', '', 8,'',true);
    	$style = array('width' => 0.1, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0));
    	$this->Line(25, 270, 95, 270, $style);
    	$this->SetY(258);
    	$this->SetX(17);
    	$this->MultiCell(85, 20, 'NOMBRE, FIRMA DE QUIEN RECIBE Y FECHA /PRESTADOR DE SERVICIO ', 0, 'C', 1, 0, '', '', true, 0, false, true, 20, 'B');		
    	$this->Line(110, 270, 180, 270, $style);
    	$this->SetY(258);
    	$this->SetX(102);
    	$this->MultiCell(85, 20, 'NOMBRE, FIRMA DE QUIEN ENTREGA Y FECHA DEL TRASLADISTA Y/O CLIENTE / CONSUMIDOR', 0, 'C', 1, 0, '', '', true, 0, false, true, 20, 'B');


    	if ($this->info['firma']!="") {
    		$imgdatafirma = $this->info['firma'];				
    	}
    	else{
    		$imgdatafirma=" ";
    	}	
    	$this->Image($imgdatafirma, 35, 250, 40, 20, 'PNG', '', '', false, 300, '', false, false, 0);

    	$usuarioRec = $this->info['usuarioRec'];
    	$this->SetFont('dejavusans', '', 6, '', true);
    	$txt = $usuarioRec;
    	$txt = $txt.' '.$this->info['fecha'];
    	$this->writeHTMLCell(100, 5, 10, 265, $txt, 0, 1, 0, true, 'C', false);

    }




    private function query($value){
    	$this->total_query++;
    	$result = $this->link->query($value);
    	if (!$result){
    		echo 'MySQL Error: '.$this->link->error;
    		exit;
    	}
    	return $result;
    }
    private function fetch_array($value){
    	return mysqli_fetch_array($value);
    }
    private function conect(){
    	date_default_timezone_set("America/Mexico_City");
    	$this->local = FALSE;
    	$this->folio = $_GET['folio'];
    	$this->esquema = 'local';
    	if($this->esquema == 'local'){
    		$this->user  		= 'root';
    		$this->password 	= '';
    		$this->server 		= 'localhost';
    		$this->port			= '3306';
    		$this->database 	= 'frimax';
    	}
    	elseif($this->esquema == 'productivo'){
    		$this->user         = 'dbo686363322';
    		$this->password     = 'MsEQK#W+!9VV';
    		$this->server       = 'db686363322.db.1and1.com';
    		$this->port         = '3306';
    		$this->database     = 'db686363322';
    	}
    	elseif($this->esquema == 'pruebas'){
    		$this->user         = 'tdesyxwd_frimax';
    		$this->password     = 'Moro1983582001';
    		$this->server       = 'localhost';
    		$this->port         = '3306';
    		$this->database     = 'tdesyxwd_recepcion_frimax';
    	}

    	$this->link = mysqli_connect($this->server,$this->user, $this->password) or die(mysql_error());
    	mysqli_select_db( $this->link, $this->database) or die($this->link->error);

    	$this->info = mysqli_fetch_array($this->link->query('SELECT controlRecibe.id, controlRecibe.fecha, controlRecibe.folio, controlRecibe.usuarioEntrega, controlRecibe.responsableTelefono, controlRecibe.firmaEntrega, controlRecibe.responsableRecibe, controlRecibe.firmaRecibe, controlRecibe.telefonoRecibe, controlRecibe.fechaEntrega, controlVehiculo.noPedido, controlVehiculo.noOperacion, controlVehiculo.noSerie, controlVehiculo.chasis, controlVehiculo.modelo, controlVehiculo.anio, controlVehiculo.placa, controlanomalias.frente, controlanomalias.ladoIzq, controlanomalias.ladoDer, controlanomalias.arriba, controlanomalias.panel, controlanomalias.asientos, controlAdicional.tablero, controlAdicional.alarma, controlAdicional.reversa, controlAdicional.kilometraje, controlAdicional.carga, controlAdicional.aire, controlAdicional.combustible, controlAdicional.volts, controlAdicional.otro, controlAdicional.observaciones, in_clientes.nombre, CONCAT(userRecibe.nombre, " ", userRecibe.paterno," ",userRecibe.materno) AS usuarioRec, userRecibe.firma, CONCAT(userAsigna.nombre, " ", userAsigna.paterno," ",userAsigna.materno) AS usuarioAsigna, CONCAT(userEntrega.nombre, " ", userEntrega.paterno," ",userEntrega.materno) AS usuarioEntre, userEntrega.firma AS firmaEntre, controlRecibe.asesorComercial, controlRecibe.usuarioRecibe FROM controlRecibe LEFT JOIN controlAdicional ON controlAdicional.idControlRecibe = controlRecibe.id LEFT JOIN controlVehiculo ON controlVehiculo.idControlRecibe = controlRecibe.id LEFT JOIN controlanomalias ON controlanomalias.idRecibe = controlRecibe.id LEFT JOIN in_clientes ON in_clientes.id = controlRecibe.idCliente INNER JOIN usuarios AS userRecibe ON userRecibe.id = controlRecibe.usuarioRecibe INNER JOIN usuarios AS userAsigna ON userAsigna.id = controlRecibe.asesorComercial INNER JOIN usuarios AS userEntrega ON userEntrega.id = controlRecibe.firmaUsuarioRecibe WHERE controlRecibe.folio = "'.$this->folio.'"'));

    	$this->separaFecha($this->info['fecha']);
    }
    
    private function separaFecha($fecha){    
    	$f = explode(' ', $fecha);
    	$this->fecha = $f[0];
    	$this->hora = $f[1];
    }
}

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Daniel Huerta');
$pdf->SetTitle('Formato de Recepcion de unidad');
$pdf->SetFooterMargin(false);

$pdf->AddPage();
$pdf->setImagen(1);
$pdf->SetFont('Times','',12);
$pdf->informacion();
$pdf->accesorios();
$pdf->anomalias();
$pdf->linkChasis();
$pdf->inferior();
$pdf->firmas();
$pdf->telefonos();
$pdf->sucursal();
$pdf->AddPage();
$pdf->encabezado();
$pdf->sucursalp2();
$pdf->contenido();
if ($pdf->mostrarEntrega()) {
	$pdf->AddPage();
	$pdf->encabezado2();
	$pdf->sucursalp2();
	$pdf->contenidoEntrega();
}

$pdf->AddPage();
$pdf->politica();
$pdf->firmasPolitica();
//Close and output PDF document
$pdf->Output('Formato de Recepcion de unidad.pdf', 'I');
?>
