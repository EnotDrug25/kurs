<?php 
include 'C:/wamp64/www/medT8/BD/ajax/bd.php';
echo'
		<hr style="width:1703px;margin-left: -50px">
		<div class="uslugi">
			<h3 style=" margin-top:50px;">Услуги врача-педиатра</h3>


<div class="uslugi-bord">
			<table width="100%" rules="all">
<tbody>
<tr>
<td style="background: #bd1112;" colspan="3" width="100%"><strong style="color: #fff;">Услуги врача-педиатра</strong></td></tr>';
$sql=mysqli_query($link, "SELECT * FROM `pediator` " );

    while ($result = mysqli_fetch_array($sql)) {
        echo'
<tr>
<td><strong>'. $result["nom"] . " " .'</strong></td>
<td style="width: 1000px;">'. $result["nazv"] . " " .'</td>
<td style="width: 100px;"><strong>'. $result["cena"] . " " .'</strong></td>
</tr>
';}echo '
</tbody>
</table>
</div>
	</div>';

echo'
		<hr style="width:1703px;margin-left: -50px">
		<div class="uslugi">
			<h3 style=" margin-top:50px;">Услуги врача-офтальмолога</h3>


<div class="uslugi-bord">
			<table width="100%" rules="all">
<tbody>
<tr>
<td style="background: #bd1112;" colspan="3" width="100%"><strong style="color: #fff;">Услуги врача-офтальмолога</strong></td></tr>';
$sql=mysqli_query($link, "SELECT * FROM `oftal` " );

    while ($result = mysqli_fetch_array($sql)) {
        echo'
<tr>
<td><strong>'. $result["nom"] . " " .'</strong></td>
<td style="width: 1000px;">'. $result["naz"] . " " .'</td>
<td style="width: 100px;"><strong>'. $result["cena"] . " " .'</strong></td>
</tr>
';}echo '
</tbody>
</table>
</div>
	</div>';
	

echo'
		<hr style="width:1703px;margin-left: -50px">
		<div class="uslugi">
			<h3 style=" margin-top:50px;">Услуги врача-практолога</h3>


<div class="uslugi-bord">
			<table width="100%" rules="all">
<tbody>
<tr>
<td style="background: #bd1112;" colspan="3" width="100%"><strong style="color: #fff;">Услуги врача-практолога</strong></td></tr>';
$sql=mysqli_query($link, "SELECT * FROM `proc` " );

    while ($result = mysqli_fetch_array($sql)) {
        echo'
<tr>
<td><strong>'. $result["nom"] . " " .'</strong></td>
<td style="width: 1000px;">'. $result["naz"] . " " .'</td>
<td style="width: 100px;"><strong>'. $result["cena"] . " " .'</strong></td>
</tr>
';}echo '
</tbody>
</table>
</div>
	</div>';
	

echo'
		<hr style="width:1703px;margin-left: -50px">
		<div class="uslugi">
			<h3 style=" margin-top:50px;">Услуги врача-потологоанатома</h3>


<div class="uslugi-bord">
			<table width="100%" rules="all">
<tbody>
<tr>
<td style="background: #bd1112;" colspan="3" width="100%"><strong style="color: #fff;">Услуги врача-потологоанатома</strong></td></tr>';
$sql=mysqli_query($link, "SELECT * FROM `polog` " );

    while ($result = mysqli_fetch_array($sql)) {
        echo'
<tr>
<td><strong>'. $result["nom"] . " " .'</strong></td>
<td style="width: 1000px;">'. $result["naz"] . " " .'</td>
<td style="width: 100px;"><strong>'. $result["cena"] . " " .'</strong></td>
</tr>
';}echo '
</tbody>
</table>
</div>
	</div>';
	

echo'
		<hr style="width:1703px;margin-left: -50px">
		<div class="uslugi">
			<h3 style=" margin-top:50px;">Услуги врача-психолога</h3>


<div class="uslugi-bord">
			<table width="100%" rules="all">
<tbody>
<tr>
<td style="background: #bd1112;" colspan="3" width="100%"><strong style="color: #fff;">Услуги врача-психолога</strong></td></tr>';
$sql=mysqli_query($link, "SELECT * FROM `psich` " );

    while ($result = mysqli_fetch_array($sql)) {
        echo'
<tr>
<td><strong>'. $result["nom"] . " " .'</strong></td>
<td style="width: 1000px;">'. $result["naz"] . " " .'</td>
<td style="width: 100px;"><strong>'. $result["cena"] . " " .'</strong></td>
</tr>
';}echo '
</tbody>
</table>
</div>
	</div>';
	

echo'
		<hr style="width:1703px;margin-left: -50px">
		<div class="uslugi">
			<h3 style=" margin-top:50px;">Услуги врача-нарколога</h3>


<div class="uslugi-bord">
			<table width="100%" rules="all">
<tbody>
<tr>
<td style="background: #bd1112;" colspan="3" width="100%"><strong style="color: #fff;">Услуги врача-нарколога</strong></td></tr>';
$sql=mysqli_query($link, "SELECT * FROM `nark` " );

    while ($result = mysqli_fetch_array($sql)) {
        echo'
<tr>
<td><strong>'. $result["nom"] . " " .'</strong></td>
<td style="width: 1000px;">'. $result["naz"] . " " .'</td>
<td style="width: 100px;"><strong>'. $result["cena"] . " " .'</strong></td>
</tr>
';}echo '
</div>
	</div>
</tbody>
</table>';
	

	?>
	</div>
	</div>
	<div class="uslugi">
<div style="margin-left:790px"></div>
		<div style="margin-right:200px";>
			<p style="font-size: 14px; line-height: 18px;"><strong>*Под первичным приемом, </strong>в рамках настоящих Правил, понимается первичное обращение к врачу-специалисту в рамках договора между пациентом и ООО “ИЖВИЖН” и последующие обращения к врачу более чем через 6 месяцев с момента первого обращения.</p>
<p style="font-size: 14px; line-height: 18px;"><strong>**Под повторным приемом,</strong> в рамках настоящих Правил, понимается повторное обращение к врачу-специалисту в течении 6 месяцев с момента первичного обращения. Если с момента первичного приема прошло более 6 месяцев, следующий прием того же специалиста считается первичным.</p>
<p style="font-size: 14px; line-height: 18px;"><strong>***Под контрольным приемом,</strong> в рамках настоящих Правил, понимается повторным прием к врачу-специалисту для оценки течения заболевания и, в случае необходимости, внесения коррективов лечения.</p>

	</div>
	</div>