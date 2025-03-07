## Unterschiede und Gemeinsamkeiten analysieren

### Container

| Container  | Netzwerk       | IP-Adresse   | Gateway      |
|------------|---------------|--------------|--------------|
| busybox1   | default bridge | 172.17.0.2   | 172.17.0.1   |
| busybox2   | default bridge | 172.17.0.3   | 172.17.0.1   |
| busybox3   | tbz           | 172.18.0.2   | 172.18.0.1   |
| busybox4   | tbz           | 172.18.0.3   | 172.18.0.1


### Erklärung busybox

BusyBox kombiniert winzige Versionen vieler gängiger UNIX-Dienstprogramme in einer einzigen kleinen ausführbaren Datei. Es bietet Ersatz für die meisten der Dienstprogramme, die Sie normalerweise in den GNU fileutils, shellutils, etc. finden. Die Dienstprogramme in BusyBox haben im Allgemeinen weniger Optionen als ihre vollwertigen GNU-Vettern; die enthaltenen Optionen bieten jedoch die erwartete Funktionalität und verhalten sich sehr ähnlich wie ihre GNU-Gegenstücke. BusyBox bietet eine ziemlich vollständige Umgebung für jedes kleine oder eingebettete System.

BusyBox wurde mit Blick auf die Grössenoptimierung und begrenzte Ressourcen geschrieben. Es ist auch extrem modular, so dass Sie leicht Befehle (oder Funktionen) zur Kompilierzeit ein- oder ausschließen können. Dies macht es einfach, Ihre eingebetteten Systeme anzupassen. Um ein funktionierendes System zu erstellen, fügen Sie einfach einige Geräteknoten in /dev, ein paar Konfigurationsdateien in /etc und einen Linux-Kernel hinzu.

### Gemeinsamkeiten:

Jeder Container hat eine eindeutige IP-Adresse.

Container im selben Netzwerk können miteinander kommunizieren.

Jeder Container erhält ein Default-Gateway vom jeweiligen Netzwerk.

### Unterschiede:

Container im default bridge Netzwerk (busybox1, busybox2) haben Adressen im Bereich 172.17.0.0/16, während Container im tbz Netzwerk (busybox3, busybox4) Adressen im Bereich 172.18.0.0/16 haben.

Das heisst wenn man Zugriff mit Default bridge hat kann man es nur durch IP-Adressen zugreifen.

User defined kann man sowohl per Name und oder per IP-Adresse erreichen.

Es gibt keine direkte Kommunikation zwischen Containern aus unterschiedlichen Netzwerken.

## Vergleich mit KN02

In welchem Netzwerk befanden sich die Container in KN02?

Die Container befanden sich im default bridge Netzwerk.

Warum konnten die Container miteinander kommunizieren?

Im default bridge Netzwerk ermöglicht Docker standardmässig die Kommunikation zwischen Containern über den Container-Namen oder die IP-Adresse.

### Schlussfolgerung:

Container im selben Netzwerk können direkt miteinander kommunizieren.

Für eine bessere Isolation und Kontrolle ist es sinnvoll, eigene Netzwerke zu definieren.

Unterschiedliche Netzwerke benötigen explizite Freigaben (z.B. durch docker network connect oder manuelle Routing-Regeln), um miteinander zu kommunizieren.


![alt text](<Bildschirmfoto 2025-03-07 um 09.58.17.png>) 
![alt text](<Bildschirmfoto 2025-03-07 um 09.58.02.png>) 
![alt text](<Bildschirmfoto 2025-03-07 um 09.57.49.png>) 
![alt text](<Bildschirmfoto 2025-03-07 um 09.57.01.png>)