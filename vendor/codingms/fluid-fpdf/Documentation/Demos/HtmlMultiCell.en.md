# Fluid FPDF Tutorial HTML MultiCell for RTE-Texte

```xml
<html xmlns="http://www.w3.org/1999/xhtml" lang="en"
	  xmlns:f="http://typo3.org/ns/fluid/ViewHelpers"
	  xmlns:fpdf="http://typo3.org/ns/CodingMs/FluidFpdf/ViewHelpers"
	  data-namespace-typo3-fluid="true">
	<fpdf:pdf>
		<fpdf:addPage>

			<fpdf:setFont family="Courier" style="N" size="9" />
			<fpdf:variable.set name="multiLineText">
				<p>Mit dem zentralen Innovationsprogramm Mittelstand (ZIM) fördert das BMWi mittelständische&nbsp;Unternehmen deutschlandweit in der Umsetzung von innovativen Vorhaben über den Stand der Technik hinaus. Gefördert wird die Entwicklung von Produkten, Verfahren oder technischen Dienstleistungen; sowohl in Einzel- (ZIM-EP) als auch in Kooperationsprojekten (ZIM-KOOP).</p>
				<p>Als Vorstufe zum "großen" ZIM-Projekt wurde mit der Anpassung der Förderrichtlinie die Durchführbarkeitsstudie (ZIM-DS) eingeführt. Ziel ist die Realisierbarkeit und die Erfolgsaussichten innovativer Produkte, Verfahren oder technischer Dienstleistungen anhand von Vorprojekten und Studien zu validieren.</p>
				<p>&nbsp;</p>
				<p><strong>Wer wird gefördert?</strong></p>
				<p>ZIM-Durchführbarkeitsstudie</p>
				<ul>
					<li>Kleinstunternehmen (weniger als&nbsp;10 Mitarbeiter:innen)</li>
					<li>junges Unternehmen (weniger als 10 Jahre)</li>
					<li>Erstbewilligungsempfänger:innen (keine FuE-Förderungen in den letzten 3 Jahren)</li>
				</ul>
				<p>ZIM-Einzel- und Kooperationsprojekte</p>
				<ul>
					<li>KMU bis 500 Mitarbeiter:innen&nbsp;(ggf. bis 1.000 Mitarbeiter:innen)</li>
					<li>auch Kooperationen mit Hochschulen&nbsp;/ FuE-Einrichtungen</li>
				</ul>
				<p>&nbsp;</p>
				<p><strong>Was wird gefördert?</strong></p>
				<ul>
					<li>technische Vorprojekte, Studien und Tests sowie Recherchearbeiten (Markt, Stand der Technik, etc.)</li>
					<li>themenoffene Entwicklungen (Personalkosten, Dienstleister:innen) neuer Produkte, Verfahren oder Dienstleistungen, welche nicht Stand der Technik sind</li>
				</ul>
				<p>&nbsp;</p>
				<p><strong>Wie wird gefördert?</strong></p>
				<p>ZIM-Durchführbarkeitsstudie</p>
				<ul>
					<li>Zuschuss: bis zu&nbsp;70.000 €</li>
					<li>Förderquote:&nbsp;50 % bis 70 % (je nach Unternehmensgröße)</li>
				</ul>
				<p>ZIM-Einzelprojekt</p>
				<ul>
					<li>Zuschuss: bis zu 247.500 €</li>
					<li>Förderquote: 25 % bis 45&nbsp;% (je nach Unternehmensgröße)</li>
				</ul>
				<p>ZIM-Kooperationsprojekt (mind. zwei Partner:innen)</p>
				<p>Unternehmen</p>
				<ul>
					<li>Zuschuss: bis zu 270.000 €&nbsp;(je Kooperationspartner:innen)</li>
					<li>Förderquote: 30 %&nbsp;- 60 %&nbsp;(je nach Unternehmensgröße)</li>
				</ul>
				<p>Forschungs- und Entwicklungseinrichtungen</p>
				<ul>
					<li>Zuschuss: bis zu 220.000 €</li>
					<li>Förderquote: 100 %</li>
				</ul>
				<p>Förderfähige Kosten</p>
				<ul>
					<li>Personalkosten</li>
					<li>externe Dienstleister:innen</li>
				</ul>
			</fpdf:variable.set>
			<fpdf:htmlMultiCell x="25"
								width="150"
								height="4"
								listMarginBottom="2"
								listIndent="0"
								listIndentMargin="4"
								listItemMarginBottom="0"
								paragraphMarginBottom="4"
								text="{multiLineText}"/>

			<fpdf:addPage />

			<fpdf:variable.set name="crmtest"><p>Normaler Text&nbsp;sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdf.<br />
				Hier beginnt ein neuer Absatz dfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadga.</p>
				<p>Hier ein einzelner Paragraph mit Sonderzeichen sdfgsdfgs &gt;dsfgsdfg sd&gt; &lt; #+!"§$%&amp;/(.<br />
					Hier ein paar gängige: Euro (€), apo-a (à), bullet (•)</p>
				<p>Hier Text mit <b>bold</b>, und ein wenig <i>italic</i>, dann <u>underlined</u> und abschließend durch <strike>gestrichen</strike>. Jetzt eine Kombination <i><b>aus bold und italic</b></i>, <i><u>italic und underlined</u></i>,&nbsp;</p>
				<p>Als nächstes starten wir eine numerische Aufzählung:</p>
				<ol>
					<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</li>
					<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br />
						Hier ein Absatz in der Aufzählung: amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</li>
					<li>Unter diesem Punkt startet eine verschachtete Aufzählung mit Bullets:
						<ul>
							<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata san.</li>
							<li>Lorem ipsum dolor sit amet, sed diam, consetetur sadipscing elitr.</li>
							<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam.</li>
							<li>nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</li>
						</ul>
					</li>
					<li>Hier geht es mit Punkt 4 weiter. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</li>
				</ol>
				<p>Normaler Text und jetzt folgen zwei harte breaks..<br />
					<br />
					<br />
					..und hier geht es mit dem Text weiter.</p>
				<ol>
					<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br />
						Hier ein Absat
						<ol>
							<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br />
								Hier ein Absat</li>
							<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br />
								Hier ein Absat
								<ol>
									<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br />
										Hier ein Absat</li>
									<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br />
										Hier ein Absat</li>
									<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br />
										Hier ein Absat</li>
								</ol>
							</li>
							<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br />
								Hier ein Absat</li>
							<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br />
								Hier ein Absat</li>
						</ol>
					</li>
					<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br />
						Hier ein Absat</li>
					<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br />
						Hier ein Absat</li>
				</ol>
			</fpdf:variable.set>
			<fpdf:setFont family="Courier" style="N" size="8.50" />
			<fpdf:htmlMultiCell height="4"
								width="160"
								x="20"
								text="{crmtest}" />

			<fpdf:addPage />

			<fpdf:variable.set name="crmtest"><h1>Headline 1</h1><p>Normaler Text&nbsp;sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdf.<br />
				Hier beginnt ein neuer Absatz dfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadga.</p>
				<p>Hier ein einzelner Paragraph mit Sonderzeichen sdfgsdfgs &gt;dsfgsdfg sd&gt; &lt; #+!"§$%&amp;/(.<br />
					Hier ein paar gängige: Euro (€), apo-a (à), bullet (•)</p>
				<p>Hier Text mit <b>bold</b>, und ein wenig <i>italic</i>, dann <u>underlined</u> und abschließend durch <strike>gestrichen</strike>. Jetzt eine Kombination <i><b>aus bold und italic</b></i>, <i><u>italic und underlined</u></i>,&nbsp;und hier <strong>strong</strong></p>
				<h2>Headline 2</h2>
				<p>Als nächstes starten wir eine numerische Aufzählung:</p>
				<ol>
					<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</li>
					<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br />
						Hier ein Absatz in der Aufzählung: amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</li>
					<li>Unter diesem Punkt startet eine verschachtete Aufzählung mit Bullets:
						<ul>
							<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata san.</li>
							<li>Lorem ipsum dolor sit amet, sed diam, consetetur sadipscing elitr.</li>
							<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam.</li>
							<li>nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</li>
						</ul>
					</li>
					<li>Hier geht es mit Punkt 4 weiter. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</li>
				</ol>
				<h3>Headline 3</h3>
				<p>Normaler Text und jetzt folgen zwei harte breaks..<br />
					<br />
					<br />
					..und hier geht es mit dem Text weiter.</p>
				<h4>Headline 4</h4>
				<ol>
					<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br />
						Hier ein Absat
						<ol>
							<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br />
								Hier ein Absat</li>
							<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br />
								Hier ein Absat
								<ol>
									<li>Lorem ipsu</li>
									<li>Lorem ipsum in Absat</li>
									<li>Lorem ips Absat</li>
								</ol>
							</li>
							<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br />
								Hier ein Absat</li>
							<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br />
								Hier ein Absat</li>
						</ol>
					</li>
					<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br />
						Hier ein Absat</li>
					<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br />
						Hier ein Absat</li>
				</ol>
				<h5>Headline 5</h5>
				<p>Normaler Text und jetzt folgen zwei harte breaks..<br />
					<br />
					<br />
					..und hier geht es mit dem Text weiter.</p>
				<pagebreak />
				<h1>Headline 1 <b>bold</b> <i>italic</i></h1><p>Normaler Text&nbsp;sdfg sdfg <small>this is a small text</small> sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdf.<br />
					Hier beginnt ein neuer Absatz dfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfggasdfdfg sdfg sdfg sdfg sdadgasdfdgasdfdfg sdfg sdfg sdfg sdadgasdfdgasdfdfg sdfg sdfg sdfg sdadgasdfdgasdfdfg sdfg sdfg sdfg sdadgasdfd</p>
				<h1>Headline 1 <b>bold</b> <i>italic</i></h1><p>Normaler Text&nbsp;sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdf.<br />
					Hier beginnt ein neuer Absatz dfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfggasdfdfg sdfg sdfg sdfg sdadgasdfdgasdfdfg sdfg sdfg sdfg sdadgasdfdgasdfdfg sdfg sdfg sdfg sdadgasdfdgasdfdfg sdfg sdfg sdfg sdadgasdfd</p>
				<h2>Headline 2 <b>bold</b> <i>italic</i></h2><p>Normaler Text&nbsp;sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdf.<br />
					Hier beginnt ein neuer Absatz dfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfggasdfdfg sdfg sdfg sdfg sdadgasdfdgasdfdfg sdfg sdfg sdfg sdadgasdfdgasdfdfg sdfg sdfg sdfg sdadgasdfdgasdfdfg sdfg sdfg sdfg sdadgasdfd</p>
				<h3>Headline 3 <b>bold</b> <i>italic</i></h3><p>Normaler Text&nbsp;sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdf.<br />
					Hier beginnt ein neuer Absatz dfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfggasdfdfg sdfg sdfg sdfg sdadgasdfdgasdfdfg sdfg sdfg sdfg sdadgasdfdgasdfdfg sdfg sdfg sdfg sdadgasdfdgasdfdfg sdfg sdfg sdfg sdadgasdfd</p>
				<h4>Headline 4 <b>bold</b> <i>italic</i></h4><p>Normaler Text&nbsp;sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdf.<br />
					Hier beginnt ein neuer Absatz dfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfggasdfdfg sdfg sdfg sdfg sdadgasdfdgasdfdfg sdfg sdfg sdfg sdadgasdfdgasdfdfg sdfg sdfg sdfg sdadgasdfdgasdfdfg sdfg sdfg sdfg sdadgasdfd</p>
				<h5>Headline 5 <b>bold</b> <i>italic</i></h5><p>Normaler Text&nbsp;sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdf.<br />
					Hier beginnt ein neuer Absatz dfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfggasdfdfg sdfg sdfg sdfg sdadgasdfdgasdfdfg sdfg sdfg sdfg sdadgasdfdgasdfdfg sdfg sdfg sdfg sdadgasdfdgasdfdfg sdfg sdfg sdfg sdadgasdfd</p>

			</fpdf:variable.set>
			<fpdf:setFont family="Courier" style="N" size="8.50" />
			<fpdf:htmlMultiCell height="4"
								width="160"
								x="20"
								text="{crmtest}" />

			<fpdf:addPage />

			<fpdf:variable.set name="crmtest">
				<h5>Beispiel für Definitionslisten</h5>
				<dl>
					<dt>Erstes Etikett</dt>
					<dd>Erste Definition</dd>
					<dt>Zweites Etikett</dt>
					<dd>Zweite Definition</dd>
					<dt>Drittes Etikett</dt>
					<dd>Dritte Definition</dd>
				</dl>
			</fpdf:variable.set>
			<fpdf:setFont family="Courier" style="N" size="8.50" />
			<fpdf:htmlMultiCell height="4"
								width="160"
								x="20"
								text="{crmtest}"
								listIndent="0"
								ddTitleBold="1"
								ddTitleWidth="35" />

		</fpdf:addPage>
	</fpdf:pdf>
</html>

```
