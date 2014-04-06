<p>Im folgenden finden sie das vorläufige Programm für die Tage des Symposiums. Die Veranstaltungen finden auf dem Heidelberger Uniplatz und in der Universität Heidelberg statt.</p>

<p><b>Preopening:</b> <?=Vortrag::timeslot_string(0, 6)?></p>

<div class="programm-box table-responsive">
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th></th>
				<?php
					for ($day=1; $day<=3; $day++) {
						echo '<th>'.Vortrag::day_string($day).'</th>';
					}
				?>
			</tr>
		</thead>
		<tbody>
			<?php
				for ($slot=1; $slot<=6; $slot++) {
					echo '<tr><th>'.Vortrag::slot_string($slot).'</th>';
					for ($day=1; $day<=3; $day++) {
						echo '<td>';
						foreach (Vortrag::vortraege_in_timeslot($day, $slot) as $vortrag) {
							echo $vortrag->tableItem();
						}
						echo '</td>';
					}
					echo '</tr>';
				}
			?>
<!--			<tr>
				<th>9.00</th>
				<td></td>
				<td><?=Vortrag::getVortrag('sportliche-grenzen')->tableItem()?><?=Vortrag::getVortrag('aerzte-ohne-grenzen')->tableItem()?><?=Vortrag::getVortrag('25-jahre-mauerfall')->tableItem()?><?=Vortrag::getVortrag('spirituelle-grenzen')->tableItem()?></td>
				<td><?=Vortrag::getVortrag('grenzen-der-ressourcen')->tableItem()?><?=Vortrag::getVortrag('innerdeutsche-grenzen')->tableItem()?><?=Vortrag::getVortrag('grenzen-des-konsums')->tableItem()?><?=Vortrag::getVortrag('grenzen-der-moral')->tableItem()?></td>
			</tr>
			<tr>
				<th>11.00</th>
				<td><?=Vortrag::getVortrag('eroeffnungsvortrag')->tableItem()?></td>
				<td><?=Vortrag::getVortrag('koerperliche-grenzen')->tableItem()?></td>
				<td><?=Vortrag::getVortrag('europaeische-union')->tableItem()?></td>
			</tr>
			<tr>
				<th>14.00</th>
				<td><?=Vortrag::getVortrag('gespraechsrunde-mit-frank-plasberg')->tableItem()?></td>
				<td><?=Vortrag::getVortrag('voelkerrecht')->tableItem()?><?=Vortrag::getVortrag('feminismus')->tableItem()?></td>
				<td><?=Vortrag::getVortrag('medizinethik')->tableItem()?></td>
			</tr>
			<tr>
				<th>16.00</th>
				<td><?=Vortrag::getVortrag('100-jahre-erster-weltkrieg')->tableItem()?></td>
				<td><?=Vortrag::getVortrag('privatsphaere')->tableItem()?></td>
				<td><?=Vortrag::getVortrag('abschlussvortrag')->tableItem()?></td>
			</tr>
			<tr>
				<th>18.00</th>
				<td><?=Vortrag::getVortrag('wirtschaftliche-grenzen')->tableItem()?></td>
				<td><?=Vortrag::getVortrag('grenzen-des-alls')->tableItem()?></td>
				<td></td>
			</tr>
			<tr>
				<th>20.00</th>
				<td><?=Vortrag::getVortrag('lesung')->tableItem()?></td>
				<td><?=Vortrag::getVortrag('theater')->tableItem()?>
				<td><?=Vortrag::getVortrag('poetryslam')->tableItem()?></td>
			</tr>
			<tr>
				<th>22.00</th>
				<td></td>
				<td></td>
				<td>Abschlussparty</td>-->
		</tbody>
	</table>
</div>

<p>Eine Übersicht als PDF finden Sie Sie hier als <a href="download/programm_symposium2014.pdf" target="_blank">Download</a>.</p>
<p>Das endgültige Programm wird in Kürze bereitgestellt.</p>
