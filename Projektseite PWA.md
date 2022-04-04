# --> ThePWA <--
<h1>PWA -- Projektseite</h1>

<h2> Inhalt </h2>
<ul style="list-stlye-type:none">
<li><a href="#kapitell">1. Einleitung</a></li>
<li><a href="#kapitel2">2. Progressive-Web-App</a></li>
<li><a href="#kapitel3">3. Projektentwicklung</a></li>
<li><a href="#kapitel4">4. Vorstellung des Projekts</a></li>
<li><a href="#kapitel5">5. Der Code</a></li>
<li><a href="#kapitel6">6. Der Service-Worker</a></li>
<li><a href="#kapitel7">7. Die APIs</a></li>
<li><a href="#kapitel8">8. Kritik</a></li>
<li><a href="#kapitel9">9. Fazit</a></li>
<li><a href="#kapitel10">10. Quellen</a></li>
<li><a href="#kapitel11">11. Eigenständigkeitserklärung</a></li>
<br>
  <h2 id="kapitell">1. Einleitung</h2>
  
  
Das Projekt haben wir in unserem <a href="Stundenprotokoll PWA.md">Stundenprotokoll</a> dokumentiert. Hier ist jede Unterrichtsstunde mit einem Beitrag und einer dazugehörigen Erläuterung aufgeführt.<br><br>Zur besseren Übersicht gelangt man hier zum <a href="README.md">README.md</a>, wo alle Projektbeiträge zentral verknüpft sind.<br><br>
Auf unserer eigenen <a href="https://henrik.stormarnschueler.de/">Website</a> kann die PWA angesehen und heruntergeladen werden.</p><br>
  
  <h3>Installations-Guide</h3>
  <p>Hier ein Guide für Android, Win und IOS!!</p>

  <h2 id="kapitel2">2. Progressive-Web-App</h2>
  <p>Eine Progressive Web App (PWA) ist eine Website, die zahlreiche Merkmale besitzt, die bislang nativen Apps vorbehalten waren. Sie kann daher auch als Symbiose aus einer responsiven Webseite und einer App beschrieben werden. Progressive Web Apps können wie eine Webseite mit HTML5, CSS3 und JavaScript erstellt werden. Zusätzlich dienen sogenannte Service Worker durch optimiertes Caching den Offline-Funktionalitäten. Zur Kommunikation zwischen Webclient und Webserver ist das HTTPS-Protokoll vorgeschrieben.

Mehr und mehr Menschen nutzen das Smartphone, um auf das Internet zuzugreifen. In Deutschland betraf der Anteil der Internetnutzer via Smartphone schon im Jahr 2014 etwa 69 % </p>
  
  <h2 id="kapitel3">3.Projektentwicklung</h2>
  <h2 id="kapitel4">4. Vorstellung des Projektes</h2>
  <h2 id="kapitel5">5. Der Code</h2>
  <h2 id="kapitel6">6. Der Service-Worker</h2>
  <h2 id="kapitel7">7. Die APIs</h2>
  <p>Die Abkürzung API steht für „Application Programming Interface“ und ist eine Programmierschnittstelle. Mit dieser API-Schnittstelle zur Anwendungsprogrammierung können zwei Anwendungen, die voneinander unabhängig sind, problemlos interagieren und Daten austauschen. Anders ausgedrückt: Eine Programmierschnittstelle dient als „Brücke“ zwischen zwei Programmen, über die Daten hin und her gesendet werden. Wir haben bei unserem Projekt vor allem Web-APIs verwendet, die eine Schnittstelle zwischen dem Browser und z.B. den Sensoren des Handys ermöglicht.</p>
                                  
  <p>Leider waren die von uns eingesetzten APIs nicht in allen Browser kompatibel, daher folgt hier eine Übersicht, welche Browser welche vno uns verwendete API unterstützen.</p>
  
<table>
  <tr><th>APIs</th>                 <th>Zweck</th>  <th>Chrome</th> <th>Edge</th> <th>Safari</th> <th>Firefox</th></tr>
  <tr><td>HTML Geolocation API</td> <td>
    Die API wird bei uns genutzt, um mit der Position des Users die Geschwindigkeit bestimmen zu können.
                                        </td>       <td>Ja</td>     <td>Ja</td>   <td>Ja</td>     <td>Ja</td> </tr>
  <tr><td>HTML Web Storage API</td> <td>
   Wird bei uns genutzt, um Eingaben des Users und Daten wie z.B. die Anzahl der getrunkenen Gläser lokal zu hinterlegen. DIes ist ein Vorteil da wir die Daten nicht auf unserem Server hinterlegen müssen und damit auch keine Informationen für falsche Zwecke nutzen können. Dies ist also die "datenspaarsamste" Möglichkeit, Daten des Users zu speichern. Datenschutz wird daher bei uns großgeschrieben!                                     
                                        </td>       <td>Ja</td>     <td>Ja</td>   <td>Ja</td>     <td>Ja</td> </tr>
  <tr><td>Generic Sensor API</td>   <td>
  Dient dem Auslesen der im Handy eingebauten Sensoren. Wir verwenden vor allem die Funktion, mit welcher wir den Beschleunigungssensor auslesen. Mit den vom Sensor erzeugten Daten berechnen wir, ob es sich bei einer Bewegung um einen Schritt gehandelt hat. Andere Sensoren, wie z.B. der Lichtsensor sind mit dieser API auch zugänglich.  
                                        </td>       <td>Ja</td>     <td>Ja</td>   <td>Nein!</td>  <td>Nein!</td>  </tr>
  <tr><td>Push API</td>             <td>
  Mit dieser API können wir dem User Push-Benachrichtigungen sende. Dies funktioniert im Moment vor allem über das Dev-Tool.  
                                        </td>       <td>Ja</td>     <td>Ja</td>   <td>Nein!</td>  <td>Nein!</td>  </tr>
  <tr><td>Background Fetch API</td> <td>
  Die Background Fetch API wollten wir verwenden, um den Schrittzähler auch bei ausgeschaltetem Handy bzw. dem Nutzen einer anderen APP zu aktualisieren. Leider gestaltete sich dies sehr kompliziert, weshalb wir dies v.a. auch aufgrund der eingeschränkten Zeit leider nicht weiter verfolgen konnten. Wir konnten zwar ein Fetch-Event manuell über das Dev.-Tool auslösen, dies aber nicht automatisieren. Aus diesem Grund haben wir mit der API experimentiert, die API aber am Ende nicht eingesetzt
                                        </td>       <td>Ja</td>     <td>Ja</td>   <td>Nein!</td>  <td>Nein!</td> </tr>
  <tr><td>Background Sync API</td> <td>
  Die Background Sync API dient der Hintergrund-Aktualisierung und auch dem Ziel, den Schrittzähler im Hintergrund zu aktualisieren. Auch diese API wurde zum Ende der Projektphase nicht eingesetzt.
                                        </td>       <td>Ja</td>     <td>Ja</td>   <td>Nein!</td>  <td>Nein!</td> </tr>
  <tr><td>Service Worker API</td>   <td></td>       <td>Ja</td>     <td>Ja</td>   <td>(Ja) </td>  <td>(Ja) </td> </tr>
  <tr><td>XX</td> <td></td> <td>XX</td> <td>XX</td> <td>XX</td>     <td>XX</td> </tr>
</table>
  
  <h2 id="kapitel8">8. Kritik</h2>
  <h2 id="kapitel9">9. Fazit</h2>
  <h2 id="kapitel10">10. Quellen</h2>
  
  <h3>Quellen für Inhalte der Projektseite</h3>
  <li>https://www.w3.org/TR/service-workers/#service-worker-concept</li>
  <li>https://developer.mozilla.org/en-US/docs/Web/API/Accelerometer</li>
  <li>https://developer.mozilla.org/de/docs/Web/API/Service_Worker_API</li>
  <li>https://act.com/de/wie-wichtig-ist-eine-api-fur-ihr-unternehmen/</li>
  <li>https://www.w3schools.com/html/html5_geolocation.asp</li>
  <li>https://www.w3schools.com/html/html5_webstorage.asp</li>
  <li>https://developer.mozilla.org/en-US/docs/Web/API/Sensor_APIs</li>
  <li>https://developer.mozilla.org/de/docs/Web/API/Push_API</li>
  <li>https://www.w3.org/TR/push-api/</li>
  <li>https://developer.mozilla.org/en-US/docs/Web/API/Background_Fetch_API</li>
  <li>https://developer.mozilla.org/en-US/docs/Web/API/Background_Synchronization_API</li>
  
  <h3>Quellen während der Projektphase</h3>
  
  
  <h2 id="kapitel11">11. Eigenständigkeitserklärung</h2>
  
<p>Wir erklären, dass wir die vorliegende Arbeit selbstständig und ohne Benutzung anderer als den angegebenen Hilfsmittel angefertigt und alle Stellen, die wörtlich oder sinngemäß aus veröffentlichten oder unveröffentlichten Schriften entnommen wurden, als solche kenntlich gemacht habe.
  Diese Arbeit wurde nicht, auch nicht auszugsweise, bereits für eine andere Prüfung angefertigt.</p>
