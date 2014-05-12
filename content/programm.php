<p>Im folgenden finden sie das aktuelle Programm für die Tage des Symposiums. Die Veranstaltungen finden auf dem Heidelberger Uniplatz und in der Universität Heidelberg statt.</p>

<p><a href="/vortrag/preopening"><b>Preopening:</b> <?=Vortrag::getVortrag('preopening')->get_timeslot_string(0, 6)?></a></p>

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
		</tbody>
	</table>
</div>

<p>Am 10.05 findet ab 23.00 Uhr eine Abschlussparty für alle Teilnehmer im KlubK am Karlstorbahnhof statt. Line-up:</p>
<li><a href="https://soundcloud.com/fraukreis">Frau Kreis</a></li>
<li><a href="https://soundcloud.com/himjim">himjim</a></li>
<li><a href="https://soundcloud.com/houseundgarten">la fetè</a></li>
<p><em>Der Eintritt ist für alle Symposiumsteilnehmer frei</em></p>
<p>Eine Übersicht als PDF finden Sie Sie hier als <a href="download/programm_symposium2014.pdf" target="_blank">Download</a>.</p>

