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
<p>Mehr und mehr Menschen nutzen das Smartphone, um auf das Internet zuzugreifen. In Deutschland betraf der Anteil der Internetnutzer via Smartphone schon im Jahr 2014 etwa 69 % aller Internetnutzer und heute im Jahr 2022 vermutlich schon deutlich mehr. Verständlich, da das Smartphone ein mobiler Gegenstand ist, der immer mitgeführt werden kann. Nicht ohne Grund ist die Entwicklung mobiler Apps ein Wachstumsmarkt. Mobile Apps generierten 2019 mehr als die Hälfte des weltweiten Internet-Datenaufkommens und bis 2022 sollen die Umsätze in den App Stores auf 157 Milliarden Dollar steigen. Um Kenntnis von diesem Wachstumsmarkt zu erlangen, haben wir uns in unserem Projekt damit beschäftigt, eine Fitness-App zu entwickeln, die dem Zeitgeist des Fitness-Health-Lifestyle folgen soll und auch auf dem Markt möglichst realistische Chancen hätte.<br><br>
Uns war von Beginn dieses Projektes klar, dass dies kein leichtes Unterfangen sein würde, da wir uns entschieden haben eine <a href="#kapitel2">Progressive-Web-App (PWA)</a> zu entwickeln. Die Technologie der PWA ist aber erst wenige Jahre alt (wurden erstmals ca. 2015-2016 entwickelt), weshalb vieles noch sehr experimentell ist und es wenig Quellen und Informationen dazu gibt. Dennoch basiert die Technologie auf uns bereits bekannten Sprachen: JavaScript, CSS, PHP und HTML.</p>
  
<p>Das Projekt haben wir in unserem <a href="Stundenprotokoll PWA.md">Stundenprotokoll</a> dokumentiert. Hier ist jede Unterrichtsstunde mit einem Beitrag und einer dazugehörigen Erläuterung aufgeführt.<br><br>Zur besseren Übersicht gelangt man hier zum <a href="README.md">README.md</a>, wo alle Projektbeiträge zentral verknüpft sind.<br><br>
Auf unserer eigenen <a href="https://henrik.stormarnschueler.de/">Website</a> kann die PWA angesehen und heruntergeladen werden.</p><br>
  
  <h3 id="guide">Installations-Guide</h3>
  <p>Hier ein Guide für Android, Win und IOS!!</p>

  <h2 id="kapitel2">2. Progressive-Web-App</h2>
  <p>Eine Progressive-Web-App (PWA) ist eine Website, die zahlreiche Merkmale besitzt, die bislang nativen Apps vorbehalten waren. Sie kann daher auch als Zusammenspiel aus einer responsiven Website und einer App beschrieben werden. PWAs können mit HTML/PHP, CSS und JavaScript erstellt werden, ähnlich wie "normale" Websites. Zur Kommunikation zwischen User (Webclient) und Webserver ist das HTTPS-Protokoll vorgeschrieben, weshalb das Testen der PWA bei uns immer unter Simulation eines lokalen Servers geschehen musste, der das HTTPS-Protokoll verwendet.<br>
Bei PWAs handelt es sich noch um verhältnismäßig neue und futuristische Technologie. Da sie häufig nur experimentell unterstützt wird, wird das Konzept der PWA bisher selten angewandt. Es gibt aber bereits große Unternehmen, die auf die Technologie der PWA setzen, weshalb dies vermutlich der nächste Evolutionsschritt der APP-Entwicklung sein wird. Vor allem Google und Meta sind an der Entwicklung dieser Technologie beteiligt.<br><br>
<b>Beispiele für ausgereifte PWAs sind:</b><br></p>
  <li><a href="https://www.pinterest.de/">Pinterest</a></li>
  <li><a href="https://www.google.com/maps/@53.6816548,10.2153181,14z?force=pwa&source=mlpwa">Google Maps Go</a></li>
  <li><a href="https://www.instagram.com/">Instagram Lite</a></li>
  <li><a href="https://www.bmw.com/en/index.html">BMW</a></li>
  <li><a href="https://code.nasa.gov/">NASA</a></li>
  <li><a href="https://web.telegram.org/z/">Telegram</a></li>
  <li><a href="https://m.facebook.com/">Facebook</a></li><br>
<p>Diese PWAs können über die URL aufgerufen und in bestimmten Browser auch installiert werden. Mehr dazu unter dem Punkt <a href="#Kompatibilität">Kompatibilität</a>.
  

<h3>Vorteile von Progressive-Web-Apps</h3>

<li><b>Add-To-Homescreen/Installierbarkeit:</b> Die App kann "heruntergeladen" werden und erscheint damit auf dem Homescreen. Die Web-Manifest-Datei erzeugt dabei ein Icon. Im Browser erscheint entweder eine Benachrichtigung zur Installationsbereitschaft (auf mobilen Geräten) oder im Browser-Menü oder der URL-Zeile erscheint eine Funktion zum Installieren (siehe <a href="#guide">Installations-Guide</a>).</li>


<li><b>Push Notifications:</b> Push Notifications sind ebenfalls von nativen Apps bekannt. Wir können damit dem Nutzer rückmelden, wenn er noch Wasser zu trinken hat.</li>
  

<li><b>Offline-Funktionalität:</b> Über den Service Worker stehen durch eine Caching-Funktion einmal online vom Server abgerufene Inhalte auch offline zur Verfügung. Auch dieses Merkmal erinnert an native Apps, die keine Internetverbindung voraussetzen.</li>
  

<li><b>Verfügbarkeit:</b> Statt für Android, IOS, Windows, Mac-OS und das Web eine APP zu entwickeln und implementieren, mussten wir nur unsere eine PWA entwickeln. Sie funktioniert in Grundsätzen unter allen Betriebssystemen (Android, IOS, Windows und Mac-OS, auch wenn diese das Konzept PWA unterschiedlich gut unterstützen). Einschränkungen gibt es vor allem beim Betriebssystem IOS und bei bestimmten Browser. Mehr zur Verfügbarkeit gibt es unter dem Punkt <a href="#kapitel7">API</a>.</li>

<li><b>Hardwarezugriff:</b> PWAs bieten die Möglichkeit, verschiedene Funktionen zu implementieren, die eigentlich auch nur nativen APPs vorbehalten sind. Es kann auf Sensorikdaten und Kameras zugegriffen werden oder Pushnotifications erstellt werden.</li>
  
<li><b>Veröffentlichung:</b> PWAs können im Google Play Store und Microsoft Store relativ einfach veröffentlicht werden. Möchte man die PWA in eine native APP umformen, so bieten zb. die Dienstleister <a href="https://appmaker.xyz/pwa-to-apk">APP-Maker</a> an, die PWA in eine APK umzuwandeln.</li>

<li><b>Performance:</b> PWAs sind schneller als übliche Web-Apps und benötigen meistens weniger Speicherplatz als native APPs. So ist die PWA von Pinterest gerade einmal 150KB groß, wohingegen die IOS-APP ganze 56MB groß ist. Davon kann die User Experience profitieren. Außerdem kann eine PWA den Web-Traffic nutzen, was bedeutet, dass sie über die URL verlinkbar ist und in Suchmaschinen als Suchergebnis angezeigt werden kann.
  
<h3>Lighthouse-Bericht</h3>
<p>Wenn man eine PWA entwickelt hat, bietet das DevTool die Möglichkeit die APP mit Hilfe eines sogenannten "Lighthouse-Tools" die Funktion der PWA zu überprüfen. Dabei wird die Installierbarkeit an Hand des Service-Workers und des Webmanifests geprüft.</p>
  
  
  <h2 id="kapitel3">3. Projektentwicklung</h2>
<p>In der ersten Stunde unseres Projektes haben wir uns überlegt, welches Projekt für uns geeignet sein könnte. Wir wollten ein Projekt beginnen, dass unsere Programmier-Kenntnisse fordert und fördert. Zu Beginn standen mehrere Ideen im Raum. So standen wir vor der Auswahl zwischen Programmen zur Erstellung eines Sitzplanes, für schulische Zwecke, einer Einkaufliste, eines Kalenders, verschiedener Minispiele und der Entwicklung einer Lern-App. Wir haben uns abschließend dafür entschieden, eine Fitness-App zu entwickeln. Anschließend stand die Frage im Raum, welche Technologie wir zur Erstellung der App nutzen wollen. Wir hätten eine native App entwickeln können, obwohl wir dafür die Sprachen der spezifischen Entwicklungsumgebung hätten lernen müssen. Da wir uns beide bereits mit der Web-Entwicklung (HTML, PHP, CSS und JavaScript) auskannten und wir schonmal im Internet etwas von dem Konzept der PWA gelesen hatten, stand für uns sehr schnell fest, dass wir eine Fitness-PWA entwickeln wollten. Dass dies aufgrund der neuen und experimentellen Technologie nicht einfach werden würde, war uns bereits am Anfang bewusst.<br>
Besonders am Amfang war es schwierig, sich in das Konzept der PWA einzuarbeiten. Wir haben mit der Basis, dem <a href="#kapitel6">Service-Worker</a>, begonnen und dieses stellte sich bereits als sehr schwierig heraus. Wir mussten in diesem Stadium mit einem lokalen Server arbeiten, da der Service-Worker nur unter HTTPS funktioniert. Genutzt haben wir dafür das Programm XAMPP. Als die Service-Worker-Basis funktionierte und es möglich war, den Service-Worker zu registrieren, kamen neue Funktionen wie z.B. die Offline-Funktionalität, die Push-Benachrichtigungen etc. hinzu. Nebenher entwickelten wir bereits erste Ansätze für die GUI. Diese konnte ohne die Nutzung eines lokalen Servers entwickelt werden. Nachdem bereits auf allen unseren Seiten der Service-Worker eingebunden war, ergaben sich in der weiteren Entwicklung der APP einige Probleme. Der Service-Worker fetcht alle Anfragen des Users zu Server und antwortet, wenn möglich, mit einer bereits heruntergeladenen Datei. Dies war am Anfang sehr verwirrend, da wir eine grundlegende Änderung an der GUI durchgeführt haben (wie z.B. eine Änderung der Hintergrundfarbe), die Seite neu geladen haben, die Änderung aber nicht angezeigt wurde. Gelöst haben wir diese Problematik, indem wir bei großen Änderungen, sofern diese nicht angezeigt werden, entweder den Browsercache leeren oder die Registrierung des Service-Workers über das Dev-Tool aufheben.</p>
 
  <details><summary>Dev-Tool</summary>
    
![Übersicht-Dev-Tool](https://user-images.githubusercontent.com/88386049/161956545-e26aebb6-ec4e-4dd9-862e-39174d858f41.PNG)
![Übersicht-Dev-Tool1](https://user-images.githubusercontent.com/88386049/161956551-7f6908e3-cbf0-4223-ba43-763b863965f2.PNG)
    
  </details>

<p>Im zweiten Stadium haben wir das Konzept der Fitness-APP entwickelt. Wir haben den Schrittzähler, die Trink-Übersicht und die GUI gestaltet und entwickelt. Dafür brauchten wir nicht mehr auf einen lokalen Server setzen, da wir aufgrund des oben genannten Problemes den Service-Worker auskommentiert haben. Die reine Entwicklung der Funktion der APP konnte also einfach mit VS-Code durchgeführt werden und das Ergebnis war im Browser anzusehen. Immer während des Projektes haben wir unsere aktuellen Dateien auf unseren Server hochgeladen, um diese zu testen.<br>
Im dritten Stadium haben wir unsere GUI interaktiv gemacht, indem Werte, wie z.B. die Anzahl der getrunkenen Gläser lokal gespeichert wird und auf der Übersichtsseite angezeigt wird. Auch den Schrittzähler haben wir so modifiziert, dass seine Werte lokal gespeichert werden. Abschließend mussten wir, um unsere APP-Logik weiter zuverfolgen, unsere gespeicherten Daten nach einem Tag zurücksetzen, welches wir auch abschließend implementiert hatten.</p>    
  
  
  <h2 id="kapitel4">4. Vorstellung des Projektes</h2>
  
  <p>Unsere Idee zu Beginn des Projektes war es, eine Fitness-APP auf Basis des PWA-Konzeptes zu entwickeln. Diese Idee haben durchweg verfolgt und umgesetzt. So hat unsere APP verschiedene Fähigkeiten, die eine Fitness-APP besitzen sollte. Leider sind entgegen unserer Vision manche Features der APP nicht jedem Betriebssystem und Browser zugänglich. Um unsere APP in Gänze nutzen zu können, sollte man z.B. die Browser Chrome oder Edge nutzen. Das Betriebssystem Android unterstützt unsere APP am besten. Näheres zu der Kompatibilität gibt es <a href="#Kompatibilität">hier</a>. Folgende Fähigkeiten bietet unsere APP:</p>
  
  <h3>Design</h3>
  <p>Wir haben uns für unsere APP ein besonderes Design überlegt, damit die APP nicht nur Funktionen aufweist, sondern auch optisch anspruchsvoll ist. Dabei haben wir ein einheitliches Design, das vor Allem auf abgerundete Felder basiert, wie sie im Moment in vielen Design-Varianten vorkommen. Abgerundete Ecken wirken weich und freundlich. Unser Gehirn verbindet mit runderen Formen automatisch auch weichere Eigenschaften wie freundlich oder vertrauenswürdig, weil es diese Formen aus der Natur und unserer Umgebung entlehnt: Weiche Sachen sind oft Rund, spitzen Gegenständen sollte mit Vorsicht begegnet werden. Mit dem Design wollen wir noch mehr Vertrauen des Users erzeugen, damit unsere APP stärker frequentiert wird. In unserer APP gibt außer der abgerundeten Ecken immer wiederkehrende Design-Elemente, wie z.B. das Side-Menü oder die Menü-Leiste unten. Jede unserer Seiten beinhaltet diese Elemente. Die Design-Idee haben wir mit Affinity-Publisher entwickelt, einem professionellem Desktop-Publishing Programm, welches häufig zu Erstellung von APP Design genutzt wird.</p>
  
  <details><summary>Details zum Design</summary>
    
   ![Screenshot 2022-04-09 132730](https://user-images.githubusercontent.com/88386049/162572505-51737ee4-6ae8-43ca-b17f-bac2d50363ed.jpg)
    <p>Dies ist die Entwicklungsumgebung von Affinity-Publisher. Mit diesem Programm haben wir das Design entwickelt.</p> 
    
   ![Screenshot 2022-04-09 132754](https://user-images.githubusercontent.com/88386049/162572567-1e37405e-80be-491c-b2d5-2f142e4f6083.jpg)
    <p>Dies ist das Design der Übersichtsseite. Die blauen linien dienen der Übersicht der Entwicklung und zeigen an, wo sich ein Textfeld befindet.</p>
    
   
 ![Screenshot 2022-04-09 132817](https://user-images.githubusercontent.com/88386049/162572570-bbf6fd7d-2172-4fd3-98ab-ba163dd534dd.jpg)
    <p>Dies ist das Design für die Trink-Übersicht, welches wir in unserer APP aber etwas anders umgesetzt haben.</p>
    
![Screenshot 2022-04-09 132837](https://user-images.githubusercontent.com/88386049/162572572-a9d27d4c-8696-4471-b60a-506f8bca80d9.jpg)
    <p>Dies ist das Design des Pop-Ups, das wir fast genauso umgesetzt haben. Dabei haben wir die Farben leicht geändert und fragen andere Informationen ab. Auch haben wir ein Feld, das grau-transparent ist, damit das Pop-Up stärker in den Fokus gerät. Unser Pop-Up befindet sich nun nur auf der Übersichtsseite und wir auch nur beim ersten Einrichten aufgerufen.</p>
    
![Screenshot 2022-04-09 133634](https://user-images.githubusercontent.com/88386049/162572575-731e51b4-e29d-40a6-a470-bbcdf71d88f7.jpg)
   <p>Wir haben die Einstellungen so gestaltet, dass Zahnräder im Hintergrund die Seite optisch ansprechender wirken lassen sollen. Dabei werden ähnliche Informationen wie beim Pop-Up abgefragt.</p>
    
![Screenshot 2022-04-09 133658](https://user-images.githubusercontent.com/88386049/162572579-ed9aa490-1678-4bb4-a20c-c49640d37fe0.jpg)
    <p>Wie man bereits vielleicht gemerkt hat, sind einige Elemente in unserer App immer wiederkehrend. Diese haben wir mit einer so genannten Master-Seite erreicht, auf der die Menü-Leiste unten und das Side-Menü angegeben sind.</p> 

    
  </details>
  
  <h3>Offline-Funktion</h3>
  <p>Unsere APP kann nach dem ersten Einrichten offline verwenden, obwohl man dadurch keine Updates duch uns erhalten kann. Dennoch wurden beim ersten Einrichten alle Dateien (also Seiten, JS-Dokumente und Icons) heruntergeladen. Außerdem kommuniziert unsere APP nur sehr selten mit unserem Server. Daten wie der User-name oder die Schrittanzahl werden nicht mit dem Server synchronosiert, sondern lediglich lokal gespeichert. Das macht unsere APP auch besonders datensparsam, da wir keine Daten über den User sammeln, was bei eigentlich jeder anderen Fitness-APP der Fall ist.</p>
  
  <h3>Anmeldund per Pop-Up</h3>
  <p>Bei der Einrichtung unserer APP setzen wir auf ein Pop-Up, welches sich immer beim ersten Öffnen unserer APP zeigt. In dem Pup-Up kann/muss der User bestimmte Daten eingeben, wobei der User direkt angesprochen wird. Er muss seinen Benutzernamen, sein Gewicht, seine Schrittlänge und sein tägliches Schrittziel angeben. Anschließend muss der User den ``Speichern`` Button drücken. Das Pop-Up bewegt sich mit einem CSS-Effekt in den Bildschirm und bewegt sich nach dem Speichern aus dem Bildschirm-Bereich heraus. Anschließend wird die Seite neu geladen und die Übersicht wird mit den eingegebenen Daten angezeigt (siehe Übersicht).</p>
  
  <details><summary>Screenshots bei der Anmeldung</summary>
    
  ![Übersicht1](https://user-images.githubusercontent.com/88386049/163164906-46702af9-5211-4bd1-a498-8bc1b94aea54.PNG)
 
  </details>
  
  
  <h3>Übersicht</h3>
  <p>Unsere APP bietet auf der Hauptseite (Homeseite) eine Übersicht über alle Trainingsvorgänge und Erfolge seit Nutzung der APP. Wir geben den Fortschritt des Users mit Hilfe der Nutzung des lokales Speichers an, wo wir die, im Pop-Up abgefragte Daten und erreichte Schrittzahl speichern und abrufen könne, damit wir sie anzeigen können. Angezeigt werden die Anzahl der Schritte, sowie das Schrittziel, eine Übersicht über die getrunkenen Gläser und eine Übersicht über die durchgeführten Trainingsrunden.</p>
  
  <h3>Schrittzähler</h3>
  <p>Unsere APP verfügt über einen Schrittzähler, wobei ein Java-Script-Programm über eine Web-API mit den Handy-Sensoren überprüft, wann ein Schritt getan wird. Dabei wird über die Beschleunigung des Handys in Richtung aller Koordinaten-Achsen gemessen. Liegt diese zwischen 1 m/s^2 und 2 m/s^2 wird ein Schritt gezählt. In unserem Schrittzähler ist eine Übersicht über die Anzahl der Schritte und einem sich füllender Statusleiste gegeben und wird durch eine Ausgabe der aktuellen Geschwindigkeit, Strecke und der verbrannten Kalorien ergänzt.</p>
  
  <h3>Individuelles Trainingsprogramm</h3>
  
<p>Als Weitere Funktion haben wir einen Timer für ein individuelles Trainingsprogramm integriert. Hierbei gibt es zwei Regler mit denen man sowohl die Trainingszeit als auch die Pausenzeit einstellen kann. Diese beiden Timer wecheln sich immer ab und sind somit perfekt geeignet für ein Krafttraining mit verschiedenen Übungen. Außerdem haben wir zusätzlich zwei Trainingsvorschläge eingesetzt wo zwei Beispiele für Trainingszeiten bereits eingestellt sind. Zudem gibt es die Möglichkeit das Training zu pausieren. Während des Trainings werden die Runden mitgezählt die man absolviert hat. Die Ergebnisse werden auch in der Übersicht angezeigt. Hierbei wird unterschieden zwischen den Runden, die man heute gemacht und den Runden, die man seit Installation der App durchgeführt hat. Beide Ergebenisse werden lokal gespeichert und das tägliche Ergebnis immer nachts um 00:00 zurückgesetzt.</p>
    
    
  <h3>Health-Tipps</h3>
  <p>Wir schlagen unserem User vor, Sport zu machen und Training durchzuführen. Auch regen wir dazu an, mehr Wasser zu trinken, da dies Gesund ist und viele Menschen leider zu wenig trinken. Deshalb erinnern wir den User durch eine Benachrichtigung daran, genug Wasser zu trinken. Unsere Tipps basieren zwar auf verallgemeinerten Aussagen, wie z.B., dass pro Kg Körpergewicht ca. 35ml Wasser getrunken werden oder, dass pro Schritt ca. 0,035 Kalorien verbraucht werden, dennoch bieten diese eine gute Grundlage für einen Überblick.</p>
  
  <h3>Einstellungen</h3>
  <p>Falls unser User beim Einrichrten der APP einen Fehler gemacht hat, oder sich seine Ansprüche geändert haben, wie z.B., wenn man sich ein höheres tägliches Schrittziel setzten möchte, kann man dies nachträglich in den Einstellungen tun. Die Einstellungen sind so gestaltet, dass man jeden Wert einzeln ändern kann und einem angezeigt wird, welcher Wert vorher eingestellt war.</p>
  
  <p>Hier Fähigkeiten unserer APP auflisten! Design nicht vergessen</p>
  
  
  <h2 id="kapitel5">5. Der Code</h2>
  
  <h3>Übersicht:</h3>
  <li><a href="#cSW">5.1 Code des Service-Workers - JavaScript</a></li>
  <li><a href="#cSZ">5.2 Code für den Schrittzähler - JavaScript</a></li>
  <li><a href="#cIJ">5.3 Code Index.js - Javascript</a></li>
  <li><a href="#cPP">5.4 Code des Pop-Ups - HTML und JavaScript</a></li>
  <li><a href="#cWM">5.5 Code des Webmanifest - Json</a></li>
  
<table>
<tr><th>Code</th><th>Erklärung</th></tr>
<tr><td>Inhalt</td><td>Inhalt</td></tr>
<tr><td>Inhalt</td><td>Inhalt</td></tr>
</table>

<h3 id="cSW">5.1 Code des Service-Workers - JavaScript</h3>

<table>
    <tr><th>Code</th><th>Erklärung</th></tr>
    <tr><td>
    
```javascript
self.addEventListener("install", e => {
e.waitUntil(
    caches.open("static").then(cache =>{
         return cache.addAll([
            "./", 
            "./index.js", 
            "./style.css",
            "./sensor.js", 
            "./sensor.php",
            "./webmanifest.json",
            "./bilder/icon57.png",
            "./bilder/icon60.png",
            "./bilder/icon120.png",
            "./bilder/icon192.png",
            "./bilder/icon512.png",
          ]);
       })
    );
});
      
```
      
      
</td><td>
      
In diesem Abschnitt werden alle Dokumente in einem lokalen Speicher hinterlegt. Der lokale Speicher wird beim Laden der Seite geöffnet und ist unter der ID ```static``` im Dev-Tool abrufbar (siehe Screenshot 1). Dies beschleunigt das Laden der APP, indem bereits Logos und Bilder gespeichert sind und nicht erst heruntergeladen werden muss.</td></tr>
<tr><td>

```javascript
self.addEventListener('fetch', e => {
  console.log(`Intercepting fetch request for: ${e.request.url}`);

  e.respondWith(

    caches.match(e.request).then(cachedResponse => cachedResponse
                                                || fetch(e.request))
  );
});
```
  
</td><td>
Dieser Abschnitt dient dazu, bei einem eingehenden Fetch-Request (Abrufen der Dateien) den dazugehörige URL in die Console zu loggen (Screenshot 2) und gleichzeitig mit der angeforderten Datei zu Antworten, sie also dem Browser zur Verfügung stellen. Dies ermöglicht es uns, unsere APP auch offline zu verwenden.
</td></tr>
<tr><td>
  
```javascript
self.addEventListener('push', e => {
  e.waitUntil(
    self.registration.showNotification('Sehen Sie sich Ihre Statistiken an!', {  
      body: 'Sie waren die letzten Tage aktiv, hier sind Ihre Ergebnisse.',  
      icon: '/Bilder/icon120.png',
      tag: 'notification'
    })
  );
});
```

</td><td>
  
Im Moment können wir über das Dev-Tool mit diesem Abschnitt einen Push-Benachrichtigung mit der Botschaft ``Sehen Sie sich Ihre Statistiken an! [...]`` senden. Es erlaubt uns auch, ein Icon mit in die Push-Benachrichtigung einzubauen. Push-Benachrichtigen sind auch im Code einsetzbar, diese wird aber über den Service-Worker ausgelöst.
</td></tr>
</table>

<details><summary>Screenshots für Code Service-Worker</summary>
  
![Übersicht-Dev-Tool3](https://user-images.githubusercontent.com/88386049/163014168-b0f8209f-ef81-4b61-b1b5-d7857c849ece.PNG)
  <p>Speicher unter static.</p>
  
![Übersicht-Dev-Tool4](https://user-images.githubusercontent.com/88386049/163015434-00fb4627-2876-4965-9051-84e36c915e21.PNG)
  <p>Geloggte Fetch-URLs.</p>
  
![Push-Benachrichtigung](https://user-images.githubusercontent.com/88386049/163018661-d8fd8ead-ba5c-48fe-9ce6-4c0c9509118d.PNG)
  <p>Benachrichtigung</p>

</details>
  
<h3 id="cSZ">5.2 Code für den Schrittzähler - JavaScript</h3>   
  
<table>
<tr><th>Code</th><th>Erklärung</th></tr>
<tr><td>

```javascript
navigator.permissions.query({ name: 'accelerometer' })
.then(result => {
  
  if (result.state === 'denied') {
    console.log('Permission to use accelerometer sensor is denied.');
    return;
  }
    let acl = new Accelerometer({frequency: 5});
    let aMax = 0;
    let aMin = 0;
    let aGesamt = 0;
    let anzahlSchritte = 0; 
    
    acl.addEventListener('reading', () => {
    console.log("Beschleunigung in X-Achse: " + acl.x);
    console.log("Beschleunigung in Y-Achse: " + acl.y);
    console.log("Beschleunigung in Z-Achse: " + acl.z);
    const BeschleunigungX = acl.x;
    const BeschleunigungY = acl.y;
    const BeschleunigungZ = acl.z;
    var aGesamt = Math.sqrt(Math.pow(  Math.sqrt(Math.pow(acl.x, 2)
            + Math.pow(acl.y, 2) + Math.pow(acl.z, 2)) - 9.5 , 2));
    

    if(aGesamt > 1 && aGesamt < 2){
      anzahlSchritte = anzahlSchritte + 1;
      localStorage.setItem("Schritte", anzahlSchritte);
      ladeBalken();
      anzeigen();
    }
  });

  acl.start();
});
```

</td><td>
  
Zuerst wird geprüft, ob der Browser Zugriff auf den Beschleunigungssensor (accelerometer) hat. Ist dies der Fall, wird ``acl`` als neue Beschleunigung definiert, die alle 5 Mili-Sekunden abgerufen wird. Anschließend wird die Beschleunigung in X-Achsen-Richtung, Y-Achsen-Richtung und Z-Achsen-Richtung definiert. Es wird anschließend der Betrag des Beschleunigungsvektors berechnet und in der Variabel ``aGesamt`` gespeichert. Das Erstellen der Formel war ein knifflicher Teil der Arbeit. Sollte der Betrag der Beschleunigung größer als 1 m/s^2 und kleiner als 2 m/s^2 sein, wird dies als ein Schritt gewertet und anschließend auch als ein solcher lokal mit ``localSorage()`` gespeichert. Auch die Funktion ``ladeBalken()`` und ``anzeigen()`` wird dabei ausgeführt, die zum einen den Fortschrittsbalken laden soll und zum anderen die Schrittzahl anzeigt.
</td></tr>
<tr><td>

```javascript
if (navigator.geolocation) {
  var options = {
    enableHighAccuracy: true
  }
  navigator.geolocation.watchPosition(showPosition, showError, options);
} else {
  alert('Ihr Browser unterstützt die Geolocation API nicht.');
}


function showPosition(position) {  
  Geschwindigkeit.innerHTML = position.coords.speed * 3.6;
};
```
  
</td><td>
  
Hier wird überprüft, ob die Geolocation API verfügbar ist und, ob es eine Erlaubnis zum Nutzen dieser gibt. Sollte dies der Fall sein, wird ``navigator.geolocation.watchPosition(showPosition, showError, options);`` mit der untenstehenden ``showPosition(position)`` und in der nächsten Spalte folgenden ``showError(error)`` Funktion ausgeführt. In ``showPosition(position)`` wird außerdem die Geschwindigkeit in km/h berechnet und über innerHTML ausgegeben.
</td></tr>
<tr><td>

```javascript
function showError(error) {
  switch(error.code) {
      case error.PERMISSION_DENIED:
          alert('Sie haben die Abfrage ihrer Position untersagt.');
          break;
      case error.POSITION_UNAVAILABLE:
          alert('Es sind keine Positionsdaten verfügbar.');
          break;
      case error.TIMEOUT:
          alert('Das Timeout für die Ortsanfrage wurde überschritten.');
          break;
      default:
          alert('Es ist ein unbekannter Fehler aufgetreten (#' + 
                                 error.code + ': ' + error.message + ')');
          break;
  }
};
```

</td><td>
  
Die Funktion ``showError(error)`` wird immer dann ausgeführt, wenn es ein Problem mit der Geolocation API gibt. Dies lässt sich in verschiedene Szenarien teilen. Entweder die Erlaubnis, die API zu nutzen wird abgelehnt, die Position ist aufgrund einer fehlenden GPS-Fähigkeit nicht erreichbar oder es gab einen zu langen Versuch, die Position zu bestimmen. Siehe Screenshots.
</td></tr>
<tr><td>

```javascript
var erhoehe_pixel = 0;
var ladevorgang = 0;
var schritte = Number(localStorage.getItem("Schritte"));
var ziel = Number(localStorage.getItem("schrittZiel"));
var schrittLange = Number(localStorage.getItem("schrittLange"));
var Kal = 0.035;
```

</td><td>
  
In diesem Abschnitt werden einige wichtige Variablen, wie z.B. ``schritte``, die localStorage.getItem("Schritte"), in eine Zahl umgewandelt, entspricht, defininiert. Auch werden hier die Kalorien als 0,035 definiert, welche wir noch für spätere Berechnungen benötigen.
</td></tr>
<tr><td>

```javascript
function streckeBerechnen(){
  var schrittLange = Number(localStorage.getItem("schrittLange"));
  var schritte = Number(localStorage.getItem("Schritte"));
  var strecke = (Math.round(((schrittLange / 100) * schritte)* 100) / 100);
  Strecke.innerHTML = strecke;
}
```
  
</td><td>
  
Die Funktion ``streckeBerechnen()`` errechnet mit der Anzahl der Schritte und der Schrittlänge die zurückgelegte Strecke. Dabei werden die Schritte und die Schrittlänge aus dem lokalen Speicher entnommen. Abschließend wird die Strecke im HTML-Dokument angezeigt.
</td></tr>
<tr><td>

```javascript
function kalorienBerechnen(){
  var Kal = 0.035;
  var schritte = Number(localStorage.getItem("Schritte"));
  var kalorien = (Math.round((Kal * schritte) * 100) / 100);
  Kalorien.innerHTML = kalorien;
}
```
  
</td><td>
  
Die Funktion ``kalorienBerechnen()`` errechnet mit der Anzahl der Schritte und der Kontsante ``Kal`` der Kalorien die Anzahl der verbrannten Kalorien. Die Anzahl der Schritte wird dabei wieder aus dem lokalen Speicher entnommen. Abschließend werden die Kalorien im HTML-Dokument angezeigt.
</td></tr>
<tr><td>
  
```javascript
function anzeigen(){
ziel = localStorage.getItem("schrittZiel");

setInterval(function() {
  anzahlSchritte.innerHTML = Number(localStorage.getItem("Schritte"));
  streckeBerechnen();
  kalorienBerechnen();
  }, 100);
}
```

</td><td>
  
In der Funktion ``anzeigen()`` wird eine weitere Funktion in einem Intervall von 100ms ausgeführt. In dieser wird die Anzahl der Schritte aktualisiert und gleichzeitig die Funktion ``streckeBerechnen()`` und ``kalorienBerechnen()`` ausgeführt.
</td></tr>
</table>

  <details><summary>Screenshots Code des Schrittzählers</summary>
  
  ![Pop-Up](https://user-images.githubusercontent.com/88386049/163163734-ba2b9507-dc83-43a8-8c40-9669e17ba838.PNG)
      
  </details>
  
  
  
  
<h3 id="cIJ">5.3 Code Index.js - Javascript</h3>
  
<table>
<tr><th>Code</th><th>Erklärung</th></tr>
<tr><td>
  
```javascript
if ("serviceWorker" in navigator) {
    navigator.serviceWorker.register("sw.js").then(registration => {
        console.log("SW registered");
        console.log(registration);
    }).catch(error => {
        console.log("SW registration failed!");
        console.log(error);
    });
}
```

</td><td>
  
Sollte ein Service-Worker vorhanden sein, dann wird er registriert. Anschließend wird ``SW registered`` in die Konsole und anschließend die Registrierung selber geloggt (siehe Screenshot 1), welche zahlreiche Informationen zum Service-Worker enthält. Falls kein Service-Worker vorhanden ist, wird der Grund des Fehlers in die Konsole geloggt (siehe Screenshot 2). 
</td></tr>
<tr><td>
  
```javascript
setInterval( function(){

  var datum  = new Date();
  var month    = datum.getMonth();
  var day      = datum.getDate();
  var hours    = datum.getHours();
  var minut    = datum.getMinutes();
  var second   = datum.getSeconds();

  if (Number(localStorage.getItem("Tag")) != day) {
    localStorage.setItem("Schritte", 0);
    localStorage.setItem("Glas", 0);
    localStorage.setItem("rundenheu", 0);

    //nun aktuelles Datum lokal speichern
    localStorage.setItem("Tag", day);
    window.location.reload(true);
  }
}, 1000);
```
  
</td><td>
  
Damit unsere APP auch eine gewisse Logik verfolgt, müssen Daten, wie die täglich gezählten Schritte oder die Anzahl der getrunkenen Gläser täglich zurückgesetzt werden. Da wir bisher nicht in der Lage waren, einen Hintergrundsynchronisierung zu implementieren, mussten wir uns auf einem anderen Weg behelfen. Dazu haben wir eine Funktion geschrieben, die in einem Intervall von einer Sekunde ausgeführt wird. Dabei wird jedes Mal das Datum neu abgerufen und in der Variable ``datum`` gespeichert. Anschließend gewinnen wir Monat, Tag Stunde etc. von dem Datum und prüfen, ob das Datum ungleich dem lokal gespeicherten Datum ist. Sofern dies der Fall ist, also ein Tag vergangen ist, werden  Die Werte ``Schritte``, ``Glas`` und ``rundenheu`` zurückgesetzt, indem die Variablen den Wert 0 erhält. Abschließend wird die Seite neu geladen.
</td></tr>
<tr><td>
  
```javascript
Notification.requestPermission(function(status) {
    console.log('Notification permission status:', status);
});

function displayNotification(argument) {
    if (Notification.permission == 'granted') {
      navigator.serviceWorker.getRegistration().then(function(reg) {
        reg.showNotification(argument);
      });
    }
}
```
  
</td><td>
  
Mit dieser Funktion wird die Erlaubnis erfragt, die Benachrichtigungs-API zu nutzen. Der Status, also entweder erlaubt (granted) oder verboten (denied). Anschließend wird die Funktion ``displayNotification(argument)`` definiert, die sich ausführen lässt und dafür sorgt, dass eine Push-Benachrichtigung an den User gesandt wird.
</td></tr>
</table>

  
<details><summary>Screenshots Code Index.js</summary>
    
![Konsole](https://user-images.githubusercontent.com/88386049/163155530-879d6890-ea86-44df-87a5-e8222a8d5e27.PNG)
![Konsole1](https://user-images.githubusercontent.com/88386049/163156082-7a0c1bb5-dcaa-42e3-abb5-36ba90fe0100.PNG)
    
</details>
  
<h3 id="cPP">5.4 Code des Pop-Ups - HTML und JavaScript</h3>

<table>
<tr><th>Code</th><th>Erklärung</th></tr>
<tr><td>
  
```html
<div id="popup" class="modal">
  <!-- Inhalt -->
  <div class="modalcontent" id="modal-content">
      <div class="modal-header">
      <span class="close">&times;</span>
      <h2><span>&#128075;</span> Du bist neu hier! Gib uns ein paar
      Daten, damit diese App funktioniert.</h2>
      </div>
      <div class="modal-body">

       <p>Dein Name:              
       <input type="text" name="name" id="name" 
       placeholder="Dein Name..." class="input"></p>
       <p>Dein Gewicht:           
       <input type="range" name="Eingabegewicht" 
       max="200" step="5" id="Eingabegewicht" class="input">
       <span id="Gewichtausgabe"> 0 </span> kg</p>
       <p>Schrittlänge:           
       <input type="range" name="EingabeschrittLange" 
       max="100" step="5" id="EingabeschrittLange" class="input">
       <span id="Schrittlangeausgabe"> 0 </span> cm</p>
       <p>Tägliches Schrittziel:  
       <input type="range" name="EingabeschrittZiel" max="10000"
       step="10" id="EingabeschrittZiel" class="input">
       <span id="Zielausgabe"> 0 </span> Schritte</p>
                

       <button class="button" onclick="speichern()">Speichern</button>

      </div>
        <div class="modal-footer">
         <h3>Wir möchten Dich auf unsere 
         <a href="https://policies.google.com/technologies/
         cookies?utm_source=ucbs&hl=de">Cookies</a> hinweisen.
         Bitte lies unsere <a href="https://policies.google.com
         /terms?hl=de&fg=1&utm_source=ucbs">AGB</a> und die
         Datenschutzbestimmungen.
         </h3>
      </div>
   </div>
</div>
```
  
</td><td>
Dies ist der HTML-Code für unser Pop-Up zur Anmeldung. Es besteht aus einem Header, der die Begrüßung (Überschrift) enthält, einem Body, der die Inputfelder zum Namen mit einem Texteingagefeld, dem Gewicht, der Schrittlänge und dem Schrittziel mit einem Schiebe-Regler. Im Footer wird auf unsere nicht existenten Datenschutzbestimmungen und Coockies hingewiesen.
</td></tr>
<tr><td>
  
```javascript
function checkFirstUse() {
   if (!namE) {
      modal.style.display = "block";
   } else {
      modal.style.display = "none";
   }

 }
 ```

</td><td>
  
Diese Funktion wird jedes Mal beim Laden der Seite ausgeführt. Sie überprüft, ob die Variable ``namE`` bereits existiert. Sollte die Variable nicht existieren wird das Pop-Up angezeigt, ansonsten wird es nicht gezeigt. 
</td></tr>
<tr><td>
  
```javascript
function speichern() {
   //Daten aus Input-Feld auslesen
   name = document.querySelector("#name").value;
   gewicht = document.querySelector("#Eingabegewicht").value;
   ziel = document.querySelector("#EingabeschrittZiel").value;
   schrittLange = document.querySelector("#EingabeschrittLange").value;

   //jetzt Daten lokal speichern

   localStorage.setItem("name", name);
   localStorage.setItem("gewicht", gewicht)
   localStorage.setItem("schrittZiel", ziel);
   localStorage.setItem("schrittLange", schrittLange);


   setTimeout(function() {
   window.location.reload(true);
   }, 400);

}
```

</td><td>
  
Mit der Funktion ``speichern`` werden die Werte aus den Input-Feldern ausgelesen und anschließend lokal mit ``localStorage()`` gespeichert. Das Auslesen der Variablen funktioniert dabei über eine JavaScript-Query, die den Wert des Input-Feldes, unabhängig vom Variablen-Typ (also String bei Name oder Number bei Schrittziel), auslesen kann. Nachdem die Daten ausgelesen und lokal gespeichert sind, gibt es ein Time-Out von 400ms, damit das Pop-Up wieder die Zurück-Animation zeigen kann. Anschließend wird die Seite Neu geladen. Die Variable ``namE`` existiert nun und das Pop-Up öffnet sich nicht nocheinmal.
</td></tr>
</table>
<br>

  
<h3 id="cWM">5.5 Code des Webmanifest - Json</h3>

<table>
<tr><th>Code</th><th>Erklärung</th></tr>
<tr><td>
  
```json  
{
  "name": "ThePWA",
  "short_name": "ThePWA",
  "theme_color": "#262626",
  "background_color": "#262626",
  "display": "fullscreen",
  "orientation": "portrait",

  "dir": "ltr",
  "lang": "DE",
  "description": "A PWA to do your sports!",
  "related_applications": [],
  "prefer_related_applications": false,
```
  
</td><td>
In diesem Abschnitt wird der Name der APP auf ``ThePWA`` festgelegt, welcher nach der Installation auf dem Home-Bildschirm angezeigt wird. Außerdem wird die Hintergrundfarbe, die Farbe der Statusleiste oben am Handy (mit ``theme_color`` und die Orientierung, in der die APP angezeigt werden soll (Potrait-Mode und fullscreen), festgelegt. Außerdem wird die Beschreibung der APP (``A PWA to do your sports!``), sowie die Sprache der APP (deutsch) ergänzt.
</td></tr>
<tr><td>
  
```json
  "icons": [{
          "src": "/bilder/icon512.png",
          "sizes": "512x512",
          "type": "image/png"
      },
      {
          "src": "/bilder/icon192.png",
          "sizes": "192x192",
          "type": "image/png"
      },
      {
          "src": "/bilder/icon120.png",
          "sizes": "120x120",
          "type": "image/png"
      },
      {
          "src": "/bilder/icon60.png",
          "sizes": "60x60",
          "type": "image/png"
      },
      {
          "src": "/bilder/icon57.png",
          "sizes": "57x57",
          "type": "image/png"
      },
      {
          "src": "/bilder/favicon.ico",
          "sizes": "32x32"
      }
  ],
```
  
</td><td>Inhalt</td></tr>
<tr><td>
  
```json
  "scope": "./",
  "start_url": "./",
  "features": [
      "Cross Platform",
      "fast",
      "simple"
  ],
  "categories": [
      "utility"
  ]
}
```
</td><td>Inhalt</td></tr>
</table>
  
  <details><summary>Screenshots Webmanifest</summary>
    
  ![Screenshot (5)](https://user-images.githubusercontent.com/88386049/163549407-63bcebc9-b154-40c3-8eb9-050a1977be80.png)
  <p>Hier ist das im Webmanifest festgelegte Logo und die hinzugefügte Beschreibung zu sehen.</p>
    
  ![ig2](https://user-images.githubusercontent.com/88386049/163549512-d0f0d658-e5e6-410a-8051-cf1bf9145e82.PNG)
  <p>Auch in der Task-Leiste wird unser Logo angezeigt.</p>
  
  </details>
  
  <h2 id="kapitel6">6. Der Service-Worker</h2>
  
  <p>Service-Worker ist ein Element der modernen Webtechnologie und stellt ein Proxy (Kommunikationsschnittstelle) zwischen Server und Webbrowser dar. Service-Worker werden mit Java-Script entwickelt laufen vollständig asynchron und verhindert die Ausführung anderer Scripte, der Hauptlogik der Web-Anwendung nicht. Service-Worker laufen dabei aus Sicherheitsgründen nur über das HTTPS-Protokoll, da veränderte Netzwerkanfragen "Man in the middle"- Angriffe, bei dem sich ein Angreifer in der Kommunikation zwischen User und Server befindet, deutlich leichter machen würden. Die Service-Worker-Technologie ist noch experimentell, d.h., dass sie noch nicht in jedem Browser implementiert ist. Dies stellte sich für uns zu Anfang als Problem dar, welches wir aber umgehen konnten. Stand 10.04.2022 unterstützen folgende Browser die Service-Worker-Technologie:</p>
  
  <li>Microsoft Edge (basiert auf Chomium)</li>
  <li>Google Chrome</li>
  <li>Safari (Basic-Support)</li>
  <li>Samsung Internet</li>
  <li>Opera</li>
  <li><a href="https://developer.mozilla.org/de/docs/Web/API/Service_Worker_API#browser-kompatibilit%C3%A4t">Weitere Informationen</a></li>
  <br>
  
  Ein Service-Worker durchlebt drei Phasen. Er wird sofort heruntergeladen, sobald der User erstmals eine von Service-Workern kontrollierte Seite aufruft. Bei uns wird der Service-Worker auf allen Webseiten eingebunden, weshalb er immer bei jedem Besuch unserer APP installiert wird. Er durchläuft dabei den Prozess des Heruntergeladens und wird anschließend von Browser mit der ```ServiceWorker.register()``` Methode registriertregistriert und erst danach ausgeführt, wie dies die untenstehenden Abbildungen verdeutlichen. Dabei zeigt die erste Abbildung die Übersicht über die Phasen des Service-Workers und die zweite die Zeit, die der Service-Worker mit Installation (install), Registrierung (waiting) und aktiver Zeit (active) brauchte. Diesem Bild ist auch zu entnehmen, dass in meinem Browser gerade die 64. Version unseres Service-Workers ausgeführt wird. Alle 24 Stunden wird eine neue Version des Service-Workers, sofern eine Internetverbindung besteht, heruntergeladen und aktiviert, um Änderungen der Anwendung anzuzeigen.

<img width="972" alt="PNG-Bild(1)" src="https://user-images.githubusercontent.com/88386049/163009212-d7f98c48-33cd-4922-a65f-298fbebac988.png">

![Übersicht-Dev-Tool2](https://user-images.githubusercontent.com/88386049/162621243-f4fe5de1-3386-4063-ba16-c992e317d084.PNG)

<p>Der Service-Worker wird bei uns dazu genutzt werden, die APP zu beschleunigen, indem z.B. das Hintergrundbild bereits durch den Service-Worker heruntergeladen wird und lange Ladezeiten dadurch vermieden werden. Service-Worker sind generell ereignisgesteuert, das bedeutet, dass sie durch ein Ereigniss, z.B. das Laden einer Seite, getriggert werden. Dabei arbeiten wir mit Event-Listenern, die überprüfen, ob es ein Event gibt. Die Service-Worker-Technologie wird sich mit dem Aufstieg der PWAs weiterentwickeln und weitere Funktionen erhalten.</p>
  
  
  <h2 id="kapitel7">7. Die APIs</h2>
  <p>Die Abkürzung API steht für „Application Programming Interface“ und ist eine Programmierschnittstelle. Mit dieser API-Schnittstelle zur Anwendungsprogrammierung können zwei Anwendungen, die voneinander unabhängig sind, problemlos interagieren und Daten austauschen. Anders ausgedrückt: Eine Programmierschnittstelle dient als „Brücke“ zwischen zwei Programmen, über die Daten hin und her gesendet werden. Wir haben bei unserem Projekt vor allem Web-APIs verwendet, die eine Schnittstelle zwischen dem Browser und z.B. den Sensoren des Handys ermöglicht.</p>
                                  
 
<h3 id="Kompatibilität">Kompatibilität</h3>  
  <p>Leider waren die von uns eingesetzten APIs nicht in allen Browser kompatibel, daher folgt hier eine Übersicht, welche Browser welche von uns verwendete API unterstützen. Wie der Tabelle zu entnehmen ist, bietet der Browser Chrome (von Google entwickelt) die beste Kompatibilität gefolgt von dem Browser Edge (von Microsoft entwickelt), der das Google Chrome-Module nutzt. Firefox unterstützt entgegen der meisten Quellen im Internet momentan keine bzw. nur wenig Features der PWAs. Hier gibt es weitere Informationen zu der Kompatibilität bei <a href="https://firt.dev/notes/pwa-ios/">IOS-Geräten</a> und <a href="https://firt.dev/notes/pwa/">anderen Geräten</a>.</p>
  
<table>
  <tr><th>APIs</th>                 <th>Zweck</th>  <th>Chrome</th> <th>Edge</th> <th>Safari</th> <th>Firefox</th></tr>
  <tr><td>HTML Geolocation API</td> <td>
    Die API wird bei uns genutzt, um mit der Position des Users die Geschwindigkeit bestimmen zu können.
                                        </td>       <td>Ja</td>     <td>Ja</td>   <td>Ja</td>     <td>Ja</td> </tr>
  <tr><td>HTML Web Storage API</td> <td>
   Diese API wird bei uns genutzt, um Eingaben des Users und Daten wie z.B. die Anzahl der getrunkenen Gläser lokal zu hinterlegen. DIes ist ein Vorteil da wir die Daten nicht auf unserem Server hinterlegen müssen und damit auch keine Informationen für falsche Zwecke nutzen können. Dies ist also die "datenspaarsamste" Möglichkeit, Daten des Users zu speichern. Datenschutz wird daher bei uns großgeschrieben!                                     
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
  <tr><td>Service Worker API</td>   <td>
Der Service-Worker wird bei uns eingesetzt, um Daten zu fetchen (offline zu speichern) und den User zur Verfügung zu stellen. Außerdem werden über ihn weitere wichtige Funktionen gesteuert. Nähere Informationen zum Service-Worker gibt es <a href="#kapitel6">hier</a>. Der Service-Worker basiert auf der Web Workers API und beschreibt eine, im Hintergrund ausgeführte, Programmlogik.    
                                         </td>       <td>Ja</td>     <td>Ja</td>   <td>(Ja) </td>  <td>(Ja) </td> </tr>
</table>
  
  
  <h2 id="kapitel8">8. Kritik</h2>
  <p>Jedes Projekt muss am Ende evaluiert werden. Aus unserer Sich haben wir unser Projekt, die Fittness-PWA, sehr effektiv entwickelt. Effektivität deshalb, weil wir schnell begonnen haben, das Projekt zu entwickeln und es die ganze Zeit vorangetrieben haben und Effektivität der genutzten Ressourcen, da wir uns bereits gut mit der Materie der Web-Entwicklung auskannten, dieses Projekt uns aber auch gefordert hat. Da wir vor allem viel mit JavaScript gearbeitet haben, konnten wir unser Wissen auf diesem Gebiet ausbauen. Es bestanden bei JavaScript zwar schon Grundkenntnisse, diese haben wir aber weiter ausbauen können.<br>
In unserer Kritik möchten wir auch berücksichtigen, welche Elemente wir uns in unserer APP vorgestellt haben und welche wir am Ende umsetzen konnten. Wir haben uns zu Beginn vorgestellt, eine App mit einem richtigen funktionierenden Schrittzähler zu erstellen. Dies hat geklappt, aber nur in einem begrenzten Rahmen. Wir berechnen Schritte in unserer Anwendung über die Gesamtbeschleunigung des Smartphones in Richtung aller Koordinaten-Achsen. Dies funktioniert auch, aber ist aufgrund der eventuellen willkürlichen Bewegungen sehr ungenau, was bedeutet, dass manchmal Schritte gezählt werden, obwohl der User keinen Schritt gemacht hat. Dieser Ungenauigkeit haben wir aber hingenommen, da wir ansonsten ein neues Projekt zum Programmieren eines Schrittzähler-Algorithmusses hätten starten müssen. Das Geheimniss eines guten und genauen Schrittzählers liegt im Algorithmus, der feststellt, wann eine Bewegung als Schritt gezählt wird. Der Apple Schrittzähler, der sehr verlässlichen ist, umfasst einen sehr aufwendig gestalteten Algorithmus. Trotzdem werten wir den Schrittzähler als Erfolg, da wir mit einer Web-API auf Sensoren zugegriffen haben und im Normalfall Schritte zählen können.<br>
Auch haben wir uns vorgestellt, dass unsere APP im Hintergrund funktioniert. Damit haben wir uns auch beschäftigt, haben versucht, die Background-Sync-API einzubinden, welches leider aber scheiterte, da dies bei uns nicht funktionierte. Dieser Aspekt erschwerte uns aber die Entwicklung einiger Funktionen. So war es z.B. ohne Hintergrundaktualisierung schwierig, unsere Daten am Ende des Tages zurückzusetzen und im Hintergrund eine Push-Benachrichtigung zu senden. Dieser Aspekt ist wahrscheinlich auf die noch sehr neue Technologie der PWA zurückzuführen, da wir während unserer Recherche-Phase kaum Informationen zu diesem Thema gefunden haben.<br>
Am Anfang unseres Projektes sind wir nach kurzer Recherche davon ausgegangen, dass unsere PWA auf allen Betriebssystemen funktioniert. Dies war auch unsere Motivation zu Beginn, da wir beide unterschiedliche Betriebssysteme nutzen und bei der Entwicklung einer nativen APP nur einer von uns beiden die APP nutzen könnte. Dies wollten wir vermeiden, weshalb wir uns für die PWA entschieden haben. Leider ist dies nicht der Fall, da unser Schrittzähler leider nur unter Android funktioniert, da Apple den Zugriff auf die Sensoren verbietet. Dies empfinden wir als sehr schade, dies ist aber leider nicht zu ändern. In Zukunft könnte sich dies aber ändern, wenn Apple diesen Zugriff ermöglicht.</p>
    
    
    
  <h2 id="kapitel9">9. Fazit</h2>
  <p>Alles in Allem sind wir aber am Ende unseres Projektes sehr stolz auf unsere PWA, die nach dem letzten Feinschliff auch optisch sehr ansprechend ist. Besonders stolz sind wir aber, dass wir eine so neue Technologie wie die PWA für unser Projekt nutzen konnten, obwohl es zu dieser kaum Informationen im Internet gibt und diese gleichzeitig noch sehr experimentell ist. Da PWAs in Zukunft eine wichtige Rolle auf dem Markt der Mobil-Entwicklung spielen werden, ist dieses Projekt sehr visionär!<br>
Jetzt am Ende der Projektphase stellt sich für uns die Frage, ob wir das Projekt weitertreiben wollen. Dafür würden wir langfristig einen Platz auf einem Server brauchen. Dennoch ist die Technologie der PWA noch sehr experimentell und man vermutet zwar, dass PWAs in Zukunft eine größere Rolle spielen werden, dies muss aber nicht unbedingt der Fall sein. Dies wäre aber für uns sehr von Vorteil, da wir in diesem Projekt gute Kenntniss über das Thema aufbauen konnten.<br>
Abschließend kann man jedoch sagen, dass uns das Projekt sehr viel Spaß gemacht hat und wir unsere App auf jeden Fall in Zukunft auch selber nutzen werden!</p>
  
  
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
  <li>https://androidmag.de/report/10-trends-der-app-entwicklung-die-man-2022-im-auge-behalten-sollte/</li>
  <li>https://www.pwabuilder.com/</li>
  <li>https://de.wikipedia.org/wiki/Progressive_Web_App</li>
  <li>https://de.wikipedia.org/wiki/Mobile-App-Entwicklung</li>
  <li>https://www.quora.com/What-are-progressive-web-applications-PWAs</li>
  <li>https://pwa.bar/</li>
  <li>https://testpalette.de/schrittzaehler-wie-genau-funktioniert-das-zaehlen-von-schritten/</li>
  <li>https://www.ionos.de/digitalguide/websites/web-entwicklung/progressive-web-apps-welche-vorteile-bieten-sie/</li>
  <li>https://developer.mozilla.org/de/docs/Web/JavaScript/Data_structures</li>
  
  <h3>Quellen während der Projektphase</h3>
  
  
  
  <h2 id="kapitel11">11. Eigenständigkeitserklärung</h2>
  
<p>Wir erklären, dass wir die vorliegende Arbeit selbstständig und ohne Benutzung anderer als den angegebenen Hilfsmittel angefertigt und alle Stellen, die wörtlich oder sinngemäß aus veröffentlichten oder unveröffentlichten Schriften entnommen wurden, als solche kenntlich gemacht habe.
  Diese Arbeit wurde nicht, auch nicht auszugsweise, bereits für eine andere Prüfung angefertigt.</p>
